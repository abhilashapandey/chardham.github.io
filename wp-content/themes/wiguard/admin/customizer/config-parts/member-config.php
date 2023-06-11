<?php

//Theme Option -> Member
$theme_member_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_member_panel', array(
	'title'			=> esc_html__( 'Wiguard Member Settings', 'wiguard' ),
	'description'	=> esc_html__( 'These are the wiguard member addon settings of wiguard Theme.', 'wiguard' ),
	'priority'		=> 12,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_member_panel );

//Member -> Member General
$wiguard_member_general_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_member_general_section', array(
	'title'			=> esc_html__( 'Member General', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for member general details.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_member_panel'
));
$wp_customize->add_section( $wiguard_member_general_section );

//General
$wp_customize->add_setting('ajax_trigger_wiguard_member_general_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_member_general_section', array(
	'section'		=> 'wiguard_member_general_section'
)));


//Member -> Member Google
$wiguard_member_google_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_member_google_section', array(
	'title'			=> esc_html__( 'Login via Google', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for google member.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_member_panel'
));
$wp_customize->add_section( $wiguard_member_google_section );

//Google
$wp_customize->add_setting('ajax_trigger_wiguard_member_google_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_member_google_section', array(
	'section'		=> 'wiguard_member_google_section'
)));

//Member -> Member Facebook
$wiguard_member_facebook_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_member_facebook_section', array(
	'title'			=> esc_html__( 'Login via Facebook', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for facebook member.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_member_panel'
));
$wp_customize->add_section( $wiguard_member_facebook_section );

//Facebook
$wp_customize->add_setting('ajax_trigger_wiguard_member_facebook_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_member_facebook_section', array(
	'section'		=> 'wiguard_member_facebook_section'
)));

