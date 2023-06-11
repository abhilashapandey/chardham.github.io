<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Events Template
$settings = array(
	'id'			=> 'events-page-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Events Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your current events single outer template.', 'wiguard' ),
	'default'		=> 'no-sidebar',
	'items' 		=> array(
		'no-sidebar'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/page-layouts/1.png',
		'right-sidebar'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/page-layouts/2.png',
		'left-sidebar'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/page-layouts/3.png',
		'both-sidebar'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/page-layouts/4.png'		
	),
	'cols'			=> '4',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Left Sidebar
$settings = array(
	'id'			=> 'events-left-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Left Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on left side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Right Sidebar
$settings = array(
	'id'			=> 'events-right-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Right Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on right side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Events Layout
$settings = array(
	'id'			=> 'cpt-event-layout',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Events Layout', 'wiguard' ),
	'description'	=> esc_html__( 'Select single event layout model.', 'wiguard' ),
	'choices'		=> array(
			'1' 		=> esc_html__( 'Model 1', 'wiguard' ),
			'2' 		=> esc_html__( 'Model 2', 'wiguard' )
	),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Events Settings
$settings = array(
	'id'			=> 'event-title-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Events Title', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title on single event page.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Layout End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Advanced Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Advanced', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Events Slug
$settings = array(
	'id'			=> 'cpt-events-slug',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Events Slug', 'wiguard' ),
	'description'	=> esc_html__( 'Enter events slug for register custom post type, after entered new slug click Publish button. Then go to WordPress Settings -> Permalinks -> Click save changes button to regenerate the permalinks.', 'wiguard' ),
	'default'		=> 'event',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebar on Mobile
$settings = array(
	'id'			=> 'events-page-hide-sidebar',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Sidebar on Mobile', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable to show or hide sidebar on mobile.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Advanced End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );