<?php

if ( class_exists( 'WP_Customize_Panel' ) ) {

  class Wiguard_WP_Customize_Panel extends WP_Customize_Panel {

    public $panel;

    public $type = 'pe_panel';

    public function json() {

      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
      $array['content'] = $this->get_content();
      $array['active'] = $this->active();
      $array['instanceNumber'] = $this->instance_number;

      return $array;

    }

  }

}

if ( class_exists( 'WP_Customize_Section' ) ) {

  class Wiguard_WP_Customize_Section extends WP_Customize_Section {

    public $section;

    public $type = 'pe_section';

    public function json() {

      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
      $array['content'] = $this->get_content();
      $array['active'] = $this->active();
      $array['instanceNumber'] = $this->instance_number;

      if ( $this->panel ) {
        $array['customizeAction'] = sprintf( '%1$s &#9656; %2$s', esc_html__( 'Customizing', 'wiguard' ), esc_html( $this->manager->get_panel( $this->panel )->title ) );
      } else {
        $array['customizeAction'] = esc_html__( 'Customizing', 'wiguard' );
      }

      return $array;

    }

  }

}

function wiguard_customize_on_spot_change_args(){
	$arr = array(
		array( 
			'section_id' 	=> 'wiguard_footer_bottom_section',
			'field_id' 		=> 'copyright-text',
			'selector'		=> '.copyright-text-wrap',
			'changes'		=> ''
		),
		array( 
			'section_id' 	=> 'wiguard_blog_template_section',
			'field_id' 		=> 'blog-page-title',
			'selector'		=> '.blog .page-title',
			'changes'		=> ''
		),
		array( 
			'section_id' 	=> 'wiguard_logo_section',
			'field_id' 		=> 'logo',
			'selector'		=> '.main-logo',
			'changes'		=> ''
		),
		array( 
			'section_id' 	=> 'wiguard_header_general_section',
			'field_id' 		=> 'header-email-label',
			'selector'		=> 'li.wiguard-header-email',
			'changes'		=> ''
		),
		array( 
			'section_id' 	=> 'wiguard_header_general_section',
			'field_id' 		=> 'header-phone-label',
			'selector'		=> 'li.wiguard-header-phone',
			'changes'		=> ''
		),
		array( 
			'section_id' 	=> 'wiguard_header_general_section',
			'field_id' 		=> 'header-address-label',
			'selector'		=> 'li.wiguard-header-address',
			'changes'		=> ''
		),
		array( 
			'section_id' 	=> 'wiguard_header_general_section',
			'field_id' 		=> 'header-address-text',
			'selector'		=> '.header-address',
			'changes'		=> ''
		),
		array( 
			'section_id' 	=> 'wiguard_header_general_section',
			'field_id' 		=> 'header-phone-text',
			'selector'		=> '.header-phone',
			'changes'		=> ''
		),
		array( 
			'section_id' 	=> 'wiguard_header_general_section',
			'field_id' 		=> 'header-email-text',
			'selector'		=> '.header-email',
			'changes'		=> ''
		),
		array( 
			'section_id' 	=> 'wiguard_social_links_section',
			'field_id' 		=> 'social-icons-type',
			'selector'		=> 'ul.nav.social-icons',
			'changes'		=> ''
		),
		array( 
			'section_id' 	=> 'wiguard_header_general_section',
			'field_id' 		=> 'secondary-menu',
			'selector'		=> '.secondary-space-toggle',
			'changes'		=> ''
		)
	);	
	
	return $arr;
}

// Enqueue our scripts and styles
function wiguard_customize_controls_scripts() {
	
	//jQuery UI
	wp_enqueue_script( 'jquery-ui',	WIGUARD_ADMIN_URL .'/customizer/assets/js/jqueryui.js', array( 'jquery' ),	'1.12.1', true );	
	
	//Alpha
	wp_enqueue_script( 'wp-color-picker-alpha', WIGUARD_ADMIN_URL .'/customizer/assets/js/wp-color-picker-alpha.min.js', array( 'jquery', 'wp-color-picker' ), '1.0.0', true );
		
	$changes = wiguard_customize_on_spot_change_args();
	wp_localize_script( 'wiguard-customize-controls', 'customizer_on_spot', $changes );	
	
}
add_action( 'customize_controls_enqueue_scripts', 'wiguard_customize_controls_scripts', 999 );

function wiguard_customize_controls_styles() {
	
	//Wp Color Picker/Alpha
	wp_enqueue_style( 'wp-color-picker' );
	
	//Customizer Fields Styles
	wp_enqueue_style( 'customizer-drag-drop', WIGUARD_ADMIN_URL . '/customizer/assets/css/wiguard-customizer-fileds.css', array(), '1.0' );
	
	//Customizer Control Custom Styles
	wp_enqueue_style( 'wiguard-customize-controls', WIGUARD_ADMIN_URL .'/customizer/assets/css/wiguard-customize-controls.css', array(), '1.0' );
	
}
add_action( 'customize_controls_print_styles', 'wiguard_customize_controls_styles' );

require_once WIGUARD_ADMIN .'/customizer/config-class/googlefonts.php';
require_once WIGUARD_ADMIN .'/customizer/config-class/customizer-config.php';

/* Customizer Ajax Add Fields */
add_action( 'wp_ajax_customizer_fields_trigger', 'wiguard_customizer_fields_trigger_fun' );
function wiguard_customizer_fields_trigger_fun(){

	$nonce = $_POST['nonce'];
	if ( ! wp_verify_nonce( $nonce, 'wiguard-customizer-fields' ) ) wp_die();
	
	$section_name = isset( $_POST['trigger_section'] ) ? $_POST['trigger_section'] : '';
	
	if( $section_name ){
		
		//Activate fields class
		WiguardCustomizerConfig::instance();
		
		$section_name = str_replace( "_","-", $section_name );		
		require_once WIGUARD_ADMIN .'/customizer/config-parts/fields/'. $section_name .'.php';
		
	}

	wp_die();
}

add_action( 'wp_ajax_customizer_fields_custom_save', 'wiguard_customizer_fields_custom_save_fun' );
function wiguard_customizer_fields_custom_save_fun(){
	$nonce = $_POST['nonce'];
	if ( ! wp_verify_nonce( $nonce, 'wiguard-customizer-fields' ) ) wp_die();
	
	if( isset( $_POST['save_stat'] ) && $_POST['save_stat'] == '1' ){
		$t_o = $_POST['wiguard_theme_options'];
		if( !empty( $t_o ) ){
			$curr_opt = get_option( 'wiguard_theme_options_new' );

			if( !empty( $curr_opt  ) ){
				foreach( $t_o as $to => $val ){
					$curr_opt[$to] = $val;
				}
				$wiguard_theme_options = $curr_opt;
				update_option( 'wiguard_theme_options_new', $wiguard_theme_options );
			}else{
				update_option( 'wiguard_theme_options_new', $t_o );
			}				
		}
		update_option( 'wiguard_theme_options_t', '' );
	}else{

		$field_name = isset( $_POST['field_name'] ) ? $_POST['field_name'] : '';
		$field_val = isset( $_POST['field_val'] ) ? $_POST['field_val'] : '';

		$curr_opt = get_option( 'wiguard_theme_options_t' );
		if( empty( $curr_opt ) ) $curr_opt = get_option( 'wiguard_theme_options_new' );
		if( !empty( $curr_opt  ) ){
			if( $field_name ){
				if( isset( $curr_opt[$field_name] ) ){
					$curr_opt[$field_name] = $field_val;
					update_option( 'wiguard_theme_options_t', $curr_opt );
				}
			}else{
				$t_o = $_POST['wiguard_theme_options'];
				if( !empty( $t_o ) ){
					foreach( $t_o as $to => $val ){
						$curr_opt[$to] = $val;
					}
					update_option( 'wiguard_theme_options_t', $curr_opt );
				}
			}
		}			

	}

	//Set google fonts
	wiguard_set_google_fonts();
	
	$custom_css = wiguard_get_dynamic_styles();
	update_option( 'wiguard_theme_custom_styles', $custom_css );

	echo "success";
	wp_die();
}

add_action('wp_ajax_wiguard-theme-options-export', 'wiguard_theme_options_export');
function wiguard_theme_options_export(){
	$nonce = $_POST['nonce'];
  
    if ( ! wp_verify_nonce( $nonce, 'wiguard-options-export' ) )
        die ( esc_html__( 'Busted!', 'wiguard' ) );
	
	$wiguard_options = get_option( 'wiguard_theme_options_new');
	$wiguard_options = is_array( $wiguard_options ) ? array_map( 'stripslashes_deep', $wiguard_options ) : stripslashes( $wiguard_options );
	echo json_encode( $wiguard_options );
	
	exit;
}


add_action( 'wp_ajax_wiguard-theme-option-import', 'wiguard_redux_themeopt_import' );
function wiguard_redux_themeopt_import(){
	$nonce = $_POST['nonce'];
	  
	if ( ! wp_verify_nonce( $nonce, 'wiguard-options-import' ) )
		die ( esc_html__( 'Busted', 'wiguard' ) );
	
	$json_data = isset( $_POST['json_data'] ) ? stripslashes( urldecode( $_POST['json_data'] ) ) : '';
	$theme_opt_arr = json_decode( $json_data, true );
	if( !empty( $theme_opt_arr ) ){
		update_option( 'wiguard_theme_options_t', $theme_opt_arr );
		update_option( 'wiguard_theme_options_new', $theme_opt_arr );
	}
	
	wp_die();
}

function wiguard_post_option_drag_drop_multi_t( $key, $post_items ) {
	$output = '<ul class="meta-items ui-sortable" data-part="'. esc_attr( $key ) .'">';
	if( !empty( $post_items ) ){
		foreach( $post_items as $key => $value ){
			$output .= '<li data-id="'. esc_attr( $key ) .'" data-val="'. esc_attr( $value ) .'">'. esc_attr( $value ) .'</li>';
		}
	}
	$output .= '</ul>';
	return $output;
}

add_action( 'wp_ajax_wiguard-temp-options-clear', 'wiguard_themeopt_clear' );
function wiguard_themeopt_clear(){
	$nonce = $_POST['nonce'];
	if ( ! wp_verify_nonce( $nonce, 'wiguard-temp-options-vanish' ) )
		die ( esc_html__( 'Busted', 'wiguard' ) );
	update_option( 'wiguard_theme_options_t', '' );
	echo "cleared";
	wp_die();
}