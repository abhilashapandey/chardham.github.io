<?php

//Maintenance Mode Option
$settings = array(
	'id'			=> 'maintenance-mode',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Maintenance Mode Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable maintenance mode.', 'wiguard' ),
	'default'		=> 0,
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Maintenance Type
$settings = array(
	'id'			=> 'maintenance-type',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Maintenance Type', 'wiguard' ),
	'description'	=> esc_html__( 'Select maintenance mode page coming soon or maintenance.', 'wiguard' ),
	'choices'		=> array(
		'cs'		=> esc_html__( 'Coming Soon', 'wiguard' ),
		'mn'		=> esc_html__( 'Maintenance', 'wiguard' ),
		'cus'		=> esc_html__( 'Custom', 'wiguard' )
	),
	'default'		=> 'cs',
	'required'		=> array( 'maintenance-mode', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Maintenance Custom Page
$settings = array(
	'id'			=> 'maintenance-custom',
	'type'			=> 'pages',
	'title'			=> esc_html__( 'Maintenance Custom Page', 'wiguard' ),
	'description'	=> esc_html__( 'Enter service slug for register custom post type.', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'maintenance-mode', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Phone Number
$settings = array(
	'id'			=> 'maintenance-phone',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Phone Number', 'wiguard' ),
	'description'	=> esc_html__( 'Enter phone number shown on when maintenance mode actived', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'maintenance-mode', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Email Id
$settings = array(
	'id'			=> 'maintenance-email',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Email Id', 'wiguard' ),
	'description'	=> esc_html__( 'Enter email id shown on when maintenance mode actived', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'maintenance-mode', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Address
$settings = array(
	'id'			=> 'maintenance-address',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Address', 'wiguard' ),
	'description'	=> esc_html__( 'Place here your address and info', 'wiguard' ),
	'default'		=> '',
	'required'		=> array( 'maintenance-mode', '=', 1 ),
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );