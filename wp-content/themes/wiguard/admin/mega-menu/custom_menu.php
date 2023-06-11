<?php
class wiguard_custom_menu {
	/*--------------------------------------------*
	 * Constructor
	 *--------------------------------------------*/
	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	 
	private $mega_fields;
	 
	function __construct() {
		// load the plugin translation files
		
		add_action( 'admin_menu', array( $this, 'wiguard_menu_enqueue_scripts' ) );
		
		// add custom menu fields to menu
		add_filter( 'wp_setup_nav_menu_item', array( $this, 'wiguard_add_custom_nav_fields' ) );
		// save menu custom fields
		add_action( 'wp_update_nav_menu_item', array( $this, 'wiguard_update_custom_nav_fields'), 10, 3 );
		
		// edit menu walker
		add_filter( 'wp_edit_nav_menu_walker', array( $this, 'wiguard_edit_walker'), 10, 2 );
		
		$this->mega_fields = array( 'popbtn', 'megamenulogo', 'megamenu', 'submegamenu', 'submegamenucol', 'submegamenupos', 'megafull', 'megabgimg', 'megatitopt', 'megadropdowntit', 'megachildcol', 'megawidget', 'megamenuicon' );
		
	} // end constructor
	
	
	/**
	 * Register Megamenu stylesheets and scripts		
	 */
	function wiguard_menu_enqueue_scripts() {
		// style/scripts
		wp_enqueue_style( 'wiguard-megamenu', get_template_directory_uri() . '/admin/mega-menu/css/wiguard-megamenu.css', '1.0');
		wp_enqueue_script( 'wiguard-megamenu', get_template_directory_uri() . '/admin/mega-menu/js/wiguard-megamenu.js' , array( 'jquery' ), '1.0', true );
	}
	
	/**
	 * Add custom fields to $item nav object
	 * in order to be used in custom Walker
	 *
	 * @access      public
	 * @since       1.0 
	 * @return      void
	*/
	function wiguard_add_custom_nav_fields( $menu_item ) {
	
		foreach( $this->mega_fields as $fields ){
			$menu_item->$fields = get_post_meta( $menu_item->ID, '_menu_item_' . $fields, true );
		}
		
	    return $menu_item;
	    
	}
	
	/**
	 * Save menu custom fields
	 *
	 * @access      public
	 * @since       1.0 
	 * @return      void
	*/
	function wiguard_update_custom_nav_fields( $menu_id, $menu_item_db_id, $args ) {
	
	    // Check if element is properly sent
		
			foreach( $this->mega_fields as $fields ){
				$opt_value = isset( $_REQUEST['menu-item-' . $fields][$menu_item_db_id] ) ? $_REQUEST['menu-item-' . $fields][$menu_item_db_id] : '' ;
				update_post_meta( $menu_item_db_id, '_menu_item_' . $fields, $opt_value );
			}
    
	}
	
	/**
	 * Define new Walker edit
	 *
	 * @access      public
	 * @since       1.0 
	 * @return      void
	*/
	function wiguard_edit_walker($walker,$menu_id) {
	
	    return 'Wiguard_Walker_Nav_Menu_Edit_Custom';
	    
	}
	
}
// instantiate plugin's class
$main_menu_type = WiguardThemeOpt::wiguard_static_theme_mod('mainmenu-menutype');
if( $main_menu_type == 'advanced' ){
	$wiguard_cm = new wiguard_custom_menu();
	get_template_part( 'admin/mega-menu/edit_custom_walker' );
}