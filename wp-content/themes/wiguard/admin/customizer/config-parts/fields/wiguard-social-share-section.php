<?php

//Post Social Shares
$settings = array(
	'id'			=> 'post-social-shares',
	'type'			=> 'multicheck',
	'title'			=> esc_html__( 'Post Social Shares', 'wiguard' ),
	'description'	=> esc_html__( 'Actived social items only showing post share list.', 'wiguard' ),
	'default'		=> '',
	'items' 		=> array(
		'fb'		=> esc_html__( 'Facebook', 'wiguard' ),
		'twitter'	=> esc_html__( 'Twitter', 'wiguard' ),
		'linkedin'	=> esc_html__( 'Linkedin', 'wiguard' ),
		'pinterest'	=> esc_html__( 'Pinterest', 'wiguard' )
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Comments Social Shares
$settings = array(
	'id'			=> 'comments-social-shares',
	'type'			=> 'multicheck',
	'title'			=> esc_html__( 'Comments Social Shares', 'wiguard' ),
	'description'	=> esc_html__( 'Actived social items only showing comments share list.', 'wiguard' ),
	'default'		=> '',
	'items' 		=> array(
		'fb'		=> esc_html__( 'Facebook', 'wiguard' ),
		'twitter'	=> esc_html__( 'Twitter', 'wiguard' ),
		'linkedin'	=> esc_html__( 'Linkedin', 'wiguard' ),
		'pinterest'	=> esc_html__( 'Pinterest', 'wiguard' )
	),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );