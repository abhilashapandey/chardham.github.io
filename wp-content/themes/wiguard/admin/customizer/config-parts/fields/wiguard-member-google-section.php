<?php

//Google Client ID
$settings = array(
	'id'			=> 'social-google-client-id',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Google Client ID', 'wiguard' ),
	'description'	=> esc_html__( 'Set google login client id for login via google. You can refer here: ', 'wiguard' ) . 'https://console.developers.google.com/',
	'default'		=> ''
);
WiguardCustomizerConfig::buildFields( $settings );

//Google Client Secret
$settings = array(
	'id'			=> 'social-google-client-secret',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Google Client Secret', 'wiguard' ),
	'description'	=> esc_html__( 'Set google login client secret for login via google.', 'wiguard' ),
	'default'		=> ''
);
WiguardCustomizerConfig::buildFields( $settings );

//Google Redirect
$settings = array(
	'id'			=> 'social-google-redirect',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Google Login Redirect URL', 'wiguard' ),
	'description'	=> esc_html__( 'Set google login redirect url.', 'wiguard' ),
	'default'		=> ''
);
WiguardCustomizerConfig::buildFields( $settings );