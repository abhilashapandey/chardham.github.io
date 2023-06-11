<?php

//Theme Option -> Skin
$theme_skin_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_skin_panel', array(
	'title'			=> esc_html__( 'Skin', 'wiguard' ),
	'description'	=> esc_html__( 'These are theme skin/color options', 'wiguard' ),
	'priority'		=> 3,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_skin_panel );

//General -> Theme Skin
$wiguard_theme_skin_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_theme_skin_section', array(
	'title'			=> esc_html__( 'Theme Skin', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for theme skin', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_skin_panel'
));
$wp_customize->add_section( $wiguard_theme_skin_section );

//Theme Skin
$wp_customize->add_setting('ajax_trigger_wiguard_theme_skin_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_theme_skin_section', array(
	'section'		=> 'wiguard_theme_skin_section'
)));

//General -> Body Background
$wiguard_body_skin_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_body_skin_section', array(
	'title'			=> esc_html__( 'Body Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for theme body background.', 'wiguard' ),
	'priority'		=> 2,
	'panel'			=> 'theme_skin_panel'
));
$wp_customize->add_section( $wiguard_body_skin_section );

//Body Background
$wp_customize->add_setting('ajax_trigger_wiguard_body_skin_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_body_skin_section', array(
	'section'		=> 'wiguard_body_skin_section'
)));