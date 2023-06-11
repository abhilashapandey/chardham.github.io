<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Option
$settings = array(
	'id'			=> 'page-page-title-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Page Title Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title.', 'wiguard' ),
	'default'		=> 1,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Items
$settings = array(
	'id'			=> 'template-page-pagetitle-items',
	'type'			=> 'dragdrop',
	'title'			=> esc_html__( 'Page Title Items', 'wiguard' ),
	'description'	=> esc_html__( 'Needed items for page title wrap, drag from disabled and put enabled.', 'wiguard' ),
	'default' 		=> array(
		'disabled' => array(),
		'Left'  => array(
			'title' => esc_html__( 'Page Title Text', 'wiguard' ),
		),
		'Center' => array(),
		'Right'  => array(
			'breadcrumb'	=> esc_html__( 'Breadcrumb', 'wiguard' )
		)
	),
	'required'		=> array( 'page-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template
$settings = array(
	'id'			=> 'page-page-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Page Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your current page template.', 'wiguard' ),
	'default'		=> 'right-sidebar',
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
	'id'			=> 'page-left-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Left Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on left side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Right Sidebar
$settings = array(
	'id'			=> 'page-right-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Right Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on right side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
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

//Page Title Settings
$settings = array(
	'type'			=> 'section',
	'label'			=> esc_html__( 'Page Title Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is page title style settings shows only when page title option active.', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Font Color
$settings = array(
	'id'			=> 'template-page-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Font Color', 'wiguard' ),
	'description'	=> esc_html__( 'This is font color for current field.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'page-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Link Color
$settings = array(
	'id'			=> 'template-page-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Page Template Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose Page title bar link color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'page-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Border
$settings = array(
	'id'			=> 'template-page-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Page Template Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'page-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Padding Option
$settings = array(
	'id'			=> 'template-page-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Page Template Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'page-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Template Background
$settings = array(
	'id'			=> 'template-page-background-all',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Page Template Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for footer background.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'page-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Background Parallax
$settings = array(
	'id'			=> 'page-page-title-parallax',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Background Parallax', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title background parallax.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'page-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Background Video
$settings = array(
	'id'			=> 'page-page-title-bg',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Background Video', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page title background video.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'page-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Background Video
$settings = array(
	'id'			=> 'page-page-title-video',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Page Title Background Video', 'wiguard' ),
	'description'	=> esc_html__( 'Set page title background video for page. Only allowed youtube video id. Example: UWF7dZTLW4c', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'page-page-title-bg', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Overlay
$settings = array(
	'id'			=> 'page-page-title-overlay',
	'type'			=> 'alpha',
	'title'			=> esc_html__( 'Page Title Overlay', 'wiguard' ),
	'description'	=> esc_html__( 'Choose page title overlay rgba color.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'page-page-title-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Title Settings End
$settings = array(
	'type'			=> 'section',
	'section_stat'	=> false,
	'required'		=> array( 'page-page-title-opt', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Style End
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

//Sidebar Sticky
$settings = array(
	'id'			=> 'page-sidebar-sticky',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Sidebar Sticky', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable sidebar sticky.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sidebar on Mobile
$settings = array(
	'id'			=> 'page-page-hide-sidebar',
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