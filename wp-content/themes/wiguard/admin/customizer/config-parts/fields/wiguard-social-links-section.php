<?php

//Social Iocns Type
$settings = array(
	'id'			=> 'social-icons-type',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Social Iocns Type', 'wiguard' ),
	'description'	=> esc_html__( 'Choose your social icons type.', 'wiguard' ),
	'default'		=> 'circled',
	'items' 		=> array(
		'squared'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/social-icons/1.png',
		'rounded'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/social-icons/2.png',
		'circled'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/social-icons/3.png'		
	),
	'cols'			=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Footer Bottom Social Iocns Type
$settings = array(
	'id'			=> 'social-icons-type-footer',
	'type'			=> 'radioimage',
	'title'			=> esc_html__( 'Footer Bottom Social Iocns Type', 'wiguard' ),
	'description'	=> esc_html__( 'Choose footer bottom social icons type.', 'wiguard' ),
	'default'		=> 'circled',
	'items' 		=> array(
		'squared'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/social-icons/1.png',
		'rounded'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/social-icons/2.png',
		'circled'	=> WIGUARD_ADMIN_URL . '/customizer/assets/images/social-icons/3.png'		
	),
	'cols'			=> '1',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Social Icons Fore
$settings = array(
	'id'			=> 'social-icons-fore',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Social Icons Fore', 'wiguard' ),
	'description'	=> esc_html__( 'Social icons fore color settings.', 'wiguard' ),
	'choices'		=> array(
		'black'		=> esc_html__( 'Black', 'wiguard' ),
		'white'		=> esc_html__( 'White', 'wiguard' ),
		'own'		=> esc_html__( 'Own Color', 'wiguard' )
	),
	'default'		=> 'white',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Social Icons Fore
$settings = array(
	'id'			=> 'social-icons-hfore',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Social Icons Fore Hover', 'wiguard' ),
	'description'	=> esc_html__( 'Social icons fore hover color settings.', 'wiguard' ),
	'choices'		=> array(
		'h-black'	=> esc_html__( 'Black', 'wiguard' ),
		'h-white'	=> esc_html__( 'White', 'wiguard' ),
		'h-own'		=> esc_html__( 'Own Color', 'wiguard' )
	),
	'default'		=> 'h-own',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Social Icons Background
$settings = array(
	'id'			=> 'social-icons-bg',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Social Icons Background', 'wiguard' ),
	'description'	=> esc_html__( 'Social icons background color settings.', 'wiguard' ),
	'choices'		=> array(
		'bg-black'		=> esc_html__( 'Black', 'wiguard' ),
		'bg-white'		=> esc_html__( 'White', 'wiguard' ),
		'bg-light'		=> esc_html__( 'RGBA Light', 'wiguard' ),
		'bg-dark'		=> esc_html__( 'RGBA Dark', 'wiguard' ),
		'bg-own'		=> esc_html__( 'Own Color', 'wiguard' ),
		'bg-transparent'=> esc_html__( 'Transparent', 'wiguard' )
	),
	'default'		=> 'bg-own',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Social Icons Background Hover
$settings = array(
	'id'			=> 'social-icons-hbg',
	'type'			=> 'select',
	'title'			=> esc_html__( 'Social Icons Background Hover', 'wiguard' ),
	'description'	=> esc_html__( 'Social icons background hover color settings.', 'wiguard' ),
	'choices'		=> array(
		'hbg-black'		=> esc_html__( 'Black', 'wiguard' ),
		'hbg-white'		=> esc_html__( 'White', 'wiguard' ),
		'hbg-light'		=> esc_html__( 'RGBA Light', 'wiguard' ),
		'hbg-dark'		=> esc_html__( 'RGBA Dark', 'wiguard' ),
		'hbg-own'		=> esc_html__( 'Own Color', 'wiguard' ),
		'hbg-theme'		=> esc_html__( 'Theme Color', 'wiguard' ),
		'hbg-transparent'		=> esc_html__( 'Transparent', 'wiguard' )
	),
	'default'		=> 'hbg-white',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Facebook
$settings = array(
	'id'			=> 'social-fb',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Facebook', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the facebook link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Twitter
$settings = array(
	'id'			=> 'social-twitter',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Twitter', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the twitter link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Instagram
$settings = array(
	'id'			=> 'social-instagram',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Instagram', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the instagram link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Pinterest
$settings = array(
	'id'			=> 'social-pinterest',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Pinterest', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the pinterest link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Youtube
$settings = array(
	'id'			=> 'social-youtube',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Youtube', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the youtube link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Vimeo
$settings = array(
	'id'			=> 'social-vimeo',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Vimeo', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the vimeo link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Soundcloud
$settings = array(
	'id'			=> 'social-soundcloud',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Soundcloud', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the soundcloud link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Yahoo
$settings = array(
	'id'			=> 'social-yahoo',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Yahoo', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the yahoo link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Tumblr
$settings = array(
	'id'			=> 'social-tumblr',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Tumblr', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the tumblr link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Mailto
$settings = array(
	'id'			=> 'social-mailto',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Mailto', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the mailto link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Flickr
$settings = array(
	'id'			=> 'social-flickr',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Flickr', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the flickr link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//Dribbble
$settings = array(
	'id'			=> 'social-dribbble',
	'type'			=> 'text',
	'title'			=> esc_html__( 'Dribbble', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the dribbble link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//LinkedIn
$settings = array(
	'id'			=> 'social-linkedin',
	'type'			=> 'text',
	'title'			=> esc_html__( 'LinkedIn', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the linkedin link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );

//RSS
$settings = array(
	'id'			=> 'social-rss',
	'type'			=> 'text',
	'title'			=> esc_html__( 'RSS', 'wiguard' ),
	'description'	=> esc_html__( 'Enter the rss link. If no link means just leave it blank', 'wiguard' ),
	'default'		=> '',
	'refresh'		=> 1
);
WiguardCustomizerConfig::buildFields( $settings );