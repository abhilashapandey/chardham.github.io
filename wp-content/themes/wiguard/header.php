<?php
/*
 * The header for wiguard theme
 */
$ahe = new WiguardHeaderElements;
$protocal = is_ssl() ? 'https' : 'http';

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="<?php echo esc_attr( $protocal ); ?>://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<?php		
	/*
	 * Sttaic Template Options - wiguard_demo_header - 10
	 */
	do_action('wiguard_before_body_action');	
?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php if( $ahe->wiguard_page_loader() ) : ?>
	<div class="page-loader"></div>
<?php endif; ?>
<?php
	/*
	 * Mobile Header - wiguard_mobile_header - 10
	 * Mobile Bar - wiguard_mobile_bar - 20
	 * Secondary Menu Space - wiguard_header_secondary_space - 30
	 * Top Sliding Bar - wiguard_header_top_sliding - 40
	 */
	do_action('wiguard_body_action');
	
?>

<div id="page" class="wiguard-wrapper<?php $ahe->wiguard_theme_layout(); ?>">
	<?php $ahe->wiguard_header_slider('top'); ?>
	<header class="wiguard-header<?php $ahe->wiguard_header_layout(); ?>">
		
			<?php $ahe->wiguard_header_bar(); ?>
		
	</header>
	<div class="wiguard-content-wrapper">
