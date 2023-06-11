<?php 
/*
	Plugin Name: Wiguard Core
	Plugin URI: https://zozothemes.com/
	Description: Core plugin for wiguard theme.
	Version: 1.0.1
	Author: zozothemes
	Author URI: https://zozothemes.com/
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$cur_theme = wp_get_theme();	
$token = get_option( 'verified_token' );
if ( $cur_theme->get( 'Name' ) != 'Wiguard' && $cur_theme->get( 'Name' ) != 'Wiguard Child' && !empty( $token ) ){
	return;
}
define( 'WIGUARD_CORE_DIR', plugin_dir_path( __FILE__ ) );
define('WIGUARD_CORE_URL', plugin_dir_url( __FILE__ ) );
define('WIGUARD_THEME_ADMIN_URL', get_template_directory_uri().'/admin');

load_plugin_textdomain( 'wiguard-core', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

//Maintenance 
require_once( WIGUARD_CORE_DIR . 'wiguard-framework.php' );
require_once( WIGUARD_CORE_DIR . 'maintenance/maintenance.php' );

//Elementor
require_once( WIGUARD_CORE_DIR . 'elementor-supports/wiguard-elementor.php' );

// Custom Post Types
require_once( WIGUARD_CORE_DIR . 'cpt/cpt-class.php' );

//Metabox
require_once( WIGUARD_CORE_DIR . 'admin/metabox/metaboxes/meta_box.php' );


add_action( 'plugins_loaded', 'wiguard_custom_plugins_loaded_hook' );
function wiguard_custom_plugins_loaded_hook() {
   require_once( WIGUARD_CORE_DIR . 'custom-sidebar/sidebar-generator.php' );
   require_once( WIGUARD_CORE_DIR . 'admin/metabox/inc/wiguard-metabox.php' );
}
// Wiguard Shortcode
require_once( WIGUARD_CORE_DIR . 'admin/shortcodes/shortcodes.php' );
// Wiguard Theme Custom Font Upload Option
require_once( WIGUARD_CORE_DIR . 'custom-font-code/custom-fonts.php' );
// Wiguard AQ Resizer
require_once( WIGUARD_CORE_DIR . 'inc/aq_resizer.php' );

require_once( WIGUARD_CORE_DIR . 'inc/theme-style-class.php' );

// Wiguard Widgets
require_once( WIGUARD_CORE_DIR . 'widgets/about_widget.php' );
require_once( WIGUARD_CORE_DIR . 'widgets/latest_post_widget.php' );
require_once( WIGUARD_CORE_DIR . 'widgets/popular_post_widget.php' );
require_once( WIGUARD_CORE_DIR . 'widgets/tab_post_widget.php' );
require_once( WIGUARD_CORE_DIR . 'widgets/author_widget.php' );
require_once( WIGUARD_CORE_DIR . 'widgets/contact_info_widget.php' );
require_once( WIGUARD_CORE_DIR . 'widgets/instagram_widget.php' );
require_once( WIGUARD_CORE_DIR . 'widgets/social_widget.php' );
require_once( WIGUARD_CORE_DIR . 'widgets/tweets_widget.php' );
require_once( WIGUARD_CORE_DIR . 'widgets/mailchimp_widget.php' );

//Child theme style and scripts
add_action( 'wp_enqueue_scripts', 'wiguard_core_scripts' );
function wiguard_core_scripts(){
	wp_enqueue_script( 'wiguard-theme-core', WIGUARD_CORE_URL . 'assets/js/theme-core.js', array( 'jquery' ), '1.0', true );
}

// Category Meta Field
require_once( WIGUARD_CORE_DIR . 'inc/wiguard-category-meta.php' );
function wiguard_core_admin_scripts_method() {
	wp_enqueue_style( 'wiguard-core-custom-style', plugins_url( '/admin/assets/css/theme-custom.css' , __FILE__ ), false, '1.0.0' );
    wp_enqueue_script( 'wiguard-core-custom', plugins_url( '/admin/assets/js/theme-custom.js' , __FILE__ ), array( 'jquery' ) );
	
	//Admin Localize Script
	wp_localize_script('wiguard-core-custom', 'wiguard_core_admin_ajax_var', array(
		'admin_ajax_url' => admin_url('admin-ajax.php'),
		'font_nonce' => wp_create_nonce('wiguard-font-nounce'), 
		'process' => esc_html__( 'Processing', 'wiguard-core' ),
		'font_del_pbm' => esc_html__( 'Font Deletion Problem', 'wiguard-core' )
	));
		
}
add_action( 'admin_enqueue_scripts', 'wiguard_core_admin_scripts_method' );
/*Author Social Links*/
if( ! function_exists('wiguard_author_contactmethods') ) {
	function wiguard_author_contactmethods( $contactmethods ) {
		$contactmethods['twitter'] = esc_html__('Twitter URL', 'wiguard-core');
		$contactmethods['facebook'] = esc_html__('Facebook URL', 'wiguard-core');
		$contactmethods['vimeo'] = esc_html__('Vimeo URL', 'wiguard-core');
		$contactmethods['youtube'] = esc_html__('Youtube URL', 'wiguard-core');
		
		return $contactmethods;
	}
	add_filter('user_contactmethods','wiguard_author_contactmethods',10,1);
}
/*Facebook Comments JS*/
if( ! function_exists('wiguard_fb_comments_js') ) {
	function wiguard_fb_comments_js(){
		$ato = new WiguardThemeOpt;
		$comment_type = WiguardFamework::wiguard_static_theme_mod( 'comments-type' );
		if( $comment_type == 'fb' && is_single() ) :
			$fb_dev_api = WiguardFamework::wiguard_static_theme_mod( 'fb-developer-key' );
		?>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=<?php echo esc_attr( $fb_dev_api ); ?>";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		<?php
		endif;
	}
	add_action( 'wiguard_body_action', 'wiguard_fb_comments_js', 50 );
}
/* Add Admin Table Columns Head */
function wiguard_columns_head( $defaults ) {
	if ( current_user_can( 'manage_options' ) ) {
		$defaults['wiguard_post_featured_stat'] = esc_html__( 'Featured', 'wiguard-core' );
	}
    return $defaults;
}
add_filter('manage_post_posts_columns', 'wiguard_columns_head');
/* Add Admin Table Coulmn */
function wiguard_columns_content( $column_name, $post_ID ) {
	if ( current_user_can( 'manage_options' ) ) {
		if ( $column_name == 'wiguard_post_featured_stat' ) {
			$meta = get_post_meta( $post_ID, 'wiguard_post_featured_stat', true );
			$out = '<label class="wiguard-switch">
						<input type="checkbox" data-post="'.$post_ID.'" class="wiguard-post-featured-status" '. ( $meta == 1 ? 'checked' : '' ) .'>
						<div class="wiguard-slider round"></div>
					</label><br />
					<span id="post-featured-stat-msg-'.$post_ID.'"></span>';
			echo ( $out );
		}
	}
}
add_action('manage_post_posts_custom_column', 'wiguard_columns_content', 10, 2);
/* Active Featured Status */
add_action('wp_ajax_wiguard-post-featured-active', 'wiguard_post_featured_active');
function wiguard_post_featured_active(){
	$nonce = $_POST['nonce'];
  
    if ( ! wp_verify_nonce( $nonce, 'wiguard-post-featured' ) )
        die ( esc_html__( 'Busted!', 'wiguard-core' ) );
	
	update_post_meta( esc_attr( $_POST['postid'] ), 'wiguard_post_featured_stat', esc_attr($_POST['featured-stat']) );
	exit;
}
//Get server software
function wiguard_get_server_software(){
	return $_SERVER['SERVER_SOFTWARE'];
}
//Get remote address
function wiguard_get_remote_ip(){
	return $_SERVER['REMOTE_ADDR'];
}
//RTL Check
add_filter( 'body_class','wiguard_extra_body_classes' );
function wiguard_extra_body_classes( $classes ) {
	if( is_array( $classes ) ){
		$rtl = WiguardFamework::wiguard_static_theme_mod( 'rtl' );
		if( $rtl ) $classes[] = 'rtl';
		
		$page_loader_stat = false;
		$page_loader = WiguardFamework::wiguard_static_theme_mod('page-loader');
		if( $page_loader ){
			$page_load_img = WiguardFamework::wiguard_static_theme_mod('page-loader-img');
			$page_loader_stat = isset( $page_load_img['url'] ) && !empty( $page_load_img['url'] ) ? true : false;
		}
		if( !$page_loader_stat ) $classes[] = 'opacity-zero';
	}
	return $classes;	
}
// Facebook Share Code
//Adding the Open Graph in the Language Attributes
function wiguard_add_opengraph_doctype( $output ) {
	return $output . ' prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"';
}
add_filter('language_attributes', 'wiguard_add_opengraph_doctype');
function wiguard_insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
	
	ob_start();
	the_excerpt();
	$excerpt = ob_get_clean();	
	
	echo '<meta property="og:title" content="' . get_the_title() . '"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="' . esc_url( get_permalink() ) . '"/>
<meta property="og:site_name" content="'. get_bloginfo( 'name' ) .'"/>
<meta property="og:description" content="'. $excerpt .'"/>';
	
	if( has_post_thumbnail( $post->ID ) ) {
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
		echo '
<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>
<meta property="og:image:width" content="' . esc_attr( $thumbnail_src[1] ) . '"/>
<meta property="og:image:height" content="' . esc_attr( $thumbnail_src[2] ) . '"/>
';
	}
}
add_action( 'wp_head', 'wiguard_insert_fb_in_head', 5 );

//Google Fonts
add_action( 'wp_head', 'wiguardGoogleFontsCon', 10 );
function wiguardGoogleFontsCon(){

	$g_arr = get_option( 'wiguard_custom_google_fonts' );
	$g_arr = !empty( $g_arr ) ? $g_arr : wiguard_set_google_fonts();
	
	if( !empty( $g_arr ) ){
	
		$g_fonts = array();
		$g_arr_len = count( $g_arr );
		$i = 0;
		$sub_sets = array();
		$sub_str = '';
		foreach( $g_arr as $family => $weght_sub ){
			$i++;
			$weight = isset( $weght_sub['weight'] ) && !empty( $weght_sub['weight'] ) ? implode( ",", array_unique( $weght_sub['weight'] ) ) : '';
			$subset = isset( $weght_sub['subset'] ) && !empty( $weght_sub['subset'] ) ? $weght_sub['subset'] : '';
			$sub_sets = array_merge( $sub_sets, $subset );
			$font_attr = !empty( $weight ) ? $weight : $weight;
			if( $g_arr_len == $i && !empty( $sub_sets ) ){
				$sub_sets = implode( ",", array_unique( $sub_sets ) );
				$font_attr = $font_attr . '&amp;subset='. $sub_sets;
			}
			$g_fonts[] = urlencode_deep( $family ) .':'. $font_attr;
		}
		$web_font_arr = str_replace( '"', "'", json_encode( $g_fonts ) );
		 ?>
		<script>
			/* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
			if ( typeof WebFontConfig === "undefined" ) {
				WebFontConfig = new Object();
			}
			WebFontConfig['google'] = {families: <?php echo str_replace( "', ", "',", $web_font_arr ); ?>};
	
			(function() {
				var wf = document.createElement( 'script' );
				wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName( 'script' )[0];
				s.parentNode.insertBefore( wf, s );
			})();
		</script>
		<?php
	}//google font exists
}


/* VC Shortcodes */
add_shortcode( 'wiguard_vc_circle_progress', 'wiguard_vc_circle_progress_shortcode' );
add_shortcode( 'wiguard_vc_compare_pricing', 'wiguard_vc_compare_pricing_shortcode' );
add_shortcode( 'wiguard_vc_content_carousel', 'wiguard_vc_content_carousel_shortcode' );
add_shortcode( 'wiguard_vc_counter', 'wiguard_vc_counter_shortcode' );
add_shortcode( 'wiguard_vc_day_counter', 'wiguard_vc_day_counter_shortcode' );
add_shortcode( 'wiguard_vc_events', 'wiguard_vc_events_shortcode' );
add_shortcode( 'wiguard_vc_feature_box', 'wiguard_vc_feature_box_shortcode' );
add_shortcode( 'wiguard_vc_flip_box', 'wiguard_vc_flip_box_shortcode' );
add_shortcode( 'wiguard_vc_google_map', 'wiguard_vc_google_map_shortcode' );
add_shortcode( 'wiguard_vc_icons', 'wiguard_vc_icons_shortcode' );
add_shortcode( 'wiguard_vc_mailchimp', 'wiguard_vc_mailchimp_shortcode' );
add_shortcode( 'wiguard_vc_modal_popup', 'wiguard_vc_modal_popup_shortcode' );
add_shortcode( 'wiguard_vc_portfolio', 'wiguard_vc_portfolio_shortcode' );
add_shortcode( 'wiguard_vc_blog', 'wiguard_vc_blog_shortcode' );
add_shortcode( 'wiguard_vc_blog_classic', 'wiguard_vc_blog_classic_shortcode' );
add_shortcode( 'wiguard_vc_pricing_table', 'wiguard_vc_pricing_table_shortcode' );
add_shortcode( 'wiguard_vc_section_title', 'wiguard_vc_section_title_shortcode' );
add_shortcode( 'wiguard_vc_services', 'wiguard_vc_services_shortcode' );
add_shortcode( 'wiguard_vc_social_icons', 'wiguard_vc_social_icons_shortcode' );
add_shortcode( 'wiguard_vc_team', 'wiguard_vc_team_shortcode' );
add_shortcode( 'wiguard_vc_testimonial', 'wiguard_vc_testimonial_shortcode' );
add_shortcode( 'wiguard_vc_timeline', 'wiguard_vc_timeline_shortcode' );
add_shortcode( 'wiguard_vc_timeline_slide', 'wiguard_vc_timeline_slide_shortcode' );
add_shortcode( 'wiguard_vc_twitter', 'wiguard_vc_twitter_shortcode' );
add_shortcode( 'wiguard_vc_image_grid', 'wiguard_vc_image_grid_shortcode' );
add_shortcode( 'wiguard_vc_contact_form', 'wiguard_vc_contact_form_shortcode' );
add_shortcode( 'wiguard_vc_contact_info', 'wiguard_vc_contact_info_shortcode' );
add_shortcode( 'wiguard_vc_list_item', 'wiguard_vc_list_item_shortcode' );
add_shortcode( 'wiguard_vc_portfolio_single', 'wiguard_vc_portfolio_single_shortcode' );
add_shortcode( 'wiguard_vc_button', 'wiguard_vc_button_shortcode' );
add_shortcode( 'wiguard_vc_tabs', 'wiguard_vc_tabs_shortcode' );
add_shortcode( 'wiguard_vc_tab', 'wiguard_vc_tab_shortcode' );
add_shortcode( 'wiguard_vc_cobbles', 'wiguard_vc_cobbles_shortcode' );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

add_action( 'customize_controls_enqueue_scripts', 'wiguard_core_customize_controls_scripts', 999 );
function wiguard_core_customize_controls_scripts() {

	$wiguard_theme_options_t = get_option( 'wiguard_theme_options_t' );
	$stat = !empty( $wiguard_theme_options_t ) ? 1 : 0;
	
	//Customizer Control Custom Scripts
	wp_enqueue_script( 'wiguard-customize-controls', WIGUARD_CORE_URL .'admin/assets/js/wiguard-customize-controls.js', array( 'jquery' ), '1.0', true );
	
	//Google Fonts
	$customizer_fonts_vars = array( 
		'customizer_fonts_ajaxurl' => admin_url( 'admin-ajax.php' ),
		'google_fonts' => Wiguard_Google_Fonts_Function::$_google_fonts,
		'standard_font_variants' => Wiguard_Google_Fonts_Function::$_standard_font_variants,
		'font_variants_default' => esc_html__( 'Font Weight &amp; Style', 'wiguard' ),
		'font_sub_default' => esc_html__( 'Font Subsets', 'wiguard' ),
		'temp_opt_stat' => $stat,
		'temp_clear_txt' => esc_html__( 'Clear customizer temp values', 'wiguard' )
	);
	wp_localize_script( 'wiguard-customize-controls', 'customizer_fonts_vars', $customizer_fonts_vars );
}

function wiguard_minifyCss($css) { 
	// some of the following functions to minimize the css-output are directly taken
	// from the awesome CSS JS Booster: https://github.com/Schepp/CSS-JS-Booster
	// all credits to Christian Schaefer: http://twitter.com/derSchepp
	// remove comments
	$css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
	// backup values within single or double quotes
	preg_match_all('/(\'[^\']*?\'|"[^"]*?")/ims', $css, $hit, PREG_PATTERN_ORDER);
	for ($i=0; $i < count($hit[1]); $i++) {
		$css = str_replace($hit[1][$i], '##########' . $i . '##########', $css);
	}
	// remove traling semicolon of selector's last property
	$css = preg_replace('/;[\s\r\n\t]*?}[\s\r\n\t]*/ims', "}\r\n", $css);
	// remove any whitespace between semicolon and property-name
	$css = preg_replace('/;[\s\r\n\t]*?([\r\n]?[^\s\r\n\t])/ims', ';$1', $css);
	// remove any whitespace surrounding property-colon
	$css = preg_replace('/[\s\r\n\t]*:[\s\r\n\t]*?([^\s\r\n\t])/ims', ':$1', $css);
	// remove any whitespace surrounding selector-comma
	$css = preg_replace('/[\s\r\n\t]*,[\s\r\n\t]*?([^\s\r\n\t])/ims', ',$1', $css);
	// remove any whitespace surrounding opening parenthesis
	$css = preg_replace('/[\s\r\n\t]*{[\s\r\n\t]*?([^\s\r\n\t])/ims', '{$1', $css);
	// remove any whitespace between numbers and units
	$css = preg_replace('/([\d\.]+)[\s\r\n\t]+(px|em|pt|%)/ims', '$1$2', $css);
	// shorten zero-values
	$css = preg_replace('/([^\d\.]0)(px|em|pt|%)/ims', '$1', $css);
	// constrain multiple whitespaces
	$css = preg_replace('/\p{Zs}+/ims',' ', $css);
	// remove newlines
	$css = str_replace(array("\r\n", "\r", "\n"), '', $css);
	// Restore backupped values within single or double quotes
	for ($i=0; $i < count($hit[1]); $i++) {
		$css = str_replace('##########' . $i . '##########', $hit[1][$i], $css);
	}
	return $css;
}

//Wiguard additional process class
require_once( WIGUARD_CORE_DIR . 'inc/class.wiguard-additional-process.php' );
