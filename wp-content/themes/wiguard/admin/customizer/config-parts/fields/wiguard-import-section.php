<?php

//Import Theme Option
$settings = array(
	'id'			=> 'import-theme-option',
	'type'			=> 'import',
	'title'			=> esc_html__( 'Import Theme Option', 'wiguard' ),
	'description'	=> esc_html__( 'This is the option to import theme option value which given from theme authors/documentation/demo import.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );