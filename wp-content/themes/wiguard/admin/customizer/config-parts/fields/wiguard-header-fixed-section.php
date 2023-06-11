<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky/Fixed Items
$settings = array(
	'id'			=> 'header-fixed-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Header Sticky/Fixed Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed header fixed items drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(
			'header-fixed-text-1'	=> esc_html__( 'Custom Text 1', 'wiguard' ),
			'header-fixed-text-2'	=> esc_html__( 'Custom Text 2', 'wiguard' ),
			'header-fixed-search'	=> esc_html__( 'Search Form', 'wiguard' ),
			'header-fixed-social'	=> esc_html__( 'Social', 'wiguard' )
		),
		'Top'  => array(						
			'header-fixed-logo' => esc_html__( 'Logo', 'wiguard' )
		),
		'Middle'  => array(
			'header-fixed-menu'	=> esc_html__( 'Menu', 'wiguard' )						
		),
		'Bottom'  => array()
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

//Header Sticky/Fixed Width
$settings = array(
	'id'			=> 'header-fixed-width',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Header Sticky/Fixed Width', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease header fixed width. Here no need to put dimension units like px, em etc. Example 350', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky/Fixed Link Color
$settings = array(
	'id'			=> 'header-fixed-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Header Sticky/Fixed Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose fixed link color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky/Fixed Border
$settings = array(
	'id'			=> 'header-fixed-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Header Sticky/Fixed Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky/Fixed Padding Option
$settings = array(
	'id'			=> 'header-fixed-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Header Sticky/Fixed Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Background
$settings = array(
	'id'			=> 'header-fixed-background',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for sticky/fixed header background.', 'wiguard' ),
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

//Sticky/Fixed Custom Text 1
$settings = array(
	'id'			=> 'header-fixed-text-1',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Sticky/Fixed Custom Text 1', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header fixed. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sticky/Fixed Custom Text 2
$settings = array(
	'id'			=> 'header-fixed-text-2',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Sticky/Fixed Custom Text 2', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header fixed. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Custom Text End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );