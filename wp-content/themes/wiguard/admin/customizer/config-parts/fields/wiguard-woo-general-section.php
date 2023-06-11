<?php

//Woocommerce Shop Template
$settings = array(
	'id'			=> 'woo-page-template',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Woocommerce Shop Template', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your current archive page template.', 'wiguard' ),
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
	'id'			=> 'woo-left-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Left Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on left side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Right Sidebar
$settings = array(
	'id'			=> 'woo-right-sidebar',
	'type'			=> 'sidebars',
	'title'			=> esc_html__( 'Right Sidebar', 'wiguard' ),
	'description'	=> esc_html__( 'Select widget area for showing on right side.', 'wiguard' ),
	'default'		=> 'sidebar-1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Shop Columns
$settings = array(
	'id'			=> 'woo-shop-columns',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Shop Columns', 'wiguard' ),
	'description'	=> esc_html__( 'This is column settings woocommerce shop page products.', 'wiguard' ),
	'choices'		=> array(
		'2'		=> esc_html__( '2 Columns', 'wiguard' ),
		'3'		=> esc_html__( '3 Columns', 'wiguard' ),
		'4'		=> esc_html__( '4 Columns', 'wiguard' ),
		'5'		=> esc_html__( '5 Columns', 'wiguard' ),
		'6'		=> esc_html__( '6 Columns', 'wiguard' ),
	),
	'default'		=> '3',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Shop Product Per Page
$settings = array(
	'id'			=> 'woo-shop-ppp',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Shop Product Per Page', 'wiguard' ),
	'description'	=> esc_html__( 'This is column settings woocommerce related products per page', 'wiguard' ),
	'default'		=> '12',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Related Product Per Page
$settings = array(
	'id'			=> 'woo-related-ppp',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Related Product Per Page', 'wiguard' ),
	'description'	=> esc_html__( 'This is column settings woocommerce related products per page', 'wiguard' ),
	'default'		=> '3',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );