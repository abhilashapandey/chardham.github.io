<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Bottom Inner Layout
$settings = array(
	'id'			=> 'footer-bottom-container',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Footer Bottom Inner Layout', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer bottom layout boxed or wide.', 'wiguard' ),
	'choices'		=> array(
		'boxed'		=> esc_html__( 'Boxed', 'wiguard' ),
		'wide'		=> esc_html__( 'Wide', 'wiguard' )
	),
	'default'		=> 'wide',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Bottom Fixed
$settings = array(
	'id'			=> 'footer-bottom-fixed',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Footer Bottom Fixed', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable footer bottom to fixed at bottom of page.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebars
$settings = array(
	'id'			=> 'footer-bottom-widget',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Footer Bottom Widget', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on footer copyright section.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Bottom Items
$settings = array(
	'id'			=> 'footer-bottom-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Footer Bottom Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed footer bottom items drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(
			'social'	=> esc_html__( 'Footer Social Links', 'wiguard' ),
			'widget'	=> esc_html__( 'Custom Widget', 'wiguard' ),
			'menu'		=> esc_html__( 'Footer Menu', 'wiguard' )
		),
		'Left'  => array(),
		'Center'  => array(
			'copyright' => esc_html__( 'Copyright Text', 'wiguard' )
		),
		'Right'  => array()
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Layout End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Style Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Style', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Bottom Link Color
$settings = array(
	'id'			=> 'footer-bottom-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Footer Bottom Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer bottomlink color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Bottom Border
$settings = array(
	'id'			=> 'footer-bottom-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Footer Bottom Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Bottom Padding Option
$settings = array(
	'id'			=> 'footer-bottom-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Footer Bottom Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Bottom Margin Option
$settings = array(
	'id'			=> 'footer-bottom-margin',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Footer Bottom Margin Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Bottom Background
$settings = array(
	'id'			=> 'footer-bottom-background',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Footer Bottom Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for footer background.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Bottom Background Overlay
$settings = array(
	'id'			=> 'footer-bottom-background-overlay',
	'type'			=> 'alpha',
	'title'			=> esc_html__( 'Footer Bottom Background Overlay', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer bottom background overlay color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Widget Title Color
$settings = array(
	'id'			=> 'footer-bottom-title-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Widget Title Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer bottom widgets title color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Style End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Text Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Custom Text', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Copyright Text
$settings = array(
	'id'			=> 'copyright-text',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Copyright Text', 'wiguard' ),
	'description'	=> esc_html__( 'This is the copyright text. Shown on footer bottom if enable footer bottom in footer items', 'wiguard' ),
	'default'		=> esc_html( 'Copyright 2020 Theme by zozothemes' ),
	'refresh'		=> 0,
	'instant'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Text End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );