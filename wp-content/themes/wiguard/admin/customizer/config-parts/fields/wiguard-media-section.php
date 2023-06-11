<?php

//Grid Large Size
$settings = array(
	'id'			=> 'wiguard-grid-large',
	'type'			=> 'hw',
	'title'			=> esc_html__( 'Grid Large Size', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimensions px, em, etc.. This image used in gallery large grid. If you don\'t want this size means just leave this empty. Default 440 x 260', 'wiguard' ),
	'default'		=> array(
		'width'   => '440', 
		'height'  => '260'
	),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Grid Medium Size
$settings = array(
	'id'			=> 'wiguard-grid-large',
	'type'			=> 'hw',
	'title'			=> esc_html__( 'Grid Medium Size', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimensions px, em, etc.. This image used in gallery medium grid. If you don\'t want this size means just leave this empty. Default 390 x 231', 'wiguard' ),
	'default'		=> array(
		'width'   => '390', 
		'height'  => '231'
	),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Grid Small Size
$settings = array(
	'id'			=> 'wiguard-grid-small',
	'type'			=> 'hw',
	'title'			=> esc_html__( 'Grid Small Size', 'wiguard' ),
	'description'	=> esc_html__( 'Here no need to put dimensions px, em, etc.. This image used in gallery small grid. If you don\'t want this size means just leave this empty. Default 220 x 130', 'wiguard' ),
	'default'		=> array(
		'width'   => '220', 
		'height'  => '130'
	),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Team Medium Size
$settings = array(
	'id'			=> 'wiguard-team-medium',
	'type'			=> 'hw',
	'title'			=> esc_html__( 'Team Medium Size', 'wiguard' ),
	'description'	=> esc_html__( 'This image used in team shorcode. If you don\'t want this size means just leave this empty. Default 300 x 300', 'wiguard' ),
	'default'		=> array(
		'width'   => '300', 
		'height'  => '300'
	),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );