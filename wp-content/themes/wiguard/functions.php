<?php
/**
 * Wiguard functions and definitions
 *
 */
/**
 * Wiguard predifined vars
 */
define('WIGUARD_ADMIN', get_template_directory().'/admin');
define('WIGUARD_INC', get_template_directory().'/inc');
define('WIGUARD_THEME_ELEMENTS', get_template_directory().'/admin/theme-elements');
define('WIGUARD_ADMIN_URL', get_template_directory_uri().'/admin');
define('WIGUARD_INC_URL', get_template_directory_uri().'/inc');
define('WIGUARD_ASSETS', get_template_directory_uri().'/assets');
/* Custom Inline Css */
$wiguard_custom_styles = "";

//Theme Default
require_once WIGUARD_ADMIN . '/theme-default/theme-default.php';
require_once WIGUARD_ADMIN . '/theme-elements/predefined-layouts.php';

//Customizer class
if ( class_exists( 'WiguardFamework' ) ) {
	require_once WIGUARD_ADMIN . '/customizer/wiguard-customizer.php';
}

require_once WIGUARD_INC . '/theme-class/theme-class.php';
require_once WIGUARD_INC . '/walker/wp_bootstrap_navwalker.php';
require_once WIGUARD_ADMIN . '/mega-menu/custom_menu.php';

//TGM
require_once WIGUARD_ADMIN . '/tgm/tgm-init.php'; 
require_once WIGUARD_ADMIN . '/welcome-page/welcome.php';

//ZOZO IMPORTER
if( class_exists( 'Wiguard_Zozo_Admin_Page' ) ){
	require_once WIGUARD_ADMIN . '/welcome-page/importer/zozo-importer.php'; 	
}

//Woo
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	require_once WIGUARD_INC . "/woo-functions.php";
}
// Setup the Theme Customizer settings and controls...

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wiguard_setup() {
	/* Wiguard Text Domain */
	load_theme_textdomain( 'wiguard', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	
	/* Custom background */
	$defaults = array(
		'default-color'          => '',
		'default-image'          => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );
	
	/* Custom header */
	$defaults = array(
		'default-image'          => '',
		'random-default'         => false,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );
	
	/* Content width */
	if ( ! isset( $content_width ) ) $content_width = 640;

	$grid_large = WiguardThemeOpt::wiguard_static_theme_mod('wiguard_grid_large');
	$grid_medium = WiguardThemeOpt::wiguard_static_theme_mod('wiguard_grid_medium');
	$grid_small = WiguardThemeOpt::wiguard_static_theme_mod('wiguard_grid_small');
	$port_masonry = WiguardThemeOpt::wiguard_static_theme_mod('wiguard_portfolio_masonry');
	
	if( !empty( $grid_large ) && is_array( $grid_large ) ) add_image_size( 'wiguard-grid-large', $grid_large['width'], $grid_large['height'], true );
	if( !empty( $grid_medium ) && is_array( $grid_medium ) ) add_image_size( 'wiguard-grid-medium', $grid_medium['width'], $grid_medium['height'], true );
	if( !empty( $grid_small ) && is_array( $grid_small ) ) add_image_size( 'wiguard-grid-small', $grid_small['width'], $grid_small['height'], true );
	
	//Team
	$team_medium = WiguardThemeOpt::wiguard_static_theme_mod('wiguard_team_medium');
	if( !empty( $team_medium ) && is_array( $team_medium ) ) add_image_size( 'wiguard-team-medium', $team_medium['width'], $team_medium['height'], true );
	update_option( 'large_size_w', 1170 );
	update_option( 'large_size_h', 694 );
	update_option( 'large_crop', 1 );
	update_option( 'medium_size_w', 768 );
	update_option( 'medium_size_h', 456 );
	update_option( 'medium_crop', 1 );
	update_option( 'thumbnail_size_w', 80 );
	update_option( 'thumbnail_size_h', 80 );
	update_option( 'thumbnail_crop', 1 );
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top-menu'		=> esc_html__( 'Top Bar Menu', 'wiguard' ),
		'primary-menu'	=> esc_html__( 'Primary Menu', 'wiguard' ),
		'mobile-menu'	=> esc_html__( 'Mobile Menu', 'wiguard' ),
		'footer-menu'	=> esc_html__( 'Footer Menu', 'wiguard' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	/*
	 * Enable support for Post Formats.
	 *
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style-editor.css' );

	// Editor color palette.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Dark Gray', 'wiguard' ),
				'slug'  => 'dark-gray',
				'color' => '#111',
			),
			array(
				'name'  => esc_html__( 'Light Gray', 'wiguard' ),
				'slug'  => 'light-gray',
				'color' => '#767676',
			),
			array(
				'name'  => esc_html__( 'White', 'wiguard' ),
				'slug'  => 'white',
				'color' => '#FFF',
			),
		)
	);

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'wiguard_setup' );
/**
 * Register widget area.
 *
 */
function wiguard_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wiguard' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'wiguard' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Menu Sidebar', 'wiguard' ),
		'id'            => 'secondary-menu-sidebar',
		'description'   => esc_html__( 'Add widgets here to appear in your secondary menu area.', 'wiguard' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'wiguard' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your footer 1st column.', 'wiguard' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'wiguard' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here to appear in your footer 2nd column.', 'wiguard' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'wiguard' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here to appear in your footer 3rd column.', 'wiguard' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'wiguard' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Add widgets here to appear in your footer 4th column.', 'wiguard' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Instagram', 'wiguard' ),
		'id'            => 'sidebar-6',
		'description'   => esc_html__( 'Add widgets here to appear in your footer top.', 'wiguard' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'wiguard_widgets_init' );
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Wiguard 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function wiguard_excerpt_more( $link ) {
	return '';
}
add_filter( 'excerpt_more', 'wiguard_excerpt_more' );

/**
 * Admin Enqueue scripts and styles.
 */
function wiguard_enqueue_admin_script() { 
	
	//Themify Icons
	wp_register_style( 'themify-icons', get_theme_file_uri( '/assets/css/themify-icons.css' ), array(), '1.0' );
	wp_enqueue_style( 'themify-icons' );
	
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'wp-color-picker' );

	wp_enqueue_style( 'wiguard-admin-style', get_theme_file_uri( '/admin/assets/css/admin-style.css' ), array(), '1.0' );
	
	// Meta Drag and Drop Script
	wp_enqueue_script( 'wiguard-admin-scripts', get_theme_file_uri( '/admin/assets/js/admin-scripts.js' ), array( 'jquery' ), '1.0', true ); 
	
	$customizer_load = get_option( 'wiguard_customizer_auto_load' );
	$customizer_load = !empty( $customizer_load ) && $customizer_load == '1' ? 1 : 0;
	
	//Admin Localize Script
	$admin_local_args = array(
		'admin_ajax_url' => esc_url( admin_url('admin-ajax.php') ),
		'featured_nonce' => wp_create_nonce('wiguard-post-featured'), 
		'sidebar_nounce' => wp_create_nonce('wiguard-sidebar-featured'), 
		'export_nounce' => wp_create_nonce('wiguard-options-export'),
		'import_nounce' => wp_create_nonce('wiguard-options-import'),
		'wiguard_tgmpa_nounce' => wp_create_nonce('wiguard-tgmpa-plugins-install'),
		'wiguard_demo_nounce' => wp_create_nonce('wiguard-demo-install$%^&*()'),		
		'proceed' => esc_html__('Proceed', 'wiguard'),
		'cancel' => esc_html__('Cancel', 'wiguard'),
		'process' => esc_html__( 'Processing', 'wiguard' ),
		'uninstalling' => esc_html__('Uninstalling...', 'wiguard'),
		'uninstalled' => esc_html__('Uninstalled.', 'wiguard'),
		'unins_pbm' => esc_html__('Uninstall Problem!.', 'wiguard'),
		'downloading' => esc_html__('Demo import process running...', 'wiguard'), 
		'wiguard_installation_url' => admin_url( 'admin.php?page=wiguard-installation' ),
		'field_nounce' => wp_create_nonce('wiguard-customizer-fields'),
		'clear_nounce' => wp_create_nonce('wiguard-temp-options-vanish'),
		'customizer_nounce' => wp_create_nonce('wiguard-customizer-#$%&*('),
		'demo_import' => wp_create_nonce('wiguard-demo-import-(*&'),
		'customizer_load' => $customizer_load
	);
	$admin_local_args = apply_filters( 'wiguard_admin_local_js_args', $admin_local_args );
	wp_localize_script('wiguard-admin-scripts', 'wiguard_admin_ajax_var', $admin_local_args );
	
}
add_action( 'admin_enqueue_scripts', 'wiguard_enqueue_admin_script' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function wiguard_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'wiguard_pingback_header' );

/**
 * Enqueue scripts and styles.
 */
function wiguard_scripts() { 	

	// Wiguard CSS Libraries
	wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), '4.1.1' );
	wp_enqueue_style( 'themify-icons', get_theme_file_uri( '/assets/css/themify-icons.css' ), array(), '1.0' );
	wp_enqueue_style( 'animate', get_theme_file_uri( '/assets/css/animate.min.css' ), array(), '3.5.1' );
	
	wp_register_style( 'owl-carousel', get_theme_file_uri( '/assets/css/owl-carousel.min.css' ), array(), '2.2.1' );
	wp_register_style( 'magnific-popup', get_theme_file_uri( '/assets/css/magnific-popup.min.css' ), array(), '1.0' );
	wp_register_style( 'image-hover', get_theme_file_uri( '/assets/css/image-hover.min.css' ), array(), '1.0' );
	wp_register_style( 'ytplayer', get_theme_file_uri( '/assets/css/ytplayer.min.css' ), array(), '1.0' );
	wp_enqueue_style( 'shortcode', get_theme_file_uri( '/assets/css/elementor-shortcode.css' ), array(), '1.0' );
		
	// Theme stylesheet.
	if ( ! defined( 'ELEMENTOR_TESTS' ) ) wp_enqueue_style( 'elementor-frontend' );
	wp_enqueue_style( 'wiguard-style', get_template_directory_uri() . '/style.css', array(), '1.0' );
	
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		wp_enqueue_style( 'wiguard-woo-style', get_theme_file_uri( '/assets/css/woo-styles.css' ), array(), '1.0' );
	}
	
	/* Wiguard theme script files */
	
	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
	
	wp_enqueue_script( 'easing', get_theme_file_uri( '/assets/js/jquery.easing.min.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'appear', get_theme_file_uri( '/assets/js/jquery.appear.min.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'smartresize', get_theme_file_uri( '/assets/js/smartresize.min.js' ), array( 'jquery' ), '1.0', true );	
	
	// Wiguard JS Libraries
	wp_register_script( 'isotope', get_theme_file_uri( '/assets/js/isotope.pkgd.min.js' ), array( 'jquery' ), '3.0.3', true );
	wp_register_script( 'infinite-scroll', get_theme_file_uri( '/assets/js/infinite-scroll.pkgd.min.js' ), array( 'jquery' ), '2.0', true );
	wp_register_script( 'owl-carousel', get_theme_file_uri( '/assets/js/owl.carousel.min.js' ), array( 'jquery' ), '2.2.1', true );
	wp_register_script( 'stellar', get_theme_file_uri( '/assets/js/jquery.stellar.min.js' ), array( 'jquery' ), '0.6.2', true );
	wp_register_script( 'sticky-kit', get_theme_file_uri( '/assets/js/sticky-kit.min.js' ), array( 'jquery' ), '1.1.3', true );
	wp_register_script( 'mb-YTPlayer', get_theme_file_uri( '/assets/js/jquery.mb.YTPlayer.min.js' ), array( 'jquery' ), '1.0', true );	
	wp_register_script( 'magnific', get_theme_file_uri( '/assets/js/jquery.magnific.popup.min.js' ), array( 'jquery' ), '1.1.0', true );
	wp_register_script( 'easy-ticker', get_theme_file_uri( '/assets/js/jquery.easy.ticker.min.js' ), array( 'jquery' ), '2.0', true );
	wp_register_script( 'smoothscroll', get_theme_file_uri( '/assets/js/smoothscroll.min.js' ), array( 'jquery' ), '1.20.2', true );	
	
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		wp_enqueue_script( 'wiguard-woo-custom', get_theme_file_uri( '/assets/js/wiguard-woo-custom.js' ), array( 'jquery' ), '1.0', true );
	}
	
	$smooth_opt = WiguardThemeOpt::wiguard_static_theme_mod( 'smooth-opt' );
	if( $smooth_opt ){
		$scroll_time = WiguardThemeOpt::wiguard_static_theme_mod( 'scroll-time' );
		$scroll_distance = WiguardThemeOpt::wiguard_static_theme_mod( 'scroll-distance' );
		if( !empty( $scroll_time ) && !empty( $scroll_distance ) ){
			wp_enqueue_script( 'smoothscroll' );
		}
	}
	
	// Theme Js
	wp_enqueue_script( 'wiguard-theme', get_theme_file_uri( '/assets/js/theme.js' ), array( 'jquery' ), '1.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	// Theme option stylesheet.
	$custom_css = '';
	$custom_css .= is_customize_preview() ? wiguard_get_dynamic_styles() : get_option( 'wiguard_theme_custom_styles' );
	$custom_css .= wiguard_page_option_styles();
	wp_add_inline_style( 'wiguard-style', $custom_css );
	
	//Google Map Script
	$g_api = WiguardThemeOpt::wiguard_static_theme_mod( 'google-api' );
	$gmap_stat = 0;
	if( $g_api ){
		wp_register_script( 'wiguard-gmaps', '//maps.googleapis.com/maps/api/js?key='. esc_attr( $g_api ) , array('jquery'), null, true );
		$gmap_stat = 1;
	}
		
	$infinite_img = WiguardThemeOpt::wiguard_static_theme_mod( 'infinite-loader-img' );
	$infinite_img_url = $infinite_img != '' ? $infinite_img : get_theme_file_uri( '/assets/images/infinite-loder.gif' );
	
	$user_logged = is_user_logged_in() ? 1 : 0;
	
	//Localize Script
	$local_args = array(
		'admin_ajax_url' => esc_url( admin_url('admin-ajax.php') ),
		'like_nonce' => wp_create_nonce('wiguard-post-like'), 
		'fav_nonce' => wp_create_nonce('wiguard-post-fav'),
		'wishlist_remove' => wp_create_nonce('wiguard-wishlist-{}@@%^@'),
		'product_view' => wp_create_nonce('wiguard-product-view-@%^&#'),
		'infinite_loader' => $infinite_img_url,
		'load_posts' => apply_filters( 'infinite_load_msg', esc_html__( 'Loading next set of posts.', 'wiguard' ) ),
		'no_posts' => apply_filters( 'infinite_finished_msg', esc_html__( 'No more posts to load.', 'wiguard' ) ),
		'cmt_nonce' => wp_create_nonce('wiguard-comment-like'),
		'mc_nounce' => wp_create_nonce('wiguard-mailchimp'), 
		'wait' => esc_html__('Wait..', 'wiguard'),
		'must_fill' => esc_html__('Must Fill Required Details.', 'wiguard'),
		'valid_email' => esc_html__('Enter Valid Email ID.', 'wiguard'),
		'cart_update_pbm' => esc_html__('Cart Update Problem.', 'wiguard'),
		'gmap_stat' => esc_attr( $gmap_stat ),
		'user_logged' => $user_logged,		
		'add_to_cart' => wp_create_nonce('wiguard-add-to-cart(*$#'),
		'remove_from_cart' => wp_create_nonce('wiguard-remove-from-cart(*$#')
	);	
	$local_args = apply_filters( 'wiguard_theme_local_js_args', $local_args );
	wp_localize_script('wiguard-theme', 'wiguard_ajax_var', $local_args );
	
}
add_action( 'wp_enqueue_scripts', 'wiguard_scripts' );

/**
 * Enqueue supplemental block editor styles.
 */
function wiguard_editor_customizer_styles() {
	wp_enqueue_style( 'wiguard-customizer-google-fonts', wiguard_theme_default_fonts_url(), array(), null, 'all' );
	wp_enqueue_style( 'wiguard-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.0', 'all' );
	
	ob_start();
	require_once WIGUARD_THEME_ELEMENTS . '/theme-customizer-styles.php';
	$custom_styles = ob_get_clean();
	
	wp_add_inline_style( 'wiguard-editor-customizer-styles', $custom_styles );
}
add_action( 'enqueue_block_editor_assets', 'wiguard_editor_customizer_styles' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );
/*Theme Code*/
/*Search Form Filter*/
if( ! function_exists('wiguard_zozo_search_form') ) {
	function wiguard_zozo_search_form( $form ) {
		
		$search_out = '
		<form method="get" class="search-form" action="'. esc_url( home_url( '/' ) ) .'">
			<div class="input-group">
				<input type="text" class="form-control" name="s" value="'. get_search_query() .'" placeholder="'. esc_attr__('Search for...', 'wiguard') .'">
				<span class="input-group-btn">
					<button class="btn btn-secondary" type="submit"><i class="ti-arrow-right"></i></button>
				</span>
			</div>
		</form>';
		return $search_out;
	}
	add_filter( 'get_search_form', 'wiguard_zozo_search_form' );
}

if( ! function_exists('wiguard_post_comments') ) {
	function wiguard_post_comments( $comment, $args, $depth ) {
	
		$GLOBALS['comment'] = $comment;
		
		$aps = new WiguardPostSettings;		
		
		$allowed_html = array(
			'a' => array(
				'href' => array(),
				'title' => array()
			)
		);
		
		?>
		<li <?php comment_class('clearfix'); ?> id="comment-<?php comment_ID() ?>">
			
			<div class="media thecomment">
						
				<div class="media-left author-img">
					<?php echo get_avatar($comment,$args['avatar_size']); ?>
				</div>
				
				<div class="media-body comment-text">
					<p class="comment-meta">
					<?php if( $depth < $args['max_depth'] ) : ?>
					<span class="reply pull-right">
						<?php 	
						comment_reply_link( array_merge( $args, array('reply_text' => esc_html__('Reply ', 'wiguard'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID ); 
						?>
					</span>
					<?php endif; ?>
					<span class="author"><?php echo get_comment_author_link(); ?></span>
					<span class="date"><?php printf( wp_kses( __( '- %1$s', 'wiguard' ), $allowed_html ), get_comment_date()) ?></span>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><i class="icon-info-sign"></i> <?php esc_html_e( 'Comment awaiting approval', 'wiguard' ); ?></em>
						<br />
					<?php endif; ?>
					</p>
					<?php comment_text(); ?>
					<!-- Custom Comments Meta -->
					<?php if( WiguardThemeOpt::wiguard_static_theme_mod( 'comments-like' ) || WiguardThemeOpt::wiguard_static_theme_mod( 'comments-share' ) ) : ?>
						<div class="comment-meta-wrapper clearfix">
							<ul class="list-inline">
								<?php 
								if( WiguardThemeOpt::wiguard_static_theme_mod( 'comments-like' ) ) : 
									if( class_exists( 'wiguard_additional_process' ) ){ ?>
										<li class="comment-like-wrapper"><?php echo do_shortcode( wiguard_additional_process::wiguard_comment_like_out( $comment->comment_ID ) ); ?></li>
									<?php
									}
								endif; ?>
								<?php 
								$comments_shares = WiguardThemeOpt::wiguard_static_theme_mod( 'comments-social-shares' );
								if( !empty( $comments_shares ) ) :
									if( class_exists( 'wiguard_additional_process' ) ){ ?>
										<li class="comment-share-wrapper pull-right"><?php echo do_shortcode( wiguard_additional_process::wiguard_comment_share( $comment->comment_ID ) ); ?></li>
									<?php
									}
								endif; ?>
							</ul>
						</div>
					<?php endif; // if comment meta need ?>
				</div>
						
			</div>
			
			
		</li>
		<?php
		
	} 
}

add_filter( 'wiguard_theme_local_js_args', 'wiguard_theme_local_js_args_body', 10  );
function wiguard_theme_local_js_args_body( $local_args ){
	$smooth_scroll = WiguardThemeOpt::wiguard_static_theme_mod('smooth-opt');
	$scroll_time = $scroll_dist = '';
	if( $smooth_scroll ){
		$scroll_time = WiguardThemeOpt::wiguard_static_theme_mod('scroll-time');
		$scroll_dist = WiguardThemeOpt::wiguard_static_theme_mod('scroll-distance');
	}	
	$res_from = WiguardThemeOpt::wiguard_static_theme_mod('mobile-header-from');
	$res_width = $res_from == 'c' ? WiguardThemeOpt::wiguard_static_theme_mod('mobile-header-from-custom') : $res_from;
	$res_width = $res_width ? absint( $res_width ) : 360;
	$core_stat = !class_exists( 'WiguardFamework' ) ? true : false;
	$wiguard_body_atts = array(
		'scroll_time' => $scroll_time,
		'scroll_dist' => $scroll_dist,
		'res_width' => $res_width,
		'core_stat' => $core_stat
	);	
	if( is_page() ){
		$menu_offset = get_post_meta( get_the_ID(), 'wiguard_page_one_page_menu_offset', true );
		$wiguard_body_atts['menu_offset'] = $menu_offset ? $menu_offset : 60;
		$mobile_menu_offset = get_post_meta( get_the_ID(), 'wiguard_page_one_page_mobmenu_offset', true );
		$wiguard_body_atts['mobile_menu_offset'] = $mobile_menu_offset ? $mobile_menu_offset : 60;
	}
	$local_args['body_atts'] = $wiguard_body_atts;
	return $local_args;
}