<?php

//Header Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Layout
$settings = array(
	'id'			=> 'header-layout',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Header Width', 'wiguard' ),
	'description'	=> esc_html__( 'Choose header width boxed or wide.', 'wiguard' ),
	'choices'		=> array(
		'boxed'		=> esc_html__( 'Boxed', 'wiguard' ),
		'wide'		=> esc_html__( 'Wide', 'wiguard' ),
		'full'		=> esc_html__( 'Full Width', 'wiguard' )
	),
	'default'		=> 'wide',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Template
$settings = array(
	'id'			=> 'header-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Header Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose header template. Current header layout needed option values you can see after refresh this customizer page.', 'wiguard' ),
	'default'		=> '1',
	'items' 		=> array(
		'1'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/1.jpg',
		'2'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/2.jpg',
		'3'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/3.jpg',
		'4'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/4.jpg',
		'5'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/5.jpg',
		'6'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/6.jpg',
		'7'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/7.jpg',
		'8'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/8.jpg',
		'9'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/9.jpg',
		'10'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/10.jpg',
		'11'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/11.jpg',
		'12'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/12.jpg',
		'13'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/13.jpg',
		'vertical'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/14.jpg',
		'custom'=> WIGUARD_ADMIN_URL . '/customizer/assets/images/header-layouts/custom.jpg'
	),
	'cols'			=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Type
$settings = array(
	'id'			=> 'header-type',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Header Type', 'wiguard' ),
	'description'	=> esc_html__( 'Select header type for matching your site. If you choose left/right header type, manage under "Header -> Left/Right Navbar"', 'wiguard' ),
	'choices'		=> array(
		'default'		=> esc_html__( 'Default', 'wiguard' ),
		'left-sticky'	=> esc_html__( 'Left Nav', 'wiguard' ),
		'right-sticky'	=> esc_html__( 'Right Nav', 'wiguard' ),
	),
	'default'		=> 'default',
	'required'		=> array( 'header-template', '=', 'custom' ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Items
$settings = array(
	'id'			=> 'header-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Header Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed items for header, drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'Normal' 	=> array(
			'header-nav'	=> esc_html__( 'Nav Bar', 'wiguard' )
		),
		'Sticky' 	=> array(),
		'disabled' 	=> array(
			'header-topbar'	=> esc_html__( 'Top Bar', 'wiguard' ),
			'header-logo'	=> esc_html__( 'Logo Section', 'wiguard' )
		)
	),
	'required'		=> array( 'header-type', '=', 'default' ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Clik and Edit Header Layouts End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Clik and Edit Header Style
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Style', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Background Settings
$settings = array(
	'id'			=> 'header-background',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Header Background Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for header background with image, color, etc.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Dropdown Menu Background
$settings = array(
	'id'			=> 'dropdown-menu-background',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Dropdown Menu Background', 'wiguard' ),
	'description'	=> esc_html__( 'Choose dropdown menu background color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Dropdown Menu Color
$settings = array(
	'id'			=> 'dropdown-menu-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Dropdown Menu Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose dropdown menu link color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Dropdown Menu Border
$settings = array(
	'id'			=> 'dropdown-menu-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Dropdown Menu Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Clik and Edit Header Style End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Label Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Custom Text', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Address Label
$settings = array(
	'id'			=> 'header-address-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Address Label', 'wiguard' ),
	'description'	=> esc_html__( 'This is the address label field, you can assign here any label custom text.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Address Custom Text
$settings = array(
	'id'			=> 'header-address-text',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Address Custom Text', 'wiguard' ),
	'description'	=> esc_html__( 'This is the address field, you can assign here any custom text. Few HTML allowed here.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Phone Number Label
$settings = array(
	'id'			=> 'header-phone-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Phone Number Label', 'wiguard' ),
	'description'	=> esc_html__( 'This is the phone number label field, you can assign here any phone label custom text.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Phone Number Custom Text
$settings = array(
	'id'			=> 'header-phone-text',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Phone Number Custom Text', 'wiguard' ),
	'description'	=> esc_html__( 'This is the phone number field, you can assign here any custom text. Few HTML allowed here.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Email Label
$settings = array(
	'id'			=> 'header-email-label',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Email Label', 'wiguard' ),
	'description'	=> esc_html__( 'This is the email label field, you can assign here any email custom label text.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Email Custom Text
$settings = array(
	'id'			=> 'header-email-text',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Email Custom Text', 'wiguard' ),
	'description'	=> esc_html__( 'This is the email field, you can assign here any email id. Example companyname@yourdomain.com', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Label End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Advanced Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Advanced', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Absolute
$settings = array(
	'id'			=> 'header-absolute',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Header Absolute', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable header absolute option to show transparent header for page.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Part
$settings = array(
	'id'			=> 'sticky-part',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Header Sticky Part', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable stciky part to sticky which items are placed in sticky part at header items.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sticky Scroll Up
$settings = array(
	'id'			=> 'sticky-part-scrollup',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Sticky Scroll Up', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable stciky part to sticky only scroll up. This also only sticky which items are placed in Sticky Part at Header Items.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'sticky-part', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Main Menu Type
$settings = array(
	'id'			=> 'mainmenu-menutype',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Main Menu Type', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for mainmenu.', 'wiguard' ),
	'choices'		=> array(
		'advanced' => esc_html__( 'Advanced Menu', 'wiguard' ),
		'normal' => esc_html__( 'Normal Menu', 'wiguard' ),
	),
	'default'		=> 'normal',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Menu Tag
$settings = array(
	'id'			=> 'menu-tag',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Menu Tag', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable menu tag for menu items like Hot, Trend, New.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'mainmenu-menutype', '=', 'advanced' ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Hot Menu Tag Text
$settings = array(
	'id'			=> 'menu-tag-hot-text',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Hot Menu Tag Text', 'wiguard' ),
	'description'	=> esc_html__( 'Set this text to show hot menu tag.', 'wiguard' ),
	'default'		=> esc_html__( 'Hot', 'wiguard' ),
	'required'		=> array( 'menu-tag', '=', 1 ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Hot Menu Tag Background
$settings = array(
	'id'			=> 'menu-tag-hot-bg',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Hot Menu Tag Background', 'wiguard' ),
	'description'	=> esc_html__( 'Set this text to show hot menu tag.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'menu-tag', '=', 1 ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//New Menu Tag Text
$settings = array(
	'id'			=> 'menu-tag-new-text',
	'type'			=> 'text',
	'title'			=> esc_html__( 'New Menu Tag Text', 'wiguard' ),
	'description'	=> esc_html__( 'Set this text to show new menu tag.', 'wiguard' ),
	'default'		=> esc_html__( 'New', 'wiguard' ),
	'required'		=> array( 'menu-tag', '=', 1 ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//New Menu Tag Background
$settings = array(
	'id'			=> 'menu-tag-new-bg',
	'type'			=> 'color',
	'title'			=> esc_html__( 'New Menu Tag Background', 'wiguard' ),
	'description'	=> esc_html__( 'Set new menu tag background color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'menu-tag', '=', 1 ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Trend Menu Tag Text
$settings = array(
	'id'			=> 'menu-tag-trend-text',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Trend Menu Tag Text', 'wiguard' ),
	'description'	=> esc_html__( 'Set this text to show trend menu tag.', 'wiguard' ),
	'default'		=> esc_html__( 'Trend', 'wiguard' ),
	'required'		=> array( 'menu-tag', '=', 1 ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Trend Menu Tag Background
$settings = array(
	'id'			=> 'menu-tag-trend-bg',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Trend Menu Tag Background', 'wiguard' ),
	'description'	=> esc_html__( 'Set trend menu tag background color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'menu-tag', '=', 1 ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Secondary Menu
$settings = array(
	'id'			=> 'secondary-menu',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Secondary Menu', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable secondary menu.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Secondary Menu Type
$settings = array(
	'id'			=> 'secondary-menu-type',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Secondary Menu Type', 'wiguard' ),
	'description'	=> esc_html__( 'Choose secondary menu type.', 'wiguard' ),
	'choices'		=> array(
		'left-push'		=> esc_html__( 'Left Push', 'wiguard' ),
		'left-overlay'	=> esc_html__( 'Left Overlay', 'wiguard' ),
		'right-push'	=> esc_html__( 'Right Push', 'wiguard' ),
		'right-overlay'	=> esc_html__( 'Right Overlay', 'wiguard' ),
		'full-overlay'	=> esc_html__( 'Full Page Overlay', 'wiguard' )
	),
	'default'		=> 'right-overlay',
	'required'		=> array( 'secondary-menu', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Secondary Menu Space Width
$settings = array(
	'id'			=> 'secondary-menu-space-width',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Secondary Menu Space Width', 'wiguard' ),
	'description'	=> esc_html__( 'Increase or decrease secondary menu space width. this options only use if you enable secondary menu. Here no need to specify dimensions like px, em, etc.. Example 350', 'wiguard' ),
	'default'		=> '350',
	'required'		=> array( 'secondary-menu', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Slider Position
$settings = array(
	'id'			=> 'header-slider-position',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Header Slider Position', 'wiguard' ),
	'description'	=> esc_html__( 'Select header slider position matching your page.', 'wiguard' ),
	'choices'		=> array(
		'bottom'	=> esc_html__( 'Below Header', 'wiguard' ),
		'top'		=> esc_html__( 'Above Header', 'wiguard' ),
		'none'		=> esc_html__( 'None', 'wiguard' )
	),
	'default'		=> 'none',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Search Toggle Modal
$settings = array(
	'id'			=> 'search-toggle-form',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Search Toggle Modal', 'wiguard' ),
	'description'	=> esc_html__( 'Select serach box toggle modal.', 'wiguard' ),
	'choices'		=> array(
		'1'	=> esc_html__( 'Full Screen Search', 'wiguard' ),
		'2' => esc_html__( 'Text Box Toggle Search', 'wiguard' ),
		'3' => esc_html__( 'Full Bar Toggle Search', 'wiguard' ),
		'4' => esc_html__( 'Bottom Seach Box Toggle', 'wiguard' ),
	),
	'default'		=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Advanced End
$settings = array(
	'type'			=> 'toggle_section',
	'section_stat'	=> false
);
WiguardCustomizerConfig::buildFields( $settings );