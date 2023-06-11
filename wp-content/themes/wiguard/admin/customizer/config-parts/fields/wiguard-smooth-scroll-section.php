<?php

//Smooth Scroll Option
$settings = array(
	'id'			=> 'smooth-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Smooth Scroll Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable to append smooth scroll js to website.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Scroll Time
$settings = array(
	'id'			=> 'scroll-time',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Scroll Time', 'wiguard' ),
	'description'	=> esc_html__( 'Enter smooth scroll time in milliseconds. Example 600', 'wiguard' ),
	'default'		=> '600',
	'required'		=> array( 'smooth-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Scroll Distance
$settings = array(
	'id'			=> 'scroll-distance',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Scroll Distance', 'wiguard' ),
	'description'	=> esc_html__( 'Enter smooth scroll distance in value. Example 40', 'wiguard' ),
	'default'		=> '40',
	'required'		=> array( 'smooth-opt', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );