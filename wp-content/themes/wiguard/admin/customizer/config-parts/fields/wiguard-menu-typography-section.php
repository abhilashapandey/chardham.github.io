<?php

//Main Menu Typography
$settings = array(
	'id'			=> 'main-menu-typography',
	'type'			=> 'fonts',
	'title'			=> esc_html__( 'Main Menu Typography', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for main menu typography', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Dropdown Menu Typography
$settings = array(
	'id'			=> 'dropdown-menu-typography',
	'type'			=> 'fonts',
	'title'			=> esc_html__( 'Dropdown Menu Typography', 'wiguard' ),
	'description'	=> esc_html__( 'This is the setting for dropdown menu typography', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );