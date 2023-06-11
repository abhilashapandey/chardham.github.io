<?php

//Widgets Title Typography
$settings = array(
	'id'			=> 'widgets-title',
	'type'			=> 'fonts',
	'title'			=> esc_html__( 'Widgets Title Typography', 'wiguard' ),
	'description'	=> esc_html__( 'Specify the widget title typography properties.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Widgets Content Typography
$settings = array(
	'id'			=> 'widgets-content',
	'type'			=> 'fonts',
	'title'			=> esc_html__( 'Widgets Content Typography', 'wiguard' ),
	'description'	=> esc_html__( 'Specify the widget content typography properties.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );