<?php

//Woo Single Page Title Option
$settings = array(
	'id'			=> 'single-product-page-title-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Woo Single Page Title Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable woo single page title.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Woo Single Page Title Settings
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Woo Single Page Title Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is woo single page title style settings for page template.', 'wiguard' ),
	'section_stat'	=> true,
	'required'		=> array( 'single-product-page-title-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Font Color
$settings = array(
	'id'			=> 'template-single-product-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Font Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is font color for current field.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-product-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Link Color
$settings = array(
	'id'			=> 'template-single-product-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Page Template Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose Single page title bar link color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-product-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Border
$settings = array(
	'id'			=> 'template-single-product-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Page Template Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put units like px, em etc. Example 1 1 1 1.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-product-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Padding Option
$settings = array(
	'id'			=> 'template-single-product-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Page Template Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-product-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Background
$settings = array(
	'id'			=> 'template-single-product-background-all',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Page Template Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for footer background.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-product-page-title-opt', '=', 1 ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Background Parallax
$settings = array(
	'id'			=> 'single-product-page-title-parallax',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Background Parallax', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title background parallax.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'single-product-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Background Video
$settings = array(
	'id'			=> 'single-product-page-title-bg',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Background Video', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title background video.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-product-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Background Video
$settings = array(
	'id'			=> 'single-product-page-title-video',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Page Title Background Video', 'wiguard' ),
	'description'	=> esc_html__( 'Set page title background video for page. Only allowed youtube video id. Example: UWF7dZTLW4c', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-product-page-title-bg', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );


//Page Title Overlay
$settings = array(
	'id'			=> 'single-product-page-title-overlay',
	'type'			=> 'alpha',
	'title'			=> esc_html__( 'Page Title Overlay', 'wiguard' ),
	'description'	=> esc_html__( 'Choose page title overlay rgba color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'single-product-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Woo Single Page Title Items Option
$settings = array(
	'id'			=> 'template-single-product-page-title-items-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Woo Single Page Title Items Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable to make woo single page title items custom layout.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'single-product-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Items
$settings = array(
	'id'			=> 'template-single-product-pagetitle-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Woo Single Page Title Items', 'wiguard' ),
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
	'required'		=> array( 'template-single-product-page-title-items-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Woo Single Page Title Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false,
	'required'		=> array( 'single-product-page-title-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );