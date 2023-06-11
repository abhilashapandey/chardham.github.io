<?php

//Search Content
$settings = array(
	'id'			=> 'search-content',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Search Content', 'wiguard' ),
	'description'	=> esc_html__( 'Choose this option for search content from site.', 'wiguard' ),
	'choices'		=> array(
		'all'		=> esc_html__( 'All', 'wiguard' ),
		'post'		=> esc_html__( 'Post Content Only', 'wiguard' ),
		'page'		=> esc_html__( 'Page Content Only', 'wiguard' )
	),
	'default'		=> 'all',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );