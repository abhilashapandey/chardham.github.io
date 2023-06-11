<?php

//Theme Option -> WooCommerce
$theme_woo_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_woo_panel', array(
	'title'			=> esc_html__( 'WooCommerce', 'wiguard' ),
	'description'	=> esc_html__( 'These are the WooCommerce settings of wiguard Theme.', 'wiguard' ),
	'priority'		=> 12,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_woo_panel );

//WooCommerce -> Woo General
$wiguard_woo_general_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_woo_general_section', array(
	'title'			=> esc_html__( 'Woo General', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for woocommerce general options.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_woo_panel'
));
$wp_customize->add_section( $wiguard_woo_general_section );

//Woo General
$wp_customize->add_setting('ajax_trigger_wiguard_woo_general_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_woo_general_section', array(
	'section'		=> 'wiguard_woo_general_section'
)));

//WooCommerce -> Archive Template
$wiguard_woo_archive_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_woo_archive_section', array(
	'title'			=> esc_html__( 'Archive Template', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for woocommerce archive page template.', 'wiguard' ),
	'priority'		=> 2,
	'panel'			=> 'theme_woo_panel'
));
$wp_customize->add_section( $wiguard_woo_archive_section );

//Archive Template
$wp_customize->add_setting('ajax_trigger_wiguard_woo_archive_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_woo_archive_section', array(
	'section'		=> 'wiguard_woo_archive_section'
)));

//WooCommerce -> Single Product Template
$wiguard_woo_single_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_woo_single_section', array(
	'title'			=> esc_html__( 'Single Product Template', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for woocommerce single product template.', 'wiguard' ),
	'priority'		=> 3,
	'panel'			=> 'theme_woo_panel'
));
$wp_customize->add_section( $wiguard_woo_single_section );

//Single Product Template
$wp_customize->add_setting('ajax_trigger_wiguard_woo_single_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_woo_single_section', array(
	'section'		=> 'wiguard_woo_single_section'
)));

//WooCommerce -> Woo Related Slider
$wiguard_general_woo_slide_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_general_woo_slide_section', array(
	'title'			=> esc_html__( 'Woo Related Slider', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for woo related products slider', 'wiguard' ),
	'priority'		=> 4,
	'panel'			=> 'theme_woo_panel'
));
$wp_customize->add_section( $wiguard_general_woo_slide_section );

//Woo Related Slider
$wp_customize->add_setting('ajax_trigger_wiguard_general_woo_slide_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_general_woo_slide_section', array(
	'section'		=> 'wiguard_general_woo_slide_section'
)));