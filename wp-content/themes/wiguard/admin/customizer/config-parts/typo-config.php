<?php

//Theme Option -> Typography
$theme_typography_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_typography_panel', array(
	'title'			=> esc_html__( 'Typography', 'wiguard' ),
	'description'	=> esc_html__( 'These are the theme typography options', 'wiguard' ),
	'priority'		=> 4,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_typography_panel );

//Typography -> General Typography
$wiguard_general_typography_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_general_typography_section', array(
	'title'			=> esc_html__( 'General Typography', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for theme general typography', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_typography_panel'
));
$wp_customize->add_section( $wiguard_general_typography_section );

//General Typography
$wp_customize->add_setting('ajax_trigger_wiguard_general_typography_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_general_typography_section', array(
	'section'		=> 'wiguard_general_typography_section'
)));

//Typography -> Widgets Typography
$wiguard_widget_typography_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_widget_typography_section', array(
	'title'			=> esc_html__( 'Widgets Typography', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for theme widgets typography', 'wiguard' ),
	'priority'		=> 2,
	'panel'			=> 'theme_typography_panel'
));
$wp_customize->add_section( $wiguard_widget_typography_section );

//Widgets Typography
$wp_customize->add_setting('ajax_trigger_wiguard_widget_typography_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_widget_typography_section', array(
	'section'		=> 'wiguard_widget_typography_section'
)));

//Typography -> Menu Typography
$wiguard_menu_typography_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_menu_typography_section', array(
	'title'			=> esc_html__( 'Menu Typography', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for theme menu typography', 'wiguard' ),
	'priority'		=> 3,
	'panel'			=> 'theme_typography_panel'
));
$wp_customize->add_section( $wiguard_menu_typography_section );

//Menu Typography
$wp_customize->add_setting('ajax_trigger_wiguard_menu_typography_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_menu_typography_section', array(
	'section'		=> 'wiguard_menu_typography_section'
)));


//Typography -> Other Typography
$wiguard_menu_other_typography_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_menu_other_typography_section', array(
	'title'			=> esc_html__( 'Other Typography', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for other typography', 'wiguard' ),
	'priority'		=> 4,
	'panel'			=> 'theme_typography_panel'
));
$wp_customize->add_section( $wiguard_menu_other_typography_section );

//Other Typography
$wp_customize->add_setting('ajax_trigger_wiguard_menu_other_typography_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_menu_other_typography_section', array(
	'section'		=> 'wiguard_menu_other_typography_section'
)));