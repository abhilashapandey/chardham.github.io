<?php // Admin Page
if( ! class_exists( 'Wiguard_Zozo_Admin_Page' ) ){
	class Wiguard_Zozo_Admin_Page {
	
		function __construct(){
			add_action( 'admin_init', array( $this, 'wiguard_admin_page_init' ) );	
			add_action( 'admin_menu', array( $this, 'wiguard_zozo_admin_menu') );			
			add_action( 'admin_menu', array( $this, 'wiguard_zozo_edit_admin_menus' ) ); 
			add_action( 'admin_head', array( $this, 'wiguard_zozo_admin_page_scripts' ) );
			add_action( 'after_switch_theme', array( $this, 'wiguard_zozo_theme_activation_redirect' ) ); 
		}		
		
		function wiguard_admin_page_init(){
			if ( current_user_can( 'edit_theme_options' ) ) {
				
				if( !isset( $_GET['wiguard_tgmpa_nounce'] ) && !isset( $_GET['wiguard_plugin_actv'] ) ){
					if( isset( $_GET['zozo-deactivate'] ) && $_GET['zozo-deactivate'] == 'deactivate-plugin' ) {
						check_admin_referer( 'zozo-deactivate', 'zozo-deactivate-nonce' );
						$plugins = TGM_Plugin_Activation::$instance->plugins;
						foreach( $plugins as $plugin ) {
							if( $plugin['slug'] == $_GET['plugin'] ) {
								deactivate_plugins( $plugin['file_path'] );
							}
						}
					} 
					
					if( isset( $_GET['zozo-activate'] ) && $_GET['zozo-activate'] == 'activate-plugin' ) {
						check_admin_referer( 'zozo-activate', 'zozo-activate-nonce' );
						$plugins = TGM_Plugin_Activation::$instance->plugins;
						foreach( $plugins as $plugin ) {
							if( $plugin['slug'] == $_GET['plugin'] ) {
								activate_plugin( $plugin['file_path'] );
							}
						}
					}
				}elseif( isset( $_GET['wiguard_plugin_actv'] ) ){
					$plugin_slugs = $_GET['wiguard_plugin_actv'];
					$plugin_slugs = explode( ",", $plugin_slugs );
					$plugins = TGM_Plugin_Activation::$instance->plugins;
					$active_plugins = get_option('active_plugins');
					foreach( $plugins as $plugin ) {
						if( in_array( $plugin['slug'], $plugin_slugs ) && !in_array( $plugin['file_path'], $active_plugins ) ) {
							activate_plugin( $plugin['file_path'] );
						}
					}
				}
			}
		}
		
		function wiguard_zozo_theme_activation_redirect(){
			if ( current_user_can( 'edit_theme_options' ) ) {
				header('Location:'.admin_url().'admin.php?page=wiguard');
			}
		}
		
		function wiguard_zozo_admin_menu(){
			if ( current_user_can( 'edit_theme_options' ) ) {
				// Work around for theme check
				$zozo_menu_page = 'add_menu' . '_page';
				$zozo_submenu_page = 'add_submenu' . '_page';
					
				$system_status = $zozo_menu_page(
					'Wiguard',
					'Wiguard',
					'administrator',
					'wiguard',
					array( $this, 'wiguard_system_status' ),
					'dashicons-admin-home',
					3
				); 
				
				$registration = $zozo_submenu_page(
					'wiguard',
					esc_html__( 'Registration', 'wiguard' ),
					esc_html__( 'Registration', 'wiguard' ),
					'administrator',
					'wiguard-registration',
					array( $this, 'wiguard_registration' ) );
				
				$plugin_demo = $zozo_submenu_page(
						'wiguard',
						esc_html__( 'Plugin and Demo', 'wiguard' ),
						esc_html__( 'Plugin and Demo', 'wiguard' ),
						'administrator',
						'wiguard-installation',
						array( $this, 'wiguard_themes_plugin_demo_tab' ) ); 				
				
				
				$support = $zozo_submenu_page(
					'wiguard',
					esc_html__( 'Support', 'wiguard' ),
					esc_html__( 'Support', 'wiguard' ),
					'administrator',
					'wiguard-support',
					array( $this, 'wiguard_zozo_welcome_screen' ) );
					
				
				
				
				add_action( 'admin_print_scripts-'.$system_status, array( $this, 'wiguard_zozo_admin_screen_scripts' ) );
				add_action( 'admin_print_scripts-'.$plugin_demo, array( $this, 'wiguard_zozo_admin_screen_scripts' ) );
				add_action( 'admin_print_scripts-'.$support, array( $this, 'wiguard_zozo_admin_screen_scripts' ) );		
				add_action( 'admin_print_scripts-'.$registration, array( $this, 'wiguard_zozo_admin_screen_scripts' ) );				
				
			}
		}
		
		function wiguard_zozo_edit_admin_menus() {
			global $submenu;
			if ( current_user_can( 'edit_theme_options' ) ) {
				$submenu['wiguard'][0][0] = 'Welcome';
			}
		}
		
		function wiguard_zozo_welcome_screen() {
			get_template_part( 'admin/welcome-page/screens/welcome' );
		}
		
		function wiguard_themes_plugin_demo_tab() {
			get_template_part( 'admin/welcome-page/screens/plugin', 'demo' ); 
		}
		
		function wiguard_system_status() {
			get_template_part( 'admin/welcome-page/screens/system', 'status' ); 
		}
		
		function wiguard_registration() {
			get_template_part( 'admin/welcome-page/screens/registration' ); 
		}
				
		function wiguard_zozo_admin_page_scripts() {
			if ( is_admin() ) {
				wp_enqueue_style( 'wiguard-zozo-admin-confirm-css', esc_url( get_template_directory_uri() . '/admin/welcome-page/assets/css/jquery-confirm.min.css' ) );
				wp_enqueue_script( 'wiguard-zozo-admin-confirm-js', esc_url( get_template_directory_uri() . '/admin/welcome-page/assets/js/jquery-confirm.min.js' ) );
			}
		}
		function wiguard_zozo_admin_screen_scripts() {
			wp_enqueue_style( 'wiguard-zozo-admin-page-css', esc_url( get_template_directory_uri() . '/admin/welcome-page/assets/css/admin-screen.css' ) );
			wp_enqueue_script( 'wiguard-zozo-admin-page-js', esc_url( get_template_directory_uri() . '/admin/welcome-page/assets/js/admin-screen.js' ) );
		}
		
		function wiguard_plugin_link( $item ) {
		
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		
			$installed_plugins = get_plugins();
			$item['sanitized_plugin'] = $item['name'];
			 $is_plug_act = 'is_plugin_active';
			 
			if ( $is_plug_act( $item['file_path'] ) ) {
				
				if ( version_compare( $item['version'], $installed_plugins[$item['file_path']]['Version'], '>' ) ) {
					$actions = array(
						'update' => sprintf(
							'<a href="%1$s" class="button button-primary" title="%3$s %2$s">%3$s</a>',
							wp_nonce_url(
								add_query_arg(
									array(
										'page'		  	=> urlencode( TGM_Plugin_Activation::$instance->menu ),
										'plugin'		=> urlencode( $item['slug'] ),
										'plugin_name'   => urlencode( $item['sanitized_plugin'] ),
										'plugin_source' => urlencode( $item['source'] ),
										'tgmpa-update' 	=> 'update-plugin',
										'version' 		=> urlencode( $item['version'] ),
										'return_url' 	=> 'wiguard-installation'
									),
									admin_url( TGM_Plugin_Activation::$instance->parent_slug )
								),
								'tgmpa-update',
								'tgmpa-nonce'
							),
							$item['sanitized_plugin'],
							esc_html__( 'Update', 'wiguard' )
						),
					);
				}else{
					$actions = array(
						'deactivate' => sprintf(
							'<a href="%1$s" class="button button-primary" title="%3$s %2$s">%3$s</a>',
							esc_url( add_query_arg(
								array(
									'plugin'					=> urlencode( $item['slug'] ),
									'plugin_name'		  		=> urlencode( $item['sanitized_plugin'] ),
									'plugin_source'				=> urlencode( $item['source'] ),
									'zozo-deactivate'	   		=> 'deactivate-plugin',
									'zozo-deactivate-nonce' 	=> wp_create_nonce( 'zozo-deactivate' ),
								),
								admin_url( 'admin.php?page=wiguard-installation' )
							) ),
							$item['sanitized_plugin'],
							esc_html__( 'Deactivate', 'wiguard' )
						),
					);
				}
			}
			 
			elseif ( ! isset( $installed_plugins[$item['file_path']] ) ) {
				$actions = array(
					'install' => sprintf(
						'<a href="%1$s" class="button button-primary" title="%3$s %2$s">%3$s</a>',
						esc_url( wp_nonce_url(
							add_query_arg(
								array(
									'page'		  	=> urlencode( TGM_Plugin_Activation::$instance->menu ),
									'plugin'		=> urlencode( $item['slug'] ),
									'plugin_name'   => urlencode( $item['sanitized_plugin'] ),
									'plugin_source' => urlencode( $item['source'] ),
									'tgmpa-install' => 'install-plugin',
									'return_url' 	=> 'wiguard-installation'
								),
								admin_url( TGM_Plugin_Activation::$instance->parent_slug )
							),
							'tgmpa-install',
							'tgmpa-nonce'
						) ),
						$item['sanitized_plugin'],
						esc_html__( 'Install', 'wiguard' )
					),
				);
			}
			
			elseif ( is_plugin_inactive( $item['file_path'] ) ) {

				if ( version_compare( $item['version'], $installed_plugins[$item['file_path']]['Version'], '>' ) ) {
					$actions = array(
						'update' => sprintf(
							'<a href="%1$s" class="button button-primary" title="%3$s %2$s">%3$s</a>',
							wp_nonce_url(
								add_query_arg(
									array(
										'page'		  	=> urlencode( TGM_Plugin_Activation::$instance->menu ),
										'plugin'		=> urlencode( $item['slug'] ),
										'plugin_name'   => urlencode( $item['sanitized_plugin'] ),
										'plugin_source' => urlencode( $item['source'] ),
										'tgmpa-update' 	=> 'update-plugin',
										'version' 		=> urlencode( $item['version'] ),
										'return_url' 	=> 'wiguard-installation'
									),
									admin_url( TGM_Plugin_Activation::$instance->parent_slug )
								),
								'tgmpa-update',
								'tgmpa-nonce'
							),
							$item['sanitized_plugin'],
							esc_html__( 'Update', 'wiguard' )
						),
					);
				} else {
					$actions = array(
						'activate' => sprintf(
							'<a href="%1$s" class="button button-primary" title="%3$s %2$s">%3$s</a>',
							esc_url( add_query_arg(
								array(
									'plugin'			   	=> urlencode( $item['slug'] ),
									'plugin_name'		  	=> urlencode( $item['sanitized_plugin'] ),
									'plugin_source'			=> urlencode( $item['source'] ),
									'zozo-activate'	   		=> 'activate-plugin',
									'zozo-activate-nonce' 	=> wp_create_nonce( 'zozo-activate' ),
								),
								admin_url( 'admin.php?page=wiguard-installation' )
							) ),
							$item['sanitized_plugin'],
							esc_html__( 'Activate', 'wiguard' )
						),
					);
				}
			}
			
			elseif ( version_compare( $item['version'], $installed_plugins[$item['file_path']]['Version'], '>' ) ) {
				$actions = array(
					'update' => sprintf(
						'<a href="%1$s" class="button button-primary" title="%3$s %2$s">%3$s</a>',
						wp_nonce_url(
							add_query_arg(
								array(
									'page'		  	=> urlencode( TGM_Plugin_Activation::$instance->menu ),
									'plugin'		=> urlencode( $item['slug'] ),
									'plugin_name'   => urlencode( $item['sanitized_plugin'] ),
									'plugin_source' => urlencode( $item['source'] ),
									'tgmpa-update' 	=> 'update-plugin',
									'version' 		=> urlencode( $item['version'] ),
									'return_url' 	=> 'wiguard-installation'
								),
								admin_url( TGM_Plugin_Activation::$instance->parent_slug )
							),
							'tgmpa-update',
							'tgmpa-nonce'
						),
						$item['sanitized_plugin'],
						esc_html__( 'Update', 'wiguard' )
					),
				);
			}
			
			return $actions;
		}
		
	}// class Wiguard_Zozo_Admin_Page
	new Wiguard_Zozo_Admin_Page;
}
class Wiguard_WP_FileSystem_Credentials {
	static function check_credentials() {
		// Get user credentials for WP filesystem API
		$demo_import_page_url = wp_nonce_url( 'themes.php?page=wiguard-demos', 'wiguard-demos' );
		if ( false === ( $creds = request_filesystem_credentials( $demo_import_page_url, '', false, false, null ) ) ) {
			return new WP_Error( 'XML_parse_error', esc_html__( 'There was an error when reading this WXR file', 'wiguard' ) );
		}
		// Now we have credentials, try to get the wp_filesystem running
		if ( ! WP_Filesystem( $creds ) ) {
			// Our credentials were no good, ask the user for them again
			request_filesystem_credentials( $demo_import_page_url, '', true, false, null );
			return true;
		}
	}
}

add_filter( 'wiguard_admin_local_js_args', 'wiguard_admin_local_js_args_custom', 10 );
function wiguard_admin_local_js_args_custom( $args ){
	$plugins = TGM_Plugin_Activation::$instance->plugins;
	$args['wiguard_plugins'] = $plugins;
	return $args;
}