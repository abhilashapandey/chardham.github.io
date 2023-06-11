<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Logo Section Items
$settings = array(
	'id'			=> 'header-logobar-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Header Logo Section Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed header logo section items drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(
			'header-logobar-social'		=> esc_html__( 'Social', 'wiguard' ),
			'header-logobar-search'		=> esc_html__( 'Search', 'wiguard' ),
			'header-logobar-secondary-toggle'	=> esc_html__( 'Secondary Toggle', 'wiguard' ),	
			'header-phone'   			=> esc_html__( 'Phone Number', 'wiguard' ),
			'header-address'  			=> esc_html__( 'Address Text', 'wiguard' ),
			'header-email'   			=> esc_html__( 'Email', 'wiguard' ),
			'header-logobar-menu'   	=> esc_html__( 'Main Menu', 'wiguard' ),
			'header-logobar-search-toggle'	=> esc_html__( 'Search Toggle', 'wiguard' ),
			'header-logobar-text-1'		=> esc_html__( 'Custom Text 1', 'wiguard' ),
			'header-logobar-text-2'		=> esc_html__( 'Custom Text 2', 'wiguard' ),
			'header-logobar-text-3'		=> esc_html__( 'Custom Text 3', 'wiguard' ),	
			'header-cart'   			=> esc_html__( 'Cart', 'wiguard' ),
			'multi-info'   				=> esc_html__( 'Address, Phone, Email', 'wiguard' )
		),
		'Left'  => array(
			'header-logobar-logo'		=> esc_html__( 'Logo', 'wiguard' ),
			'header-logobar-sticky-logo' => esc_html__( 'Sticky Logo', 'wiguard' )											
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

//Header Logo Section Height
$settings = array(
	'id'			=> 'header-logobar-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Header Logo Section Height', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease header logo section height. Here no need to put dimension units like px, em etc. Example 50', 'wiguard' ),
	'default'		=> '80',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Logo Section Sticky Height
$settings = array(
	'id'			=> 'header-logobar-sticky-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Header Logo Section Sticky Height', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease header logo section sticky height. Here no need to put dimension units like px, em etc. Example 50', 'wiguard' ),
	'default'		=> '80',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Logo Section Background
$settings = array(
	'id'			=> 'header-logobar-background',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Header Logo Section Background', 'wiguard' ),
	'description'	=> esc_html__( 'Choose logo section background color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Logo Section Link Color
$settings = array(
	'id'			=> 'header-logobar-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Header Logo Section Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose logo section link color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Logo Section Border
$settings = array(
	'id'			=> 'header-logobar-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Header Logo Section Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Logo Section Padding Option
$settings = array(
	'id'			=> 'header-logobar-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Header Logo Section Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Logo Section Font Color
$settings = array(
	'id'			=> 'sticky-header-logobar-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Header Sticky Logo Section Font Color', 'wiguard' ),
	'description'	=> esc_html__( 'Set header sticky logo section font color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Logo Section Background
$settings = array(
	'id'			=> 'sticky-header-logobar-background',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Header Sticky Logo Section Background', 'wiguard' ),
	'description'	=> esc_html__( 'Choose sticky logo section background color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Logo Section Link Color
$settings = array(
	'id'			=> 'sticky-header-logobar-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Header Sticky Logo Section Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose sticky logo section link color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Logo Section Border
$settings = array(
	'id'			=> 'sticky-header-logobar-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Header Sticky Logo Section Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Logo Section Padding Option
$settings = array(
	'id'			=> 'sticky-header-logobar-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Header Sticky Logo Section Padding Option', 'wiguard' ),
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

//Logo Section Custom Text 1
$settings = array(
	'id'			=> 'header-logobar-text-1',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Logo Section Custom Text 1', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header logo section. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Logo Section Custom Text 2
$settings = array(
	'id'			=> 'header-logobar-text-2',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Logo Section Custom Text 2', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header logo section. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Logo Section Custom Text 3
$settings = array(
	'id'			=> 'header-logobar-text-3',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Logo Section Custom Text 3', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows header logo section. Here, you can place shortcode.', 'wiguard' ),
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