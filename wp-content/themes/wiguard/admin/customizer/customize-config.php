<?php

/**
 * Wiguard Theme Customize Config
 */
 
if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

 
class Wiguard_Theme_Customize_Config {

	public static $wiguard_options = '';
	
	public static $wiguard_theme_opt_def = array();

	public static function wiguard_register ( $wp_customize ) {
	
		// Be safe.
		if ( ! isset( $wp_customize ) ) {
				return;
		}
		
		//update_option( 'wiguard_theme_options_t', '' );
		
		//Custom Panel and Section
		$wp_customize->register_panel_type( 'Wiguard_WP_Customize_Panel' );
		$wp_customize->register_section_type( 'Wiguard_WP_Customize_Section' );
			 
		// Add three levels on panels
		$wiguard_theme_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'wiguard_theme_panel', array(
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'title'          => esc_html__( 'Wiguard Theme Options', 'wiguard' ),
			'description'    => esc_html__( 'Several settings pertaining my theme', 'wiguard' ),
		));
		$wp_customize->add_panel( $wiguard_theme_panel );
		
		//General Config
		require_once WIGUARD_ADMIN .'/customizer/config-parts/general-config.php';
		
		//Skin Config
		require_once WIGUARD_ADMIN .'/customizer/config-parts/skin-config.php';
		
		//Typography Config
		if ( class_exists( 'WiguardFamework' ) ) {
			require_once WIGUARD_ADMIN .'/customizer/config-parts/typo-config.php';
		}

		//Header Config
		require_once WIGUARD_ADMIN .'/customizer/config-parts/header-config.php';
		
		//Footer Config
		require_once WIGUARD_ADMIN .'/customizer/config-parts/footer-config.php';
		
		//Theme Template
		require_once WIGUARD_ADMIN .'/customizer/config-parts/theme-template-config.php';
		
		//Theme Sliders
		require_once WIGUARD_ADMIN .'/customizer/config-parts/slider-config.php';
		
		//Social Links
		require_once WIGUARD_ADMIN .'/customizer/config-parts/social-config.php';
		
		//CPT Settings
		require_once WIGUARD_ADMIN .'/customizer/config-parts/cpt-config.php';
		
		//Maintenance
		require_once WIGUARD_ADMIN .'/customizer/config-parts/maintenance-config.php';
		
		//Woo
		if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
			require_once WIGUARD_ADMIN .'/customizer/config-parts/woo-config.php';
		}
		
		//Member
		if ( in_array( 'wiguard-member-addon/zozo-member-addon.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
			require_once WIGUARD_ADMIN .'/customizer/config-parts/member-config.php';
		}
		
		//Import and Export
		require_once WIGUARD_ADMIN .'/customizer/config-parts/import-export-config.php';
		
		if ( isset( $wp_customize->selective_refresh ) ) {
			//Site title
			$wp_customize->selective_refresh->add_partial(
				'blogname',
				array(
					'selector'	=> '.site-title',
					'render_callback'     => function(){ bloginfo( 'name' ); }
				)
			);
			//Tagline
			$wp_customize->selective_refresh->add_partial(
				'blogdescription',
				array(
					'selector'	=> '.logo-tagline'
				)
			);
		}
		
	}
	
	
}

add_action( 'customize_register' , array( 'Wiguard_Theme_Customize_Config' , 'wiguard_register' ) );