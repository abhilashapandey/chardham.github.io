<?php

//Layout Start
$settings = array(
	'type'			=> 'toggle_section',
	'label'			=> esc_html__( 'Layout', 'wiguard' ),
	'section_stat'	=> true
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Top Inner Layout
$settings = array(
	'id'			=> 'footer-top-container',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Footer Top Inner Layout', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer top layout boxed or wide.', 'wiguard' ),
	'choices'		=> array(
		'boxed'		=> esc_html__( 'Boxed', 'wiguard' ),
		'wide'		=> esc_html__( 'Wide', 'wiguard' )
	),
	'default'		=> 'wide',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Top Layout
$settings = array(
	'id'			=> 'footer-top-layout',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Footer Top Layout', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can choose footer top columns layout.', 'wiguard' ),
	'default'		=> '4-4-4',
	'items' 		=> array(
		'3-3-3-3'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer/footer-1.png',
		'4-4-4'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer/footer-2.png',
		'3-6-3'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer/footer-3.png',
		'6-6'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer/footer-4.png',
		'9-3'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer/footer-5.png',
		'3-9'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer/footer-6.png',
		'4-2-2-2-2'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer/footer-8.png',
		'6-2-2-2'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer/footer-9.png',
		'12'		=> WIGUARD_ADMIN_URL . '/customizer/assets/images/footer/footer-7.png'		
	),
	'cols'			=> '3',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Choose First Column
$settings = array(
	'id'			=> 'footer-top-sidebar-1',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Choose First Column', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing first column of footer top.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Choose Second Column
$settings = array(
	'id'			=> 'footer-top-sidebar-2',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Choose Second Column', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing second column of footer top.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Choose Third Column
$settings = array(
	'id'			=> 'footer-top-sidebar-3',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Choose Third Column', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing third column of footer top.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Choose Fourth Column
$settings = array(
	'id'			=> 'footer-top-sidebar-4',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Choose Fourth Column', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing fourth column of footer top.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Choose Fifth Column
$settings = array(
	'id'			=> 'footer-top-sidebar-5',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Choose Fifth Column', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing fifth column of footer top.', 'wiguard' ),
	'default'		=> '',
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

//Footer Top Link Color
$settings = array(
	'id'			=> 'footer-top-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'Footer Top Link Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer top link color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Top Border
$settings = array(
	'id'			=> 'footer-top-border',
	'type'			=> 'border',
	'title'			=> esc_html__( 'Footer Top Border', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set border. No need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Top Padding Option
$settings = array(
	'id'			=> 'footer-top-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Footer Top Padding Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Top Margin Option
$settings = array(
	'id'			=> 'footer-top-margin',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Footer Top Margin Option', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimension units like px, em etc. Example 10 10 20 10.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Top Background
$settings = array(
	'id'			=> 'footer-top-background',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Footer Top Background', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for footer background.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Top Background Overlay
$settings = array(
	'id'			=> 'footer-top-background-overlay',
	'type'			=> 'alpha',
	'title'			=> esc_html__( 'Footer Top Background Overlay', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer top background overlay color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Widget Title Color
$settings = array(
	'id'			=> 'footer-top-title-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Widget Title Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer top widgets title color.', 'wiguard' ),
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