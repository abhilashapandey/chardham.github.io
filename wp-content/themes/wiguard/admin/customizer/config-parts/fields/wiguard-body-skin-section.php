<?php

//Body Background Settings
$settings = array(
	'id'			=> 'body-background',
	'type'			=> 'background',
	'title'			=> esc_html__( 'Body Background Settings', 'wiguard' ),
	'description'	=> esc_html__( 'This is settings for body background with image, color, etc.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );