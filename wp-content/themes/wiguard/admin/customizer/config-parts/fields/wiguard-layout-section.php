<?php

//Page Layout
$settings = array(
	'id'			=> 'page-layout',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Page Layout', 'wiguard' ),
	'description'	=> esc_html__( 'Choose page layout.', 'wiguard' ),
	'choices'		=> array(
		'boxed'		=> esc_html__( 'Boxed', 'wiguard' ),
		'wide'		=> esc_html__( 'Wide', 'wiguard' )
	),
	'default'		=> 'wide',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Site Width
$settings = array(
	'id'			=> 'site-width',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Site Width', 'wiguard' ),
	'description'	=> esc_html__( 'Set the site width here. Here No need to specify units like px, em, etc.. Example 1200', 'wiguard' ),
	'default'		=> '1170',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Page Content Padding
$settings = array(
	'id'			=> 'page-content-padding',
	'type'			=> 'dimension',
	'title'			=> esc_html__( 'Page Content Padding', 'wiguard' ),
	'description'	=> esc_html__( 'Set the top/right/bottom/left padding of page content. Here No need to specify units like px, em, etc.. Example 10 10 10 10', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );