<?php

//RTL Enable/Disable
$settings = array(
	'id'			=> 'rtl',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'RTL Enable/Disable', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable RTL to change theme right to left view.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );