<?php

/*
 * Customizer Header/Footer Pre-Defined Layouts
 */
 
if( is_customize_preview() ){
	add_action( 'init', 'wiguard_demo_header', 10 );
	add_action( 'customize_save_after', 'wiguard_demo_header_save' );
	function wiguard_demo_header_save(){ wiguard_demo_header( 'save' ); }
}
function wiguard_demo_header( $stat = '' ){

	$wiguard_options = '';
	if( is_customize_preview() ){
		$wiguard_mod_t = get_option( 'wiguard_theme_options_t');
		$wiguard_options = !empty( $wiguard_mod_t ) ? $wiguard_mod_t : get_option( 'wiguard_theme_options_new');
	}

	$header_items = $topbar_items = '';
	$header_template = isset( $wiguard_options['header-template'] ) && $wiguard_options['header-template'] ? $wiguard_options['header-template'] : '';
	
	//Header 1
	if( $header_template == '1' ) {
		
		$header_items = '{"Normal":{"header-topbar":"Top Bar","header-logo":"Logo Section","header-nav":"Nav Bar"},"Sticky":{},"disabled":{}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_topbar_items = '{"disabled":{"header-topbar-text-2":"Custom Text 2","header-topbar-text-3":"Custom Text 3","header-topbar-search":"Search","header-cart":"Cart","header-topbar-date":"Date","header-topbar-search-toggle":"Search Toggle","header-topbar-menu":"Top Bar Menu","header-phone":"Phone Number","header-address":"Address Text","header-email":"Email"},"Left":{"header-topbar-text-1":"Custom Text 1"},"Center":{},"Right":{"header-topbar-social":"Social"}}';
		$wiguard_options['header-topbar-items'] = json_decode( $header_topbar_items, true );

		$header_logobar_items = '{"disabled":{"header-logobar-social":"Social","header-logobar-search":"Search","header-logobar-secondary-toggle":"Secondary Toggle","header-phone":"Phone Number","header-address":"Address Text","header-email":"Email","header-logobar-menu":"Main Menu","header-logobar-search-toggle":"Search Toggle","header-logobar-text-1":"Custom Text 1","header-logobar-text-2":"Custom Text 2","header-logobar-text-3":"Custom Text 3","header-cart":"Cart"},"Left":{"header-logobar-logo":"Logo","header-logobar-sticky-logo":"Sticky Logo"},"Center":{},"Right":{}}';
		$wiguard_options['header-logobar-items'] = json_decode( $header_logobar_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo","header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-address":"Address Text","header-email":"Email","header-cart":"Cart"},"Left":{"header-navbar-menu":"Main Menu"},"Center":{},"Right":{"header-navbar-secondary-toggle":"Secondary Toggle","header-navbar-search-toggle":"Search Toggle"}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );
		
		$wiguard_options['header-topbar-text-1'] = isset( $wiguard_options['header-topbar-text-1'] ) && !empty( $wiguard_options['header-topbar-text-1'] ) ? $wiguard_options['header-topbar-text-1'] : 'Welcome to our website';
		$wiguard_options['social-icons-type'] = isset( $wiguard_options['social-icons-type'] ) ? 'squared' : '';
		
	//Header 2
	}elseif( $header_template == '2' ) {
		$header_items = '{"Normal":{"header-topbar":"Top Bar","header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-logo":"Logo Section"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );

		$header_topbar_items = '{"disabled":{"header-topbar-text-2":"Custom Text 2","header-topbar-text-3":"Custom Text 3","header-topbar-search":"Search","header-cart":"Cart","header-topbar-date":"Date","header-topbar-search-toggle":"Search Toggle","header-topbar-menu":"Top Bar Menu","header-topbar-social":"Social"},"Left":{"header-topbar-text-1":"Custom Text 1"},"Center":{},"Right":{"header-address":"Address Text","header-phone":"Phone Number","header-email":"Email"}}';
		$wiguard_options['header-topbar-items'] = json_decode( $header_topbar_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-address":"Address Text","header-email":"Email","header-cart":"Cart"},"Left":{"header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo"},"Center":{},"Right":{"header-navbar-menu":"Main Menu","header-navbar-search-toggle":"Search Toggle","header-navbar-secondary-toggle":"Secondary Toggle"}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );
		
		$wiguard_options['header-topbar-text-1'] = isset( $wiguard_options['header-topbar-text-1'] ) && !empty( $wiguard_options['header-topbar-text-1'] ) ? $wiguard_options['header-topbar-text-1'] : 'Welcome to our website';
		$wiguard_options['header-phone-text'] = isset( $wiguard_options['header-phone-text'] ) && !empty( $wiguard_options['header-phone-text'] ) ? $wiguard_options['header-phone-text'] : '1234567890';
		$wiguard_options['header-address-text'] = isset( $wiguard_options['header-address-text'] ) && !empty( $wiguard_options['header-address-text'] ) ? $wiguard_options['header-address-text'] : 'Street name, City name';
		$wiguard_options['header-email-text'] = isset( $wiguard_options['header-email-text'] ) && !empty( $wiguard_options['header-email-text'] ) ? $wiguard_options['header-email-text'] : 'info@website.com';
		
	//Header 3
	}elseif( $header_template == '3' ) {
		$header_items = '{"Normal":{"header-logo":"Logo Section","header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-topbar":"Top Bar"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_logobar_items = '{"disabled":{"header-logobar-search":"Search","header-phone":"Phone Number","header-address":"Address Text","header-logobar-search-toggle":"Search Toggle","header-email":"Email","header-logobar-text-1":"Custom Text 1","header-logobar-text-2":"Custom Text 2","header-logobar-text-3":"Custom Text 3","header-logobar-menu":"Main Menu","header-cart":"Cart"},"Left":{"header-logobar-social":"Social"},"Center":{"header-logobar-logo":"Logo","header-logobar-sticky-logo":"Sticky Logo"},"Right":{"header-logobar-secondary-toggle":"Secondary Toggle"}}';
		$wiguard_options['header-logobar-items'] = json_decode( $header_logobar_items, true );

		$header_navbar_items = '{"disabled":{"header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-address":"Address Text","header-navbar-logo":"Logo","header-email":"Email","header-cart":"Cart","header-navbar-secondary-toggle":"Secondary Toggle","header-navbar-sticky-logo":"Stikcy Logo"},"Left":{},"Center":{"header-navbar-menu":"Main Menu","header-navbar-search-toggle":"Search Toggle"},"Right":{}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );
		
	//Header 5
	}elseif( $header_template == '4' ) {
		$header_items = '{"Normal":{"header-logo":"Logo Section","header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-topbar":"Top Bar"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_logobar_items = '{"disabled":{"header-logobar-search":"Search","header-phone":"Phone Number","header-logobar-text-1":"Custom Text 1","header-address":"Address Text","header-logobar-search-toggle":"Search Toggle","header-email":"Email","header-logobar-text-2":"Custom Text 2","header-logobar-social":"Social","header-logobar-text-3":"Custom Text 3","header-logobar-menu":"Main Menu","header-logobar-secondary-toggle":"Secondary Toggle","header-cart":"Cart"},"Left":{"header-logobar-sticky-logo":"Sticky Logo","header-logobar-logo":"Logo"},"Center":{},"Right":{"multi-info":"Address, Phone, Email"}}';
		$wiguard_options['header-logobar-items'] = json_decode( $header_logobar_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-address":"Address Text","header-navbar-logo":"Logo","header-email":"Email","header-cart":"Cart","header-navbar-secondary-toggle":"Secondary Toggle","header-navbar-sticky-logo":"Stikcy Logo"},"Left":{"header-navbar-menu":"Main Menu"},"Center":{},"Right":{"header-navbar-search-toggle":"Search Toggle"}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );
		
		$wiguard_options['header-address-label'] = isset( $wiguard_options['header-address-label'] ) && !empty( $wiguard_options['header-address-label'] ) ? $wiguard_options['header-address-label'] : 'Street';
		$wiguard_options['header-phone-label'] = isset( $wiguard_options['header-phone-label'] ) && !empty( $wiguard_options['header-phone-label'] ) ? $wiguard_options['header-phone-label'] : 'Contact';
		$wiguard_options['header-email-label'] = isset( $wiguard_options['header-email-label'] ) && !empty( $wiguard_options['header-email-label'] ) ? $wiguard_options['header-email-label'] : 'Email';
		$wiguard_options['header-address-text'] = isset( $wiguard_options['header-address-text'] ) && !empty( $wiguard_options['header-address-text'] ) ? $wiguard_options['header-address-text'] : '123, Snow Street, CA';
		$wiguard_options['header-phone-text'] = isset( $wiguard_options['header-phone-text'] ) && !empty( $wiguard_options['header-phone-text'] ) ? $wiguard_options['header-phone-text'] : '+123 456 789';
		$wiguard_options['header-email-text'] = isset( $wiguard_options['header-email-text'] ) && !empty( $wiguard_options['header-email-text'] ) ? $wiguard_options['header-email-text'] : 'info@email.com';
	
	//Header 6
	}elseif( $header_template == '5' ) {
		$header_items = '{"Normal":{"header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-logo":"Logo Section","header-topbar":"Top Bar"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-menu":"Main Menu","header-navbar-search":"Search","header-phone":"Phone Number","header-address":"Address Text","header-navbar-search-toggle":"Search Toggle","header-email":"Email","header-cart":"Cart"},"Left":{"header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo"},"Center":{},"Right":{"header-navbar-secondary-toggle":"Secondary Toggle"}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );
		
	//Header 7
	}elseif( $header_template == '6' ) {
		$header_items = '{"Normal":{"header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-logo":"Logo Section","header-topbar":"Top Bar"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-navbar-secondary-toggle":"Secondary Toggle","header-address":"Address Text","header-email":"Email"},"Left":{"header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo"},"Center":{},"Right":{"header-navbar-menu":"Main Menu","header-cart":"Cart","header-navbar-search-toggle":"Search Toggle"}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );
		
	//Header 8
	}elseif( $header_template == '7' ) {
		$header_items = '{"Normal":{"header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-logo":"Logo Section","header-topbar":"Top Bar"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-navbar-secondary-toggle":"Secondary Toggle","header-address":"Address Text","header-email":"Email"},"Left":{"header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo"},"Center":{},"Right":{"header-navbar-menu":"Main Menu","header-cart":"Cart","header-navbar-search-toggle":"Search Toggle"}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );

	//Header 9
	}elseif( $header_template == '8' ) {
		$header_items = '{"Normal":{"header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-logo":"Logo Section","header-topbar":"Top Bar"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-navbar-secondary-toggle":"Secondary Toggle","header-address":"Address Text","header-email":"Email"},"Left":{"header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo"},"Center":{},"Right":{"header-navbar-menu":"Main Menu","header-cart":"Cart","header-navbar-search-toggle":"Search Toggle"}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );
	
	//Header 10
	}elseif( $header_template == '9' ) {
		$header_items = '{"Normal":{"header-logo":"Logo Section","header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-topbar":"Top Bar"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_logobar_items = '{"disabled":{"header-logobar-search":"Search","header-phone":"Phone Number","header-address":"Address Text","header-logobar-search-toggle":"Search Toggle","header-email":"Email","header-logobar-text-2":"Custom Text 2","header-logobar-social":"Social","header-logobar-text-3":"Custom Text 3","header-logobar-menu":"Main Menu","header-logobar-secondary-toggle":"Secondary Toggle","header-cart":"Cart","header-logobar-text-1":"Custom Text 1"},"Left":{},"Center":{"header-logobar-logo":"Logo","header-logobar-sticky-logo":"Sticky Logo"},"Right":{}}';
		$wiguard_options['header-logobar-items'] = json_decode( $header_logobar_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-navbar-secondary-toggle":"Secondary Toggle","header-address":"Address Text","header-email":"Email","header-cart":"Cart","header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo"},"Left":{},"Center":{"header-navbar-menu":"Main Menu","header-navbar-search-toggle":"Search Toggle"},"Right":{}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );
	
	//Header 11
	}elseif( $header_template == '10' ) {
		$header_items = '{"Normal":{"header-topbar":"Top Bar","header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-logo":"Logo Section"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_topbar_items = '{"disabled":{"header-topbar-text-2":"Custom Text 2","header-topbar-text-3":"Custom Text 3","header-topbar-search":"Search","header-cart":"Cart","header-topbar-date":"Date","header-topbar-search-toggle":"Search Toggle","header-topbar-menu":"Top Bar Menu","header-topbar-social":"Social"},"Left":{"header-topbar-text-1":"Custom Text 1"},"Center":{},"Right":{"header-address":"Address Text","header-phone":"Phone Number","header-email":"Email"}}';
		$wiguard_options['header-topbar-items'] = json_decode( $header_topbar_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-secondary-toggle":"Secondary Toggle","header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-address":"Address Text","header-email":"Email"},"Left":{"header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo"},"Center":{},"Right":{"header-navbar-menu":"Main Menu","header-cart":"Cart","header-navbar-search-toggle":"Search Toggle"}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );
		
		$wiguard_options['header-topbar-text-1'] = isset( $wiguard_options['header-topbar-text-1'] ) && !empty( $wiguard_options['header-topbar-text-1'] ) ? $wiguard_options['header-topbar-text-1'] : 'Welcome to our website';
		$wiguard_options['header-phone-text'] = isset( $wiguard_options['header-phone-text'] ) && !empty( $wiguard_options['header-phone-text'] ) ? $wiguard_options['header-phone-text'] : '1234567890';
		$wiguard_options['header-address-text'] = isset( $wiguard_options['header-address-text'] ) && !empty( $wiguard_options['header-address-text'] ) ? $wiguard_options['header-address-text'] : 'Street name, City name';
		$wiguard_options['header-email-text'] = isset( $wiguard_options['header-email-text'] ) && !empty( $wiguard_options['header-email-text'] ) ? $wiguard_options['header-email-text'] : 'info@website.com';
	
	//Header 12
	}elseif( $header_template == '11' ) {
		$header_items = '{"Normal":{"header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-topbar":"Top Bar","header-logo":"Logo Section"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-secondary-toggle":"Secondary Toggle","header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-address":"Address Text","header-email":"Email"},"Left":{"header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo"},"Center":{},"Right":{"header-navbar-menu":"Main Menu","header-navbar-search-toggle":"Search Toggle","header-cart":"Cart"}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );

	//Header 15
	}elseif( $header_template == '12' ) {
		$header_items = '{"Normal":{"header-logo":"Logo Section","header-nav":"Nav Bar"},"Sticky":{},"disabled":{"header-topbar":"Top Bar"}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_logobar_items = '{"disabled":{"header-logobar-search":"Search","header-logobar-search-toggle":"Search Toggle","header-email":"Email","header-logobar-text-2":"Custom Text 2","header-logobar-social":"Social","header-logobar-text-3":"Custom Text 3","header-logobar-menu":"Main Menu","header-logobar-secondary-toggle":"Secondary Toggle","header-cart":"Cart","header-logobar-text-1":"Custom Text 1"},"Left":{"header-phone":"Phone Number"},"Center":{"header-logobar-logo":"Logo","header-logobar-sticky-logo":"Sticky Logo"},"Right":{"header-address":"Address Text"}}';
		$wiguard_options['header-logobar-items'] = json_decode( $header_logobar_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-navbar-search":"Search","header-phone":"Phone Number","header-navbar-secondary-toggle":"Secondary Toggle","header-address":"Address Text","header-email":"Email","header-cart":"Cart","header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo"},"Left":{},"Center":{"header-navbar-menu":"Main Menu","header-navbar-search-toggle":"Search Toggle"},"Right":{}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );

	//Header 16
	}elseif( $header_template == '13' ) {
		$header_items = '{"Normal":{"header-topbar":"Top Bar","header-logo":"Logo Section","header-nav":"Nav Bar"},"Sticky":{},"disabled":{}}';
		$wiguard_options['header-items'] = json_decode( $header_items, true );
		
		$header_topbar_items = '{"disabled":{"header-topbar-text-2":"Custom Text 2","header-topbar-text-3":"Custom Text 3","header-topbar-search":"Search","header-cart":"Cart","header-topbar-date":"Date","header-topbar-search-toggle":"Search Toggle","header-topbar-menu":"Top Bar Menu","header-topbar-social":"Social"},"Left":{"header-topbar-text-1":"Custom Text 1"},"Center":{},"Right":{"header-address":"Address Text","header-phone":"Phone Number","header-email":"Email"}}';
		$wiguard_options['header-topbar-items'] = json_decode( $header_topbar_items, true );
		
		$header_logobar_items = '{"disabled":{"header-logobar-search":"Search","header-phone":"Phone Number","header-logobar-text-1":"Custom Text 1","header-address":"Address Text","header-logobar-search-toggle":"Search Toggle","header-email":"Email","header-logobar-text-2":"Custom Text 2","header-logobar-social":"Social","header-logobar-text-3":"Custom Text 3","header-logobar-menu":"Main Menu","header-logobar-secondary-toggle":"Secondary Toggle","header-cart":"Cart"},"Left":{"header-logobar-sticky-logo":"Sticky Logo","header-logobar-logo":"Logo"},"Center":{},"Right":{"multi-info":"Address, Phone, Email"}}';
		$wiguard_options['header-logobar-items'] = json_decode( $header_logobar_items, true );
		
		$header_navbar_items = '{"disabled":{"header-navbar-text-1":"Custom Text 1","header-navbar-text-2":"Custom Text 2","header-navbar-text-3":"Custom Text 3","header-navbar-social":"Social","header-phone":"Phone Number","header-address":"Address Text","header-email":"Email","header-cart":"Cart","header-navbar-search-toggle":"Search Toggle","header-navbar-secondary-toggle":"Secondary Toggle","header-navbar-logo":"Logo","header-navbar-sticky-logo":"Stikcy Logo"},"Left":{"header-navbar-menu":"Main Menu"},"Center":{},"Right":{"header-navbar-search":"Search"}}';
		$wiguard_options['header-navbar-items'] = json_decode( $header_navbar_items, true );
		
		$wiguard_options['header-address-label'] = isset( $wiguard_options['header-address-label'] ) && !empty( $wiguard_options['header-address-label'] ) ? $wiguard_options['header-address-label'] : 'Street';
		$wiguard_options['header-phone-label'] = isset( $wiguard_options['header-phone-label'] ) && !empty( $wiguard_options['header-phone-label'] ) ? $wiguard_options['header-phone-label'] : 'Contact';
		$wiguard_options['header-email-label'] = isset( $wiguard_options['header-email-label'] ) && !empty( $wiguard_options['header-email-label'] ) ? $wiguard_options['header-email-label'] : 'Email';
		$wiguard_options['header-address-text'] = isset( $wiguard_options['header-address-text'] ) && !empty( $wiguard_options['header-address-text'] ) ? $wiguard_options['header-address-text'] : '123, Snow Street, CA';
		$wiguard_options['header-phone-text'] = isset( $wiguard_options['header-phone-text'] ) && !empty( $wiguard_options['header-phone-text'] ) ? $wiguard_options['header-phone-text'] : '+123 456 789';
		$wiguard_options['header-email-text'] = isset( $wiguard_options['header-email-text'] ) && !empty( $wiguard_options['header-email-text'] ) ? $wiguard_options['header-email-text'] : 'info@email.com';

	//Header 17
	}elseif( $header_template == 'vertical' ) {
		$wiguard_options['header-type'] = 'left-sticky';
		$header_fixed_items = '{"disabled":{"header-fixed-text-1":"Custom Text 1","header-fixed-text-2":"Custom Text 2","header-fixed-social":"Social"},"Top":{"header-fixed-logo":"Logo"},"Middle":{"header-fixed-menu":"Menu"},"Bottom":{"header-fixed-search":"Search Form"}}';
		$wiguard_options['header-fixed-items'] = json_decode( $header_fixed_items, true );
	}
	
	if( $header_template != 'vertical' && $header_template != 'custom' ) $wiguard_options['header-type'] = 'default';
	
	//Footer Template
	$footer_template = isset( $wiguard_options['footer-template'] ) && $wiguard_options['footer-template'] ? $wiguard_options['footer-template'] : '';
	if( $footer_template == '1' ) {
		$wiguard_options['footer-top-layout'] = '12';
		$wiguard_options['footer-top-sidebar-1'] = 'sidebar-6';
		$wiguard_options['footer-top-container'] = 'wide';
		$wiguard_options['footer-middle-sidebar-1'] = 'sidebar-2';
		
		$footer_items = '{"Enabled":{"footer-top":"Footer Top","footer-middle":"Footer Middle","footer-bottom":"Footer Bottom"},"disabled":{}}';
		$wiguard_options['footer-items'] = json_decode( $footer_items, true );
		
		$footer_bottom_items = '{"disabled":{"social":"Footer Social Links","widget":"Custom Widget"},"Left":[],"Center":{"menu":"Footer Menu","copyright":"Copyright Text"},"Right":[]}';
		$wiguard_options['footer-bottom-items'] = json_decode( $footer_bottom_items, true );
		
	}elseif( $footer_template == '2' ) {
		$wiguard_options['footer-bottom-container'] = 'boxed';
		$footer_items = '{"Enabled":{"footer-bottom":"Footer Bottom"},"disabled":{"footer-top":"Footer Top","footer-middle":"Footer Middle"}}';
		$wiguard_options['footer-items'] = json_decode( $footer_items, true );
		
		$footer_bottom_items = '{"disabled":{"widget":"Custom Widget","menu":"Footer Menu"},"Left":{"copyright":"Copyright Text"},"Center":[],"Right":{"social":"Footer Social Links"}}';
		$wiguard_options['footer-bottom-items'] = json_decode( $footer_bottom_items, true );
		
	}elseif( $footer_template == '3' ) {
		$wiguard_options['footer-middle-container'] = 'boxed';
		$wiguard_options['footer-middle-sidebar-1'] = 'sidebar-2';
		$wiguard_options['footer-middle-sidebar-2'] = 'sidebar-3';
		$wiguard_options['footer-middle-sidebar-3'] = 'sidebar-4';
		
		$footer_items = '{"Enabled":{"footer-middle":"Footer Middle","footer-bottom":"Footer Bottom"},"disabled":{"footer-top":"Footer Top"}}';
		$wiguard_options['footer-items'] = json_decode( $footer_items, true );
		
		$footer_bottom_items = '{"disabled":{"widget":"Custom Widget","menu":"Footer Menu","social":"Footer Social Links"},"Left":[],"Center":{"copyright":"Copyright Text"},"Right":[]}';
		$wiguard_options['footer-bottom-items'] = json_decode( $footer_bottom_items, true );
		
	}elseif( $footer_template == '4' ) {
		$wiguard_options['footer-middle-layout'] = '3-3-3-3';
		$wiguard_options['footer-middle-container'] = 'boxed';
		$wiguard_options['footer-middle-sidebar-1'] = 'sidebar-2';
		$wiguard_options['footer-middle-sidebar-2'] = 'sidebar-3';
		$wiguard_options['footer-middle-sidebar-3'] = 'sidebar-4';
		$wiguard_options['footer-middle-sidebar-4'] = 'sidebar-5';
		
		$footer_items = '{"Enabled":{"footer-middle":"Footer Middle","footer-bottom":"Footer Bottom"},"disabled":{"footer-top":"Footer Top"}}';
		$wiguard_options['footer-items'] = json_decode( $footer_items, true );
		
		$footer_bottom_items = '{"disabled":{"widget":"Custom Widget","menu":"Footer Menu","social":"Footer Social Links"},"Left":[],"Center":{"copyright":"Copyright Text"},"Right":[]}';
		$wiguard_options['footer-bottom-items'] = json_decode( $footer_bottom_items, true );
		
	}elseif( $footer_template == '5' ) {
		$wiguard_options['footer-middle-layout'] = '3-3-3-3';
		$wiguard_options['footer-middle-container'] = 'boxed';
		$wiguard_options['footer-middle-sidebar-1'] = 'sidebar-2';
		$wiguard_options['footer-middle-sidebar-2'] = 'sidebar-3';
		$wiguard_options['footer-middle-sidebar-3'] = 'sidebar-4';
		$wiguard_options['footer-middle-sidebar-4'] = 'sidebar-5';
		
		$footer_items = '{"Enabled":{"footer-middle":"Footer Middle","footer-bottom":"Footer Bottom"},"disabled":{"footer-top":"Footer Top"}}';
		$wiguard_options['footer-items'] = json_decode( $footer_items, true );
		
		$footer_bottom_items = '{"disabled":{"widget":"Custom Widget","menu":"Footer Menu"},"Left":{"social":"Footer Social Links"},"Center":[],"Right":{"copyright":"Copyright Text"}}';
		$wiguard_options['footer-bottom-items'] = json_decode( $footer_bottom_items, true );
		
	}elseif( $footer_template == '6' ) {
		$wiguard_options['footer-top-layout'] = '12';
		$wiguard_options['footer-top-sidebar-1'] = 'sidebar-6'; 
		$wiguard_options['footer-middle-layout'] = '3-6-3';
		$wiguard_options['footer-middle-container'] = 'boxed';
		$wiguard_options['footer-middle-sidebar-1'] = 'sidebar-2';
		$wiguard_options['footer-middle-sidebar-2'] = 'sidebar-3';
		$wiguard_options['footer-middle-sidebar-3'] = 'sidebar-4';
		$wiguard_options['footer-middle-sidebar-4'] = 'sidebar-5';
		
		$footer_items = '{"Enabled":{"footer-top":"Footer Top","footer-middle":"Footer Middle","footer-bottom":"Footer Bottom"},"disabled":[]}';
		$wiguard_options['footer-items'] = json_decode( $footer_items, true );
		
		$footer_bottom_items = '{"disabled":{"widget":"Custom Widget","menu":"Footer Menu"},"Left":{"social":"Footer Social Links"},"Center":[],"Right":{"copyright":"Copyright Text"}}';
		$wiguard_options['footer-bottom-items'] = json_decode( $footer_bottom_items, true );
		
	}elseif( $footer_template == '7' ) {
		$wiguard_options['footer-middle-layout'] = '6-6';
		$wiguard_options['footer-middle-container'] = 'boxed';
		$wiguard_options['footer-middle-sidebar-1'] = 'sidebar-2';
		$wiguard_options['footer-middle-sidebar-2'] = 'sidebar-3';
		
		$footer_items = '{"Enabled":{"footer-middle":"Footer Middle","footer-bottom":"Footer Bottom"},"disabled":{"footer-top":"Footer Top"}}';
		$wiguard_options['footer-items'] = json_decode( $footer_items, true );
		
		$footer_bottom_items = '{"disabled":{"widget":"Custom Widget","menu":"Footer Menu","social":"Footer Social Links"},"Left":{},"Center":{"copyright":"Copyright Text"},"Right":[]}';
		$wiguard_options['footer-bottom-items'] = json_decode( $footer_bottom_items, true );
		
	}elseif( $footer_template == '8' ) {
		$wiguard_options['footer-middle-layout'] = '12';
		$wiguard_options['footer-middle-container'] = 'boxed';
		$wiguard_options['footer-middle-sidebar-1'] = 'sidebar-2';
		
		$footer_items = '{"Enabled":{"footer-middle":"Footer Middle","footer-bottom":"Footer Bottom"},"disabled":{"footer-top":"Footer Top"}}';
		$wiguard_options['footer-items'] = json_decode( $footer_items, true );
		
		$footer_bottom_items = '{"disabled":{"widget":"Custom Widget","menu":"Footer Menu","social":"Footer Social Links"},"Left":{},"Center":{"copyright":"Copyright Text"},"Right":[]}';
		$wiguard_options['footer-bottom-items'] = json_decode( $footer_bottom_items, true );
		
	}
	
	if( $stat == 'save' ){
		update_option( 'wiguard_theme_options_new', $wiguard_options );
		WiguardThemeOpt::$wiguard_mod = $wiguard_options;
	}else{
		update_option( 'wiguard_theme_options_t', $wiguard_options );
		WiguardThemeOpt::$wiguard_mod = $wiguard_options;
	}

}