<?php

//Theme Option -> Social
$theme_social_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_social_panel', array(
	'title'			=> esc_html__( 'Social', 'wiguard' ),
	'description'	=> esc_html__( 'These are the social settings of wiguard Theme', 'wiguard' ),
	'priority'		=> 9,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_social_panel );

//Header -> Social Links
$wiguard_social_links_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_social_links_section', array(
	'title'			=> esc_html__( 'Social Links', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for social links.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_social_panel'
));
$wp_customize->add_section( $wiguard_social_links_section );

//Social Links
$wp_customize->add_setting('ajax_trigger_wiguard_social_links_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_social_links_section', array(
	'section'		=> 'wiguard_social_links_section'
)));

//Header -> Social Share
$wiguard_social_share_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_social_share_section', array(
	'title'			=> esc_html__( 'Social Share', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for social share.', 'wiguard' ),
	'priority'		=> 2,
	'panel'			=> 'theme_social_panel'
));
$wp_customize->add_section( $wiguard_social_share_section );

//Social Share
$wp_customize->add_setting('ajax_trigger_wiguard_social_share_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_social_share_section', array(
	'section'		=> 'wiguard_social_share_section'
)));