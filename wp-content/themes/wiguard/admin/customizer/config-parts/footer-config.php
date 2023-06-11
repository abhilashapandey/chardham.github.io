<?php

//Theme Option -> Footer
$theme_footer_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_footer_panel', array(
	'title'			=> esc_html__( 'Footer', 'wiguard' ),
	'description'	=> esc_html__( 'These are header general settings of wiguard theme', 'wiguard' ),
	'priority'		=> 6,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_footer_panel );

//Footer -> Footer General
$wiguard_footer_general_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_footer_general_section', array(
	'title'			=> esc_html__( 'Footer General', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for general footer.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_footer_panel'
));
$wp_customize->add_section( $wiguard_footer_general_section );

//Footer General
$wp_customize->add_setting('ajax_trigger_wiguard_footer_general_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_footer_general_section', array(
	'section'		=> 'wiguard_footer_general_section'
)));

//Footer -> Footer Top
$wiguard_footer_top_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_footer_top_section', array(
	'title'			=> esc_html__( 'Footer Top', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for footer top section.', 'wiguard' ),
	'priority'		=> 2,
	'panel'			=> 'theme_footer_panel'
));
$wp_customize->add_section( $wiguard_footer_top_section );

//Footer Top
$wp_customize->add_setting('ajax_trigger_wiguard_footer_top_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_footer_top_section', array(
	'section'		=> 'wiguard_footer_top_section'
)));

//Footer -> Footer Middle
$wiguard_footer_middle_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_footer_middle_section', array(
	'title'			=> esc_html__( 'Footer Middle', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for footer middle section.', 'wiguard' ),
	'priority'		=> 3,
	'panel'			=> 'theme_footer_panel'
));
$wp_customize->add_section( $wiguard_footer_middle_section );

//Footer Middle
$wp_customize->add_setting('ajax_trigger_wiguard_footer_middle_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_footer_middle_section', array(
	'section'		=> 'wiguard_footer_middle_section'
)));

//Footer -> Footer Bottom
$wiguard_footer_bottom_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_footer_bottom_section', array(
	'title'			=> esc_html__( 'Footer Bottom', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for footer bottom section.', 'wiguard' ),
	'priority'		=> 4,
	'panel'			=> 'theme_footer_panel'
));
$wp_customize->add_section( $wiguard_footer_bottom_section );

//Footer Bottom
$wp_customize->add_setting('ajax_trigger_wiguard_footer_bottom_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_footer_bottom_section', array(
	'section'		=> 'wiguard_footer_bottom_section'
)));