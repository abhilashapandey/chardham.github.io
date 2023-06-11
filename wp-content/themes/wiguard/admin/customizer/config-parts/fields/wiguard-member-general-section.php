<?php

//Login/Signin Text
$settings = array(
	'id'			=> 'login-text',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Login/Signin Text', 'wiguard' ),
	'description'	=> esc_html__( 'Enter sign in text as per you choice.', 'wiguard' ),
	'default'		=> esc_html__( 'Login/Signin', 'wiguard' ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Logged Prefix Text
$settings = array(
	'id'			=> 'logged-text',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Logged Prefix Text', 'wiguard' ),
	'description'	=> esc_html__( 'Enter logged prefix text.', 'wiguard' ),
	'default'		=> esc_html__( 'Hello!', 'wiguard' ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Signout Prefix Text
$settings = array(
	'id'			=> 'signout-text',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Signout Text', 'wiguard' ),
	'description'	=> esc_html__( 'Enter signout text.', 'wiguard' ),
	'default'		=> esc_html__( 'Signout', 'wiguard' ),
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Google Login Option
$settings = array(
	'id'			=> 'google-logins-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Google Login Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable google login option.', 'wiguard' ),
	'default'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Facebook Login Option
$settings = array(
	'id'			=> 'facebook-logins-opt',
	'type'			=> 'toggle',
	'title'			=> esc_html__( 'Facebook Login Option', 'wiguard' ),
	'description'	=> esc_html__( 'Enable/Disable facebook login option.', 'wiguard' ),
	'default'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Admin Email Id
$settings = array(
	'id'			=> 'admin-email-id',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Admin Email Id', 'wiguard' ),
	'description'	=> esc_html__( 'Enter valid admin email for sending update emails of every process. If any user change their password, Then this will send a copy with this email too.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );

//Login Form Description
$settings = array(
	'id'			=> 'login-description',
	'type'			=> 'textarea',
	'title'			=> esc_html__( 'Login Form Description', 'wiguard' ),
	'description'	=> esc_html__( 'You can paste shortcode here. Just display the description on login form.', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 0
);
WiguardCustomizerConfig::buildFields( $settings );