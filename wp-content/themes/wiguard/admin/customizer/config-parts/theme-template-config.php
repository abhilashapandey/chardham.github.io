<?php

//Theme Option -> Theme Template
$theme_template_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_template_panel', array(
	'title'			=> esc_html__( 'Theme Template', 'wiguard' ),
	'description'	=> esc_html__( 'These is the template settings for page.', 'wiguard' ),
	'priority'		=> 7,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_template_panel );

//Theme Template -> Template General
$wiguard_general_template_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_general_template_section', array(
	'title'			=> esc_html__( 'Template General', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for template general.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_template_panel'
));
$wp_customize->add_section( $wiguard_general_template_section );

//Template General
$wp_customize->add_setting('ajax_trigger_wiguard_general_template_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_general_template_section', array(
	'section'		=> 'wiguard_general_template_section'
)));

//Theme Template -> Page Template
$wiguard_page_template_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_page_template_section', array(
	'title'			=> esc_html__( 'Page Template', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for page template.', 'wiguard' ),
	'priority'		=> 2,
	'panel'			=> 'theme_template_panel'
));
$wp_customize->add_section( $wiguard_page_template_section );

//Page Template
$wp_customize->add_setting('ajax_trigger_wiguard_page_template_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_page_template_section', array(
	'section'		=> 'wiguard_page_template_section'
)));

//Theme Template -> Blog Template
$wiguard_blog_template_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_blog_template_section', array(
	'title'			=> esc_html__( 'Blog Template', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for blog template.', 'wiguard' ),
	'priority'		=> 3,
	'panel'			=> 'theme_template_panel'
));
$wp_customize->add_section( $wiguard_blog_template_section );

//Blog Template
$wp_customize->add_setting('ajax_trigger_wiguard_blog_template_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_blog_template_section', array(
	'section'		=> 'wiguard_blog_template_section'
)));

//Theme Template -> Archive Template
$wiguard_archive_template_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_archive_template_section', array(
	'title'			=> esc_html__( 'Archive Template', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for archive template.', 'wiguard' ),
	'priority'		=> 4,
	'panel'			=> 'theme_template_panel'
));
$wp_customize->add_section( $wiguard_archive_template_section );

//Archive Template
$wp_customize->add_setting('ajax_trigger_wiguard_archive_template_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_archive_template_section', array(
	'section'		=> 'wiguard_archive_template_section'
)));

//Theme Template -> Single Post Template
$wiguard_single_post_template_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_single_post_template_section', array(
	'title'			=> esc_html__( 'Single Post Template', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for single post template.', 'wiguard' ),
	'priority'		=> 9,
	'panel'			=> 'theme_template_panel'
));
$wp_customize->add_section( $wiguard_single_post_template_section );

//Single Post Template
$wp_customize->add_setting('ajax_trigger_wiguard_single_post_template_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_single_post_template_section', array(
	'section'		=> 'wiguard_single_post_template_section'
)));