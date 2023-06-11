<?php

//Theme Option -> Header
$theme_header_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_header_panel', array(
	'title'			=> esc_html__( 'Header', 'wiguard' ),
	'description'	=> esc_html__( 'These are header general settings of wiguard theme', 'wiguard' ),
	'priority'		=> 5,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_header_panel );

//Header -> Header General
$wiguard_header_general_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_header_general_section', array(
	'title'			=> esc_html__( 'Header General', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for general header.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_header_panel'
));
$wp_customize->add_section( $wiguard_header_general_section );

//Header General
$wp_customize->add_setting('ajax_trigger_wiguard_header_general_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_header_general_section', array(
	'section'		=> 'wiguard_header_general_section'
)));

//Header -> Header Top Section
$wiguard_header_topbar_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_header_topbar_section', array(
	'title'			=> esc_html__( 'Header Top', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for header top.', 'wiguard' ),
	'priority'		=> 2,
	'panel'			=> 'theme_header_panel'
));
$wp_customize->add_section( $wiguard_header_topbar_section );

//Header Top
$wp_customize->add_setting('ajax_trigger_wiguard_header_topbar_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_header_topbar_section', array(
	'section'		=> 'wiguard_header_topbar_section'
)));

//Header -> Header Middle Section
$wiguard_header_logobar_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_header_logobar_section', array(
	'title'			=> esc_html__( 'Header Middle', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for header middle(logo section).', 'wiguard' ),
	'priority'		=> 3,
	'panel'			=> 'theme_header_panel'
));
$wp_customize->add_section( $wiguard_header_logobar_section );

//Header Middle
$wp_customize->add_setting('ajax_trigger_wiguard_header_logobar_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_header_logobar_section', array(
	'section'		=> 'wiguard_header_logobar_section'
)));

//Header -> Header Navbar Section
$wiguard_header_navbar_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_header_navbar_section', array(
	'title'			=> esc_html__( 'Header Bottom', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for header bottom(navbar).', 'wiguard' ),
	'priority'		=> 4,
	'panel'			=> 'theme_header_panel'
));
$wp_customize->add_section( $wiguard_header_navbar_section );

//Header Navbar
$wp_customize->add_setting('ajax_trigger_wiguard_header_navbar_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_header_navbar_section', array(
	'section'		=> 'wiguard_header_navbar_section'
)));

//Header -> Header Left/Right Navbar
$wiguard_header_fixed_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_header_fixed_section', array(
	'title'			=> esc_html__( 'Left/Right Navbar', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for header left/right navbar.', 'wiguard' ),
	'priority'		=> 5,
	'panel'			=> 'theme_header_panel'
));
$wp_customize->add_section( $wiguard_header_fixed_section );

//Header Left/Right
$wp_customize->add_setting('ajax_trigger_wiguard_header_fixed_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_header_fixed_section', array(
	'section'		=> 'wiguard_header_fixed_section'
)));

//Header -> Mobile Menu
$wiguard_mobile_menu_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_mobile_menu_section', array(
	'title'			=> esc_html__( 'Mobile Menu', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for mobile header and mobile menu.', 'wiguard' ),
	'priority'		=> 6,
	'panel'			=> 'theme_header_panel'
));
$wp_customize->add_section( $wiguard_mobile_menu_section );

//Mobile Menu
$wp_customize->add_setting('ajax_trigger_wiguard_mobile_menu_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_mobile_menu_section', array(
	'section'		=> 'wiguard_mobile_menu_section'
)));

//Header -> Top Sliding Bar
$wiguard_header_topslidingbar_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_header_topslidingbar_section', array(
	'title'			=> esc_html__( 'Top Sliding Bar', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for top sliding bar.', 'wiguard' ),
	'priority'		=> 7,
	'panel'			=> 'theme_header_panel'
));
$wp_customize->add_section( $wiguard_header_topslidingbar_section );

//Top Sliding Bar
$wp_customize->add_setting('ajax_trigger_wiguard_header_topslidingbar_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_header_topslidingbar_section', array(
	'section'		=> 'wiguard_header_topslidingbar_section'
)));