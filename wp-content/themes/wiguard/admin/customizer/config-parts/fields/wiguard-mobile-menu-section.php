<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Topbar Items
$settings = array(
	'id'			=> 'mobile-topbar-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Mobile Topbar Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed mobile topbar items drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(
			'phone'		=> esc_html__( 'Phone', 'wiguard' ),
			'address'	=> esc_html__( 'Address', 'wiguard' ),
			'mail'		=> esc_html__( 'Mail', 'wiguard' ),
			'custom-1'		=> esc_html__( 'Custom Text', 'wiguard' ),
		),
		'Enabled'  => array()
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Header Items
$settings = array(
	'id'			=> 'mobile-header-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Mobile Header Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed mobile header items drag from disabled and put enabled parts like left, center or right.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(
			'mobile-header-cart'	=> esc_html__( 'Cart Icon', 'wiguard' )
		),
		'Left'  => array(
			'mobile-header-menu'	=> esc_html__( 'Menu Icon', 'wiguard' )		
		),
		'Center'  => array(
			'mobile-header-logo' 	=> esc_html__( 'Logo', 'wiguard' )
		),
		'Right'  => array(
			'mobile-header-search'	=> esc_html__( 'Search Icon', 'wiguard' )
		)
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Menu Items
$settings = array(
	'id'			=> 'mobile-menu-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Mobile Menu Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed mobile menu items drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(
			'mobile-menu-text-1'	=> esc_html__( 'Custom Text 1', 'wiguard' ),
			'mobile-menu-text-2'	=> esc_html__( 'Custom Text 2', 'wiguard' ),
			'mobile-menu-social'	=> esc_html__( 'Social', 'wiguard' )
		),
		'Top'  => array(
			'mobile-menu-logo' 		=> esc_html__( 'Logo', 'wiguard' )
		),
		'Middle'  => array(
			'mobile-menu-mainmenu'	=> esc_html__( 'Menu', 'wiguard' )
		),
		'Bottom'  => array(
			'mobile-menu-search'	=> esc_html__( 'Search Form', 'wiguard' )					
		)
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

//Mobile Header Height
$settings = array(
	'id'			=> 'mobile-header-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Mobile Header Height', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease mobile header width.', 'wiguard' ),
	'default'		=> '60',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Header Background
$settings = array(
	'id'			=> 'mobile-header-background',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Mobile Header Background', 'wiguard' ),
	'description'	=> esc_html__( 'Set mobile header background color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Header Link Color
$settings = array(
	'id'			=> 'mobile-header-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Mobile Header Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose mobile header link color options.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Header Sticky Height
$settings = array(
	'id'			=> 'mobile-header-sticky-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Mobile Header Sticky Height', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease mobile header sticky height.', 'wiguard' ),
	'default'		=> '60',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Sticky Header Background
$settings = array(
	'id'			=> 'mobile-header-sticky-background',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Mobile Sticky Header Background', 'wiguard' ),
	'description'	=> esc_html__( 'Set mobile sticky header background color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Sticky Header Link Color
$settings = array(
	'id'			=> 'mobile-header-sticky-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Mobile Sticky Header Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose mobile sticky header link color options.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Menu Animate From
$settings = array(
	'id'			=> 'mobile-menu-animate-from',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Mobile Menu Animate From', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your mobile menu animate from left, right, top or bottom.', 'wiguard' ),
	'choices'		=> array(
		'left' 		=> esc_html__( 'Left', 'wiguard' ),
		'right' 	=> esc_html__( 'Right', 'wiguard' ),
		'top' 		=> esc_html__( 'Top', 'wiguard' ),
		'bottom' 	=> esc_html__( 'Bottom', 'wiguard' )
	),
	'default'		=> 'left',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Menu Max Width
$settings = array(
	'id'			=> 'mobile-menu-max-width',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Mobile Menu Max Width', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease mobile menu maximum width. If you need full width means just leave this empty.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Mobile Menu Link Color
$settings = array(
	'id'			=> 'mobile-menu-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Header Mobile Menu Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose mobile menu link color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Mobile Menu Border
$settings = array(
	'id'			=> 'mobile-menu-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Header Mobile Menu Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Mobile Menu Padding Option
$settings = array(
	'id'			=> 'mobile-menu-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Header Mobile Menu Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Mobile Menu Background
$settings = array(
	'id'			=> 'mobile-menu-background',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Header Mobile Menu Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for mobile menu background.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
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

//Mobile Topbar Custom Text
$settings = array(
	'id'			=> 'mobile-topbar-text-1',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Mobile Topbar Custom Text', 'wiguard' ),
	'description'	=> esc_html__( 'One more custom text shows on mobile topbar. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Menu Custom Text 1
$settings = array(
	'id'			=> 'mobile-menu-text-1',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Mobile Menu Custom Text 1', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows on mobile menu space. Here, you can place shortcode.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Menu Custom Text 2
$settings = array(
	'id'			=> 'mobile-menu-text-2',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Mobile Menu Custom Text 2', 'wiguard' ),
	'description'	=> esc_html__( 'Custom text shows on mobile menu space. Here, you can place shortcode.', 'wiguard' ),
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

//Advanced Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Advanced', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Topbar Option
$settings = array(
	'id'			=> 'mobile-topbar-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Mobile Topbar Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable mobile topbar.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Header From
$settings = array(
	'id'			=> 'mobile-header-from',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Mobile Header From', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your mobile header shows from tablet, tablet landscape or mobile', 'wiguard' ),
	'choices'		=> array(
		'767' 	=> esc_html__( 'Mobile', 'wiguard' ),
		'992' 	=> esc_html__( 'Tablet (portrait)', 'wiguard' ),
		'1025'	=> esc_html__( 'Tablet (landscape)', 'wiguard' ),
		'c'			=> esc_html__( 'Custom', 'wiguard' )
	),
	'default'		=> 'tab-land',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Header Visual From
$settings = array(
	'id'			=> 'mobile-header-from-custom',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Custom Width Visbile Mobile Header From', 'wiguard' ),
	'description'	=> esc_html__( 'Set width in value for showing mobile header in responsive. Example 767', 'wiguard' ),
	'default'		=> '767',
	'required'		=> array( 'mobile-header-from', '=', 'c' ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Header Sticky
$settings = array(
	'id'			=> 'mobile-header-sticky',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Mobile Header Sticky', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable this option to sticky mobile header.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Header Sticky Scroll Up
$settings = array(
	'id'			=> 'mobile-header-sticky-scrollup',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Mobile Header Sticky Scroll Up', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable this option to sticky mobile header only scroll up.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'mobile-header-sticky', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Advanced End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );