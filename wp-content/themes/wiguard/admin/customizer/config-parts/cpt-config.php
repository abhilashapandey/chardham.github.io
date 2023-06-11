<?php

//Theme Option -> Custom Post Type
$cpt_config_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'cpt_config_panel', array(
	'title'			=> esc_html__( 'Custom Post Types', 'wiguard' ),
	'description'	=> esc_html__( 'Custom Post Type Settings Area.', 'wiguard' ),
	'priority'		=> 10,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $cpt_config_panel );

//Custom Post Type -> General Settings
$wiguard_cpt_general_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_cpt_general_section', array(
	'title'			=> esc_html__( 'General Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is custom post type settings area.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'cpt_config_panel'
));
$wp_customize->add_section( $wiguard_cpt_general_section );

//General Settings
$wp_customize->add_setting('ajax_trigger_wiguard_cpt_general_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_cpt_general_section', array(
	'section'		=> 'wiguard_cpt_general_section'
)));

//Custom Post Types
$wiguard_options = get_option( 'wiguard_theme_options_new' );
$selected_cpt = isset( $wiguard_options['cpt-opts'] ) && !empty( $wiguard_options['cpt-opts'] ) ? $wiguard_options['cpt-opts'] : '';

//Custom Post Type -> Team
if( !empty( $selected_cpt ) && is_array( $selected_cpt ) && in_array( 'team', $selected_cpt ) ){
	
	$wiguard_cpt_team_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_cpt_team_section', array(
		'title'			=> esc_html__( 'Team', 'wiguard' ),
		'description'	=> esc_html__( 'This is custom post type team setting.', 'wiguard' ),
		'priority'		=> 2,
		'panel'			=> 'cpt_config_panel'
	));
	$wp_customize->add_section( $wiguard_cpt_team_section );

	//Team
	$wp_customize->add_setting('ajax_trigger_wiguard_cpt_team_section', array(
		'default'           => '',
		'sanitize_callback' 	=> 'esc_attr'
	));
	$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_cpt_team_section', array(
		'section'		=> 'wiguard_cpt_team_section'
	)));

}// team CPT check end

//Custom Post Type -> Testimonial
if( !empty( $selected_cpt ) && is_array( $selected_cpt ) && in_array( 'testimonial', $selected_cpt ) ){
	$wiguard_cpt_testimonial_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_cpt_testimonial_section', array(
		'title'			=> esc_html__( 'Testimonial', 'wiguard' ),
		'description'	=> esc_html__( 'This is custom post type testimonial setting.', 'wiguard' ),
		'priority'		=> 3,
		'panel'			=> 'cpt_config_panel'
	));
	$wp_customize->add_section( $wiguard_cpt_testimonial_section );
	
	//Testimonial
	$wp_customize->add_setting('ajax_trigger_wiguard_cpt_testimonial_section', array(
		'default'           => '',
		'sanitize_callback' 	=> 'esc_attr'
	));
	$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_cpt_testimonial_section', array(
		'section'		=> 'wiguard_cpt_testimonial_section'
	)));
	
}// testimonial CPT check end

//Custom Post Type -> Events
if( !empty( $selected_cpt ) && is_array( $selected_cpt ) && in_array( 'events', $selected_cpt ) ){
	$wiguard_cpt_events_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_cpt_events_section', array(
		'title'			=> esc_html__( 'Events', 'wiguard' ),
		'description'	=> esc_html__( 'This is custom post type events setting.', 'wiguard' ),
		'priority'		=> 4,
		'panel'			=> 'cpt_config_panel'
	));
	$wp_customize->add_section( $wiguard_cpt_events_section );

	//Events
	$wp_customize->add_setting('ajax_trigger_wiguard_cpt_events_section', array(
		'default'           => '',
		'sanitize_callback' 	=> 'esc_attr'
	));
	$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_cpt_events_section', array(
		'section'		=> 'wiguard_cpt_events_section'
	)));
	
}// events CPT check end

//Custom Post Type -> Services
if( !empty( $selected_cpt ) && is_array( $selected_cpt ) && in_array( 'services', $selected_cpt ) ){
	$wiguard_cpt_services_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_cpt_services_section', array(
		'title'			=> esc_html__( 'Services', 'wiguard' ),
		'description'	=> esc_html__( 'This is custom post type Services setting.', 'wiguard' ),
		'priority'		=> 5,
		'panel'			=> 'cpt_config_panel'
	));
	$wp_customize->add_section( $wiguard_cpt_services_section );
	
	//Services
	$wp_customize->add_setting('ajax_trigger_wiguard_cpt_services_section', array(
		'default'           => '',
		'sanitize_callback' 	=> 'esc_attr'
	));
	$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_cpt_services_section', array(
		'section'		=> 'wiguard_cpt_services_section'
	)));
	
}// services CPT check end

//Custom Post Type -> Portfolio
if( !empty( $selected_cpt ) && is_array( $selected_cpt ) && in_array( 'portfolio', $selected_cpt ) ){
	$wiguard_cpt_portfolio_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_cpt_portfolio_section', array(
		'title'			=> esc_html__( 'Portfolio', 'wiguard' ),
		'description'	=> esc_html__( 'This is custom post type portfolio setting.', 'wiguard' ),
		'priority'		=> 6,
		'panel'			=> 'cpt_config_panel'
	));
	$wp_customize->add_section( $wiguard_cpt_portfolio_section );
	
	//Portfolio
	$wp_customize->add_setting('ajax_trigger_wiguard_cpt_portfolio_section', array(
		'default'           => '',
		'sanitize_callback' 	=> 'esc_attr'
	));
	$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_cpt_portfolio_section', array(
		'section'		=> 'wiguard_cpt_portfolio_section'
	)));
	
}// portfolio CPT check end