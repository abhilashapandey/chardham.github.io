<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Testimonial Template
$settings = array(
	'id'			=> 'testimonial-page-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Testimonial Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your current testimonial single outer template.', 'wiguard' ),
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
	'id'			=> 'testimonial-left-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Left Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on left side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Right Sidebar
$settings = array(
	'id'			=> 'testimonial-right-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Right Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on right side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Post Type Testimonial Settings
$settings = array(
	'id'			=> 'testimonial-title-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Testimonial Title', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title on single testimonial page.', 'wiguard' ),
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

//Custom Post Type Testimonial Slug
$settings = array(
	'id'			=> 'cpt-testimonial-slug',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Testimonial Slug', 'wiguard' ),
	'description'	=> esc_html__( 'Enter testimonial slug for register custom post type, after entered new slug click Publish button. Then go to WordPress Settings -> Permalinks -> Click save changes button to regenerate the permalinks.', 'wiguard' ),
	'default'		=> 'testimonial',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebar on Mobile
$settings = array(
	'id'			=> 'testimonial-page-hide-sidebar',
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