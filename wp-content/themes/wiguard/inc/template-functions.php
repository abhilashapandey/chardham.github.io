<?php
/**
 * Additional features to allow styling of the templates
 */
function wiguard_page_option_styles() {
	
	//global $wiguard_custom_styles;
	$wiguard_custom_styles = '';
	
	$page_opt_exists = get_post_meta( get_the_ID(), 'wiguard_page_layout', true );
	$post_opt_exists = get_post_meta( get_the_ID(), 'wiguard_post_layout', true );

	// Page Styles
	require_once WIGUARD_THEME_ELEMENTS . '/page-styles.php';
	if( $page_opt_exists ){
		ob_start();
		wiguard_page_custom_styles();
		$wiguard_custom_styles = ob_get_clean();
	}elseif( $post_opt_exists ){
		ob_start();
		wiguard_post_custom_styles();
		$wiguard_custom_styles = ob_get_clean();			
	}
	
	return function_exists( 'wiguard_minifyCss' ) ? wiguard_minifyCss( $wiguard_custom_styles ) : $wiguard_custom_styles;
	
}

add_action('wp_ajax_wiguard-custom-sidebar-export', 'wiguard_custom_sidebar_export');
function wiguard_custom_sidebar_export(){
	$nonce = $_POST['nonce'];
  
    if ( ! wp_verify_nonce( $nonce, 'wiguard-sidebar-featured' ) )
        die ( esc_html__( 'Busted!', 'wiguard' ) );
	
	$sidebar = get_option('wiguard_custom_sidebars');
	echo ( ''. $sidebar );
	
	exit;
}

function wiguard_po_exists( $post_id = '' ){

	if( empty( $post_id ) && is_search() ){
		return false;
	}
	
	$post_id = $post_id ? $post_id : get_the_ID();
	$stat = get_post_meta( $post_id, 'wiguard_page_layout', true );
	
	if( $stat )
		return true;
	else
		return false;
}
if( ! function_exists('wiguard_mailchimp') ) {
	function wiguard_mailchimp(){
		$nonce = $_POST['nonce'];
	  
		if ( ! wp_verify_nonce( $nonce, 'wiguard-mailchimp' ) )
			die ( esc_html__( 'Busted', 'wiguard' ) );
			
		if( isset( $_POST['zozo_mc_email'] ) ) {
			
			$first_name = 'zozo_mc_first_name';
			$last_name = 'zozo_mc_last_name';
			$email = 'zozo_mc_email';
			$listid = 'wiguard_mc_listid';

			$mc_key = WiguardThemeOpt::wiguard_static_theme_mod( 'mailchimp-api' );
			$mcapi = new MCAPI( $mc_key );
			
			$merge_vars = array();
			$merge_vars['FNAME'] = isset($_POST[$first_name]) ? strip_tags($_POST[$first_name]) : '';
			$merge_vars['LNAME'] = isset($_POST[$last_name]) ? strip_tags($_POST[$last_name]) : '';
			$subscribed = $mcapi->listSubscribe(strip_tags($_POST[$listid]), strip_tags($_POST[$email]), $merge_vars);
			
			if ($subscribed != false) {
				echo 'success';
			}else{
				echo 'failed';
			}
		}
		die();
	}
	add_action('wp_ajax_nopriv_zozo-mc', 'wiguard_mailchimp');
	add_action('wp_ajax_zozo-mc', 'wiguard_mailchimp');
}
if( ! function_exists('wiguard_star_rating') ) {
	function wiguard_star_rating( $rate ){
		$out = '';
		for( $i=1; $i<=5; $i++ ){
			
			if( $i == round($rate) ){
				if ( $i-0.5 == $rate ) {
					$out .= '<i class="ti-star ti-half-star"></i>';
				}else{
					$out .= '<i class="ti-star"></i>';
				}
			}else{
				if( $i < $rate ){
					$out .= '<i class="ti-star"></i>';
				}else{
					$out .= '<i class="ti-star-o"></i>';
				}
			}
		}// for end
		
		return $out;
	}
}
/*Search Options*/
if( ! function_exists('wiguard_search_post') ) {
	function wiguard_search_post($query) {
		if ($query->is_search) {
			$query->set('post_type',array('post'));
		}
	return $query;
	}
}
if( ! function_exists('wiguard_search_page') ) {
	function wiguard_search_page($query) {
		if ($query->is_search) {
			$query->set('post_type',array('page'));
		}
	return $query;
	}
}
if( ! function_exists('wiguard_search_setup') ) {
	function wiguard_search_setup(){
		$search_cont = WiguardThemeOpt::wiguard_static_theme_mod( 'search-content' );
		if( $search_cont == "post" ){
			add_filter('pre_get_posts','wiguard_search_post');
		}elseif( $search_cont == "page" ){
			add_filter('pre_get_posts','wiguard_search_page');
		}
	}
	add_action( 'after_setup_theme', 'wiguard_search_setup' );
}
//Return same value for filter
if( ! function_exists('__return_value') ) {
	function __return_value( $value ) {
		return function () use ( $value ) {
			return $value; 
		};
	}
}

/*Facebook Comments Code*/
if( ! function_exists('wiguard_fb_comments_code') ) {
	function wiguard_fb_comments_code(){
		$fb_width = WiguardThemeOpt::wiguard_static_theme_mod( 'fb-comments-width' );
		$fb_width = isset( $fb_width['width'] ) && $fb_width['width'] != '' ? esc_attr( $fb_width['width'] ) : '300px';
		$comment_num = WiguardThemeOpt::wiguard_static_theme_mod( 'fb-comments-number' );
		$fb_number = $comment_num != '' ? absint( $comment_num ) : '5';
?>
		<div class="fb-comments" data-href="<?php esc_url( the_permalink() ); ?>" data-width="<?php echo esc_attr( $fb_width ); ?>" data-numposts="<?php echo esc_attr( $fb_number ); ?>"></div>
	<?php
	}
}
if( !function_exists( 'wiguard_shortcode_rand_id' ) ) {
	function wiguard_shortcode_rand_id() {
		static $shortcode_rand = 1;
		return $shortcode_rand++;
	}
}
if( !function_exists( 'wiguard_search_stat' ) ) {
	function wiguard_search_stat() {
		static $search_stat = 0;
		return $search_stat++;
	}
}
/*Image Size Check*/
function wiguard_custom_image_size_chk( $thumb_size, $custom_size = array(), $hardcrop = true ){
	$img_sizes = $img_width = $img_height = $src = '';
	$img_stat = 0;
	$custom_img_size = '';
		
	if( class_exists('Aq_Resize') ) {
		
		$src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), "full", false, '' );
		$img_width = $img_height = '';
		if( !empty( $custom_size ) ){
			$img_width = isset( $custom_size[0] ) ? $custom_size[0] : '';
			$img_height = isset( $custom_size[1] ) ? $custom_size[1] : '';
		}else{
			$custom_img_size = WiguardThemeOpt::wiguard_static_theme_mod($thumb_size);
			$img_width = isset( $custom_img_size['width'] ) ? $custom_img_size['width'] : '';
			$img_height = isset( $custom_img_size['height'] ) ? $custom_img_size['height'] : '';
		}
		
		$cropped_img = aq_resize( $src[0], $img_width, $img_height, $hardcrop, false );
		if( $cropped_img ){
			$img_src = isset( $cropped_img[0] ) ? $cropped_img[0] : '';
			$img_width = isset( $cropped_img[1] ) ? $cropped_img[1] : '';
			$img_height = isset( $cropped_img[2] ) ? $cropped_img[2] : '';
		}else{
			$img_stat = 1;
		}
	}
	if( $img_stat ){
		$src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $thumb_size, false, '' );
		$img_src = $src[0];
		$img_width = isset( $src[1] ) ? $src[1] : '';
		$img_height = isset( $src[2] ) ? $src[2] : '';
	}
	
	return array( $img_src, $img_width, $img_height );
}
if( ! function_exists('wiguard_hex2rgb') ) {
	function wiguard_hex2rgb($hex,$lvl) {
		$hex = str_replace("#", "", $hex);
		if(strlen($hex) == 3) {
		$r = hexdec(substr($hex,0,1).substr($hex,0,1));
		$g = hexdec(substr($hex,1,1).substr($hex,1,1));
		$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
		$r = hexdec(substr($hex,0,2));
		$g = hexdec(substr($hex,2,2));
		$b = hexdec(substr($hex,4,2));
		}
		$r = max(0,min(255,$r + $lvl));
		$g = max(0,min(255,$g + $lvl));
		$b = max(0,min(255,$b + $lvl));
		$rgb = $r.','.$g.','.$b;
		return $rgb; // returns an array with the rgb values
	}
}

function wiguard_get_dynamic_styles(){
	ob_start();
	require_once WIGUARD_THEME_ELEMENTS . '/theme-styles.php';
	$css_out = ob_get_clean();
	if( function_exists( 'wiguard_minifyCss' ) ){
		$css_out = wiguard_minifyCss( $css_out );
	}	
	return $css_out;
}
