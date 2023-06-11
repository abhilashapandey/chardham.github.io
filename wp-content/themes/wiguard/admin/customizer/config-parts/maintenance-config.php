<?php

//Theme Option -> Maintenance
$theme_maintenance_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_maintenance_panel', array(
	'title'			=> esc_html__( 'Maintenance', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for maintenance of current site.', 'wiguard' ),
	'priority'		=> 11,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_maintenance_panel );

//Maintenance -> General Maintenance
$wiguard_maintenance_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_maintenance_section', array(
	'title'			=> esc_html__( 'General Maintenance', 'wiguard' ),
	'description'	=> esc_html__( 'This is the general setting for maintenance of current site.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_maintenance_panel'
));
$wp_customize->add_section( $wiguard_maintenance_section );

//General Maintenance
$wp_customize->add_setting('ajax_trigger_wiguard_maintenance_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_maintenance_section', array(
	'section'		=> 'wiguard_maintenance_section'
)));