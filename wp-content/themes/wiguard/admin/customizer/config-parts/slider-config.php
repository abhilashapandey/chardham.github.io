<?php

//Theme Option -> Sliders
$theme_slide_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_slide_panel', array(
	'title'			=> esc_html__( 'Sliders', 'wiguard' ),
	'description'	=> esc_html__( 'These are the theme sliders settings', 'wiguard' ),
	'priority'		=> 8,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_slide_panel );

//Sliders -> Featured Slider
$wiguard_general_featured_slide_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_general_featured_slide_section', array(
	'title'			=> esc_html__( 'Featured Slider', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for featured slider', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_slide_panel'
));
$wp_customize->add_section( $wiguard_general_featured_slide_section );

//Featured Slider
$wp_customize->add_setting('ajax_trigger_wiguard_general_featured_slide_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_general_featured_slide_section', array(
	'section'		=> 'wiguard_general_featured_slide_section'
)));

//Sliders -> Related Slider
$wiguard_general_related_slide_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_general_related_slide_section', array(
	'title'			=> esc_html__( 'Related Slider', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for related slider', 'wiguard' ),
	'priority'		=> 2,
	'panel'			=> 'theme_slide_panel'
));
$wp_customize->add_section( $wiguard_general_related_slide_section );

//Related Slider
$wp_customize->add_setting('ajax_trigger_wiguard_general_related_slide_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_general_related_slide_section', array(
	'section'		=> 'wiguard_general_related_slide_section'
)));

//Sliders -> Blog Post Slider
$wiguard_general_blog_slide_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_general_blog_slide_section', array(
	'title'			=> esc_html__( 'Blog Post Slider', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for blog post slider', 'wiguard' ),
	'priority'		=> 3,
	'panel'			=> 'theme_slide_panel'
));
$wp_customize->add_section( $wiguard_general_blog_slide_section );

//Blog Post Slider
$wp_customize->add_setting('ajax_trigger_wiguard_general_blog_slide_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_general_blog_slide_section', array(
	'section'		=> 'wiguard_general_blog_slide_section'
)));

//Sliders -> Single Post Slider
$wiguard_general_single_slide_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_general_single_slide_section', array(
	'title'			=> esc_html__( 'Single Post Slider', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for single post slider', 'wiguard' ),
	'priority'		=> 4,
	'panel'			=> 'theme_slide_panel'
));
$wp_customize->add_section( $wiguard_general_single_slide_section );

//Single Post Slider
$wp_customize->add_setting('ajax_trigger_wiguard_general_single_slide_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_general_single_slide_section', array(
	'section'		=> 'wiguard_general_single_slide_section'
)));