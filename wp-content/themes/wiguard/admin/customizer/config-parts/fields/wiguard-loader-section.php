<?php

//Page Loader
$settings = array(
	'id'			=> 'page-loader',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Page Loader', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable page loader', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Loader Image
$settings = array(
	'id'			=> 'page-loader-img',
	'type'			=> 'image',
	'title'			=> esc_html__( 'Page Loader Image', 'wiguard' ),
	'description'	=> esc_html__( 'Upload Page Loader Image', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1,
	'required'		=> array( 'page-loader', '=', 1 )
);
WiguardCustomizerConfig::buildFields( $settings );

//Infinite Scroll Image
$settings = array(
	'id'			=> 'infinite-loader-img',
	'type'			=> 'image',
	'title'			=> esc_html__( 'Infinite Scroll Image', 'wiguard' ),
	'description'	=> esc_html__( 'Upload Infinite Scroll Image', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );