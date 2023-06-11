<?php

//Theme Option -> Import and Export
$theme_import_export_panel = new Wiguard_WP_Customize_Panel( $wp_customize, 'theme_import_export_panel', array(
	'title'			=> esc_html__( 'Import and Export', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for import or export of current site theme options.', 'wiguard' ),
	'priority'		=> 14,
	'panel'			=> 'wiguard_theme_panel'
));
$wp_customize->add_panel( $theme_import_export_panel );

//Import and Export -> Import
$wiguard_import_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_import_section', array(
	'title'			=> esc_html__( 'Import', 'wiguard' ),
	'description'	=> esc_html__( 'This is the import setting for current theme option values.', 'wiguard' ),
	'priority'		=> 1,
	'panel'			=> 'theme_import_export_panel'
));
$wp_customize->add_section( $wiguard_import_section );

//Import
$wp_customize->add_setting('ajax_trigger_wiguard_import_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_import_section', array(
	'section'		=> 'wiguard_import_section'
)));

//Import and Export -> Export
$wiguard_export_section = new Wiguard_WP_Customize_Section( $wp_customize, 'wiguard_export_section', array(
	'title'			=> esc_html__( 'Export', 'wiguard' ),
	'description'	=> esc_html__( 'This is the export setting for current theme option values.', 'wiguard' ),
	'priority'		=> 2,
	'panel'			=> 'theme_import_export_panel'
));
$wp_customize->add_section( $wiguard_export_section );

//Export
$wp_customize->add_setting('ajax_trigger_wiguard_export_section', array(
	'default'           => '',
	'sanitize_callback' 	=> 'esc_attr'
));
$wp_customize->add_control( new Trigger_Custom_control( $wp_customize, 'ajax_trigger_wiguard_export_section', array(
	'section'		=> 'wiguard_export_section'
)));