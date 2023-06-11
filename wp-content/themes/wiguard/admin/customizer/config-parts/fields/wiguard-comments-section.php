<?php

//Comments Type
$settings = array(
	'id'			=> 'comments-type',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Comments Type', 'wiguard' ),
	'description'	=> esc_html__( 'This option will be showing comment like facebook or default wordpress.', 'wiguard' ),
	'choices'		=> array(
		'wp' 	=> esc_html__( 'WordPress Comment', 'wiguard' ),
		'fb'  	=> esc_html__( 'Facebook Comment', 'wiguard' )
	),
	'default'		=> 'wp',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Comments Like
$settings = array(
	'id'			=> 'comments-like',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Comments Like', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable to show or hide comments likes to single post comments.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'comments-type', '=', 'wp' ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Comments Share
$settings = array(
	'id'			=> 'comments-share',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Comments Share', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable to show or hide comments share to single post comments.', 'wiguard' ),
	'default'		=> 0,
	'required'		=> array( 'comments-type', '=', 'wp' ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Facebook Developer API
$settings = array(
	'id'			=> 'fb-developer-key',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Facebook Developer API', 'wiguard' ),
	'description'	=> esc_html__( 'Enter facebook developer API key.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'comments-type', '=', 'fb' ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Number of Comments
$settings = array(
	'id'			=> 'fb-comments-number',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Number of Comments', 'wiguard' ),
	'description'	=> esc_html__( 'Enter number of comments to display.', 'wiguard' ),
	'default'		=> '5',
	'required'		=> array( 'comments-type', '=', 'fb' ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );