<?php

//Logo
$settings = array(
	'id'			=> 'logo',
	'type'			=> 'image',
	'title'			=> esc_html__( 'Logo', 'wiguard' ),
	'description'	=> esc_html__( 'Upload site logo', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Logo Height
$settings = array(
	'id'			=> 'logo-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Header Logo Height', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set your maximum height of your logo. Here no need to put dimension units like px, em etc. Example 50', 'wiguard' ),
	'default'		=> '70',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Sticky Logo
$settings = array(
	'id'			=> 'sticky-logo',
	'type'			=> 'image',
	'title'			=> esc_html__( 'Sticky Logo', 'wiguard' ),
	'description'	=> esc_html__( 'Upload site sticky logo', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Sticky Logo Height
$settings = array(
	'id'			=> 'sticky-logo-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Header Sticky Logo Height', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set your maximum height of your Sticky logo. Here no need to put dimension units like px, em etc. Example 50', 'wiguard' ),
	'default'		=> '60',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mobile Logo
$settings = array(
	'id'			=> 'mobile-logo',
	'type'			=> 'image',
	'title'			=> esc_html__( 'Mobile Logo', 'wiguard' ),
	'description'	=> esc_html__( 'Upload site mobile logo', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Header Mobile Logo Height
$settings = array(
	'id'			=> 'mobile-logo-height',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Header Mobile Logo Height', 'wiguard' ),
	'description'	=> esc_html__( 'Here you can set your maximum height of your mobile logo. Here no need to put dimension units like px, em etc. Example 50', 'wiguard' ),
	'default'		=> '50',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );