<?php

//Header Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Top Bar Items
$settings = array(
	'id'			=> 'header-topbar-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Header Top Bar Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed header topbar items drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(
			'header-topbar-text-2'	=> esc_html__( 'Custom Text 2', 'wiguard' ),
			'header-topbar-text-3'	=> esc_html__( 'Custom Text 3', 'wiguard' ),
			'header-topbar-social'	=> esc_html__( 'Social', 'wiguard' ),
			'header-topbar-search'	=> esc_html__( 'Search', 'wiguard' ),
			'header-topbar-date' 	=> esc_html__( 'Date', 'wiguard' ),
			'header-phone'   		=> esc_html__( 'Phone Number', 'wiguard' ),
			'header-address'  		=> esc_html__( 'Address Text', 'wiguard' ),
			'header-email'   		=> esc_html__( 'Email', 'wiguard' )					
		),
		'Left'  => array(
			'header-topbar-menu'    => esc_html__( 'Top Bar Menu', 'wiguard' )												
		),
		'Center' => array(),
		'Right' => array(
			'header-topbar-text-1'	=> esc_html__( 'Custom Text 1', 'wiguard' ),
			'header-cart'   		=> esc_html__( 'Cart', 'wiguard' ),
			'header-topbar-search-toggle'	=> esc_html__( 'Search Toggle', 'wiguard' )
		)
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Clik and Edit Header Layouts End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Style Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Style', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Top Bar Height
$settings = array(
	'id'			=> 'header-topbar-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Header Top Bar Height', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease header topbar height. Here no need to put dimension units like px, em etc. Example 50', 'wiguard' ),
	'default'		=> '50',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Top Bar Sticky Height
$settings = array(
	'id'			=> 'header-topbar-sticky-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Header Top Bar Sticky Height', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease header topbar sticky height. Here no need to put dimension units like px, em etc. Example 50', 'wiguard' ),
	'default'		=> '50',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Topbar Background
$settings = array(
	'id'			=> 'header-topbar-background',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Header Topbar Background', 'wiguard' ),
	'description'	=> esc_html__( 'Choose topbar background color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Topbar Color
$settings = array(
	'id'			=> 'header-topbar-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Header Topbar Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose topbar link color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Topbar Border
$settings = array(
	'id'			=> 'header-topbar-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Header Topbar Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Topbar Padding Option
$settings = array(
	'id'			=> 'header-topbar-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Header Topbar Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Style End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Custom Text
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Custom Text', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Topbar Custom Text 1
$settings = array(
	'id'			=> 'header-topbar-text-1',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Topbar Custom Text 1', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header topbar. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Topbar Custom Text 2
$settings = array(
	'id'			=> 'header-topbar-text-2',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Topbar Custom Text 2', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header topbar. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Topbar Custom Text 3
$settings = array(
	'id'			=> 'header-topbar-text-3',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Topbar Custom Text 3', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header topbar. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Date Format
$settings = array(
	'id'			=> 'header-topbar-date',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Date Format', 'wiguard' ),
	'description'	=> esc_html__( 'Enter date format like: l, F j, Y', 'wiguard' ),
	'default'		=> 'l, F j, Y',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Custom Text End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );