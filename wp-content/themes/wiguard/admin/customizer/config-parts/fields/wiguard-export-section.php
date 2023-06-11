<?php

//Export Theme Option
$settings = array(
	'id'			=> 'export-theme-option',
	'type'			=> 'export',
	'title'			=> esc_html__( 'Export Theme Option', 'wiguard' ),
	'description'	=> esc_html__( 'This is the option to export theme option values.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );