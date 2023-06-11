<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Team Template
$settings = array(
	'id'			=> 'team-page-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Team Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your current team single outer template.', 'wiguard' ),
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
	'id'			=> 'team-left-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Left Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on left side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Right Sidebar
$settings = array(
	'id'			=> 'team-right-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Right Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on right side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Team Layout
$settings = array(
	'id'			=> 'cpt-team-layout',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Team Layout', 'wiguard' ),
	'description'	=> esc_html__( 'Select single team layout model.', 'wiguard' ),
	'choices' 		=> array(
			'default' 		=> esc_html__( 'Default', 'wiguard' ),
			'classic' 		=> esc_html__( 'Classic', 'wiguard' ),
			'modern' 		=> esc_html__( 'Modern', 'wiguard' )
	),
	'default'		=> 'default',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Team Settings
$settings = array(
	'id'			=> 'team-title-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Team Title', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title on single team page.', 'wiguard' ),
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

//Custom Post Type Team Slug
$settings = array(
	'id'			=> 'cpt-team-slug',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Team Slug', 'wiguard' ),
	'description'	=> esc_html__( 'Enter team slug for register custom post type, after entered new slug click Publish button. Then go to WordPress Settings -> Permalinks -> Click save changes button to regenerate the permalinks.', 'wiguard' ),
	'default'		=> 'team',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebar on Mobile
$settings = array(
	'id'			=> 'team-page-hide-sidebar',
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