<?php

//Facebook App ID
$settings = array(
	'id'			=> 'social-facebook-app-id',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Facebook App ID', 'wiguard' ),
	'description'	=> esc_html__( 'Set facebook login app id for login via facebook. You can refer here: ', 'wiguard' ) . 'https://developers.facebook.com/apps/',
	'default'		=> ''
);
WiguardCustomizerConfig::buildFields( $settings );

//Facebook Client Secret
$settings = array(
	'id'			=> 'social-facebook-app-secret',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Facebook Client Secret', 'wiguard' ),
	'description'	=> esc_html__( 'Set facebook login client secret for login via facebook.', 'wiguard' ),
	'default'		=> ''
);
WiguardCustomizerConfig::buildFields( $settings );

//Facebook Redirect
$settings = array(
	'id'			=> 'social-facebook-redirect',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Facebook Login Redirect URL', 'wiguard' ),
	'description'	=> esc_html__( 'Set facebook login redirect url.', 'wiguard' ),
	'default'		=> ''
);
WiguardCustomizerConfig::buildFields( $settings );