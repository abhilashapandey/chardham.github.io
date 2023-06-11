<?php

//Theme Option -> General
$theme_general_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_general_panel', array(
	'title'			=> esc_html__( 'General', 'wiguard' ),
	'description'	=> esc_html__( 'These are the general settings of Wiguard theme', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_general_panel );

//General -> Layout
$wiguard_layout_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_layout_section', array(
	'title'			=> esc_html__( 'Layout', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for theme layouts', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_general_panel'
));
$wp_customize->add_section( $wiguard_layout_section );

//Layout
$wp_customize->add_setting('ajax_trigger_wiguard_layout_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_layout_section', array(
	'section'		=> 'wiguard_layout_section'
)));

//General -> Loaders
$wiguard_loader_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_loader_section', array(
	'title'			=> esc_html__('Loaders', 'wiguard'),
	'description'	=> esc_html__( 'This is the setting for theme loader images.', 'wiguard' ),
	'priority'		=> 2,
	'panel'			=> 'theme_general_panel'
));
$wp_customize->add_section( $wiguard_loader_section );

//Loaders
$wp_customize->add_setting('ajax_trigger_wiguard_loader_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_loader_section', array(
	'section'		=> 'wiguard_loader_section'
)));

//General -> Theme Logo
$wiguard_logo_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_logo_section', array(
	'title'			=> esc_html__('Site Logo\'s', 'wiguard'),
	'description'	=> esc_html__( 'This is the setting for all the site logo\'s.', 'wiguard' ),
	'priority'		=> 3,
	'panel'			=> 'theme_general_panel'
));
$wp_customize->add_section( $wiguard_logo_section );

//Theme Logo
$wp_customize->add_setting('ajax_trigger_wiguard_logo_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_logo_section', array(
	'section'		=> 'wiguard_logo_section'
)));

//General -> API's
$wiguard_api_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_api_section', array(
	'title'			=> esc_html__('API', 'wiguard'),
	'description'	=> esc_html__( 'This is the setting for all the api\'s where used in this site.', 'wiguard' ),
	'priority'		=> 4,
	'panel'			=> 'theme_general_panel'
));
$wp_customize->add_section( $wiguard_api_section );

//API's
$wp_customize->add_setting('ajax_trigger_wiguard_api_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_api_section', array(
	'section'		=> 'wiguard_api_section'
)));

//General -> Comments
$wiguard_comments_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_comments_section', array(
	'title'			=> esc_html__('Comments', 'wiguard'),
	'description'	=> esc_html__( 'This is the setting for comments.', 'wiguard' ),
	'priority'		=> 5,
	'panel'			=> 'theme_general_panel'
));
$wp_customize->add_section( $wiguard_comments_section );

//Comments
$wp_customize->add_setting('ajax_trigger_wiguard_comments_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_comments_section', array(
	'section'		=> 'wiguard_comments_section'
)));

//General -> Smooth Scroll
$wiguard_smooth_scroll_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_smooth_scroll_section', array(
	'title'			=> esc_html__('Smooth Scroll', 'wiguard'),
	'description'	=> esc_html__( 'This is the setting for page smooth scroll.', 'wiguard' ),
	'priority'		=> 6,
	'panel'			=> 'theme_general_panel'
));
$wp_customize->add_section( $wiguard_smooth_scroll_section );

//Smooth Scroll
$wp_customize->add_setting('ajax_trigger_wiguard_smooth_scroll_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_smooth_scroll_section', array(
	'section'		=> 'wiguard_smooth_scroll_section'
)));

//General -> Media Settings
$wiguard_media_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_media_section', array(
	'title'			=> esc_html__('Media Settings', 'wiguard'),
	'description'	=> esc_html__( 'This is the setting for media sizes', 'wiguard' ),
	'priority'		=> 7,
	'panel'			=> 'theme_general_panel'
));
$wp_customize->add_section( $wiguard_media_section );

//Media Settings
$wp_customize->add_setting('ajax_trigger_wiguard_media_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_media_section', array(
	'section'		=> 'wiguard_media_section'
)));

//General -> RTL
$wiguard_rtl_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_rtl_section', array(
	'title'			=> esc_html__('RTL', 'wiguard'),
	'description'	=> esc_html__( 'This is the setting for theme view RTL', 'wiguard' ),
	'priority'		=> 8,
	'panel'			=> 'theme_general_panel'
));
$wp_customize->add_section( $wiguard_rtl_section );

//RTL
$wp_customize->add_setting('ajax_trigger_wiguard_rtl_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_rtl_section', array(
	'section'		=> 'wiguard_rtl_section'
)));