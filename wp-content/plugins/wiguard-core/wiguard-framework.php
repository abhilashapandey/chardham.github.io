<?php
	
class WiguardFamework {
	
	public static $wiguard_mod = '';
	
	function __construct(){
		$wiguard_mod = get_option( 'wiguard_theme_options_new');
		if( !empty( $wiguard_mod ) ){
			self::$wiguard_mod = $wiguard_mod;
		}elseif( function_exists( 'wiguard_default_theme_values' ) ){
			$input_val = wiguard_default_theme_values();
			self::$wiguard_mod = json_decode( $input_val, true );
		}
	}
	
	public static function wiguard_static_theme_mod($field){
		$wiguard_mod = self::$wiguard_mod;
		return isset( $wiguard_mod[$field] ) && $wiguard_mod[$field] != '' ? $wiguard_mod[$field] : '';
	}

}
$wiguard_framework = new WiguardFamework();
