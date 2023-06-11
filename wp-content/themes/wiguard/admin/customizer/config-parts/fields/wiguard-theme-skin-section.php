<?php

//Theme Color
$settings = array(
	'id'			=> 'theme-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Theme Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose theme color.', 'wiguard' ),
	'default'		=> '#e8c020',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Secondary Color
$settings = array(
	'id'			=> 'secondary-color',
	'type'			=> 'color',
	'title'			=> esc_html__( 'Secondary Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose secondary color. This option for switch theme to gradient mode. If leave this color to empty, Single color will appear as theme color.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//General Links Color
$settings = array(
	'id'			=> 'theme-link-color',
	'type'			=> 'link',
	'title'			=> esc_html__( 'General Links Color', 'wiguard' ),
	'description'	=> esc_html__( 'Choose theme color.', 'wiguard' ),
	'default'		=> array(
		'regular'	=> '#e8c020',
		'hover'		=> '#fc7223',
		'active'	=> '#fc7223'
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );