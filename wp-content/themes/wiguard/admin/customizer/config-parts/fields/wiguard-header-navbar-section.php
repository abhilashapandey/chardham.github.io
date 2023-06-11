<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Navbar Items
$settings = array(
	'id'			=> 'header-navbar-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Header Navbar Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed header navbar items drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(					
			'header-navbar-text-1'		=> esc_html__( 'Custom Text 1', 'wiguard' ),
			'header-navbar-text-2'		=> esc_html__( 'Custom Text 2', 'wiguard' ),
			'header-navbar-text-3'		=> esc_html__( 'Custom Text 3', 'wiguard' ),					
			'header-navbar-social'		=> esc_html__( 'Social', 'wiguard' ),
			'header-navbar-secondary-toggle'	=> esc_html__( 'Secondary Toggle', 'wiguard' ),					
			'header-navbar-search'		=> esc_html__( 'Search', 'wiguard' ),
			'header-phone'   			=> esc_html__( 'Phone Number', 'wiguard' ),
			'header-address'  			=> esc_html__( 'Address Text', 'wiguard' ),
			'header-email'   			=> esc_html__( 'Email', 'wiguard' ),
			'header-navbar-search-toggle'	=> esc_html__( 'Search Toggle', 'wiguard' ),
			'header-cart'   			=> esc_html__( 'Cart', 'wiguard' )
		),
		'Left'  => array(
			'header-navbar-logo'		=> esc_html__( 'Logo', 'wiguard' ),
			'header-navbar-sticky-logo'	=> esc_html__( 'Stikcy Logo', 'wiguard' ),
			'header-navbar-menu'    	=> esc_html__( 'Main Menu', 'wiguard' )										
		),
		'Center' => array(),
		'Right' => array()
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

//Header Navbar Height
$settings = array(
	'id'			=> 'header-navbar-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Header Navbar Height', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease header navbar height. Here no need to put dimension units like px, em etc. Example 50', 'wiguard' ),
	'default'		=> '80',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Navbar Sticky Height
$settings = array(
	'id'			=> 'header-navbar-sticky-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Header Navbar Sticky Height', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease header navbar sticky height. Here no need to put dimension units like px, em etc. Example 50', 'wiguard' ),
	'default'		=> '80',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Navbar Background
$settings = array(
	'id'			=> 'header-navbar-background',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Header Navbar Background', 'wiguard' ),
	'description'	=> esc_html__( 'Choose navbar background color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Navbar Link Color
$settings = array(
	'id'			=> 'header-navbar-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Header Navbar Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose navbar link color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Navbar Border
$settings = array(
	'id'			=> 'header-navbar-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Header Navbar Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Navbar Padding Option
$settings = array(
	'id'			=> 'header-navbar-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Header Navbar Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Navbar Font Color
$settings = array(
	'id'			=> 'sticky-header-navbar-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Header Sticky Navbar Font Color', 'wiguard' ),
	'description'	=> esc_html__( 'Set header sticky navbar font color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Navbar Background
$settings = array(
	'id'			=> 'sticky-header-navbar-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Header Sticky Navbar Background', 'wiguard' ),
	'description'	=> esc_html__( 'Choose sticky navbar background color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Navbar Link Color
$settings = array(
	'id'			=> 'sticky-header-navbar-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Header Sticky Navbar Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose sticky navbar link color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Navbar Border
$settings = array(
	'id'			=> 'sticky-header-navbar-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Header Sticky Navbar Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Navbar Padding Option
$settings = array(
	'id'			=> 'sticky-header-navbar-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Header Sticky Navbar Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
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

//Navbar Custom Text 1
$settings = array(
	'id'			=> 'header-navbar-text-1',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Navbar Custom Text 1', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header navbar. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Navbar Custom Text 2
$settings = array(
	'id'			=> 'header-navbar-text-2',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Navbar Custom Text 2', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header navbar. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Navbar Custom Text 3
$settings = array(
	'id'			=> 'header-navbar-text-3',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Navbar Custom Text 3', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header navbar. Here, you can place shortcode.', 'wiguard' ),
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