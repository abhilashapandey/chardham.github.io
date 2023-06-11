<?php

//Woo Page Title Option
$settings = array(
	'id'			=> 'woo-page-title-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Woo Page Title Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable woo page title.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Woo Page Title Settings
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Woo Page Title Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is woo page title style settings for page template.', 'wiguard' ),
	'section_stat'	=> true,
	'required'		=> array( 'woo-page-title-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Font Color
$settings = array(
	'id'			=> 'template-woo-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Font Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is font color for current field.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'woo-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Link Color
$settings = array(
	'id'			=> 'template-woo-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Page Template Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose Woocommerce page title bar link color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'woo-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Border
$settings = array(
	'id'			=> 'template-woo-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Page Template Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put units like px, em etc. Example 1 1 1 1.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'woo-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Padding Option
$settings = array(
	'id'			=> 'template-woo-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Page Template Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'woo-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Background
$settings = array(
	'id'			=> 'template-woo-background-all',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Page Template Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for footer background.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'woo-page-title-opt', '=', 1 ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Background Parallax
$settings = array(
	'id'			=> 'woo-page-title-parallax',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Background Parallax', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title background parallax.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'woo-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Background Video
$settings = array(
	'id'			=> 'woo-page-title-bg',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Background Video', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title background video.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'woo-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Background Video
$settings = array(
	'id'			=> 'woo-page-title-video',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Page Title Background Video', 'wiguard' ),
	'description'	=> esc_html__( 'Set page title background video for page. Only allowed youtube video id. Example: UWF7dZTLW4c', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'woo-page-title-bg', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );


//Page Title Overlay
$settings = array(
	'id'			=> 'woo-page-title-overlay',
	'type'			=> 'alpha',
	'title'			=> esc_html__( 'Page Title Overlay', 'wiguard' ),
	'description'	=> esc_html__( 'Choose page title overlay rgba color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'woo-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Woo Page Title Items Option
$settings = array(
	'id'			=> 'template-woo-page-title-items-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Woo Page Title Items Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable to make woo page title items custom layout.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'woo-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Items
$settings = array(
	'id'			=> 'template-woo-pagetitle-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Woo Page Title Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed items for page title wrap, drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' 	=> array(),
		'Left'  	=> array(
			'title' => esc_html__( 'Page Title Text', 'wiguard' ),
		),
		'Center'  	=> array(),
		'Right'  	=> array(
			'breadcrumb'	=> esc_html__( 'Breadcrumb', 'wiguard' )
		)
	),
	'required'		=> array( 'template-woo-page-title-items-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Woo Page Title Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false,
	'required'		=> array( 'woo-page-title-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Woocommerce Archive Template
$settings = array(
	'id'			=> 'wooarchive-page-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Woocommerce Archive Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your current Woocommerce Archive page template.', 'wiguard' ),
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
	'id'			=> 'wooarchive-left-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Left Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing woocommerce archive template on left sidebar.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Right Sidebar
$settings = array(
	'id'			=> 'wooarchive-right-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Right Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing woocommerce archive template on right sidebar.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Product Archive Columns
$settings = array(
	'id'			=> 'woo-shop-archive-columns',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Product Archive Columns', 'wiguard' ),
	'description'	=> esc_html__( 'This is column settings woocommerce product archive columns.', 'wiguard' ),
	'choices'		=> array(
		'2'		=> esc_html__( '2 Columns', 'wiguard' ),
		'3'		=> esc_html__( '3 Columns', 'wiguard' ),
		'4'		=> esc_html__( '4 Columns', 'wiguard' ),
		'5'		=> esc_html__( '5 Columns', 'wiguard' ),
		'6'		=> esc_html__( '6 Columns', 'wiguard' ),
	),
	'default'		=> '4',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );