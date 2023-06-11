<?php
/**
 * Template coming soon default
 */
 
 //get maintenance header
 require_once( WIGUARD_CORE_DIR . 'maintenance/header.php' );

 $address = WiguardFamework::wiguard_static_theme_mod( 'maintenance-address' );
 $email = WiguardFamework::wiguard_static_theme_mod( 'maintenance-email' );
 $phone = WiguardFamework::wiguard_static_theme_mod( 'maintenance-phone' );
 
?>
<div class="container text-center maintenance-wrap">
	<div class="row">
		<div class="col-md-12">
			<h1 class="maintenance-title"><?php esc_html_e( 'Coming Soon', 'wiguard' ); ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h4><?php esc_html_e( 'Phone', 'wiguard' ); ?></h4>
			<div class="maintenance-phone">
				<?php echo esc_html(  $phone ); ?>
			</div>
		</div>
		<div class="col-md-4">
			<h4><?php esc_html_e( 'Address', 'wiguard' ); ?></h4>
			<div class="maintenance-address">
				<?php echo wp_kses_post( $address ); ?>
			</div>
		</div>
		<div class="col-md-4">
			<h4><?php esc_html_e( 'Email', 'wiguard' ); ?></h4>
			<div class="maintenance-email">
				<?php echo esc_html(  $email ); ?>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 maintenance-footer">
			<p><?php esc_html_e( 'We are currently working on an awesome new site, which will be ready soon. Stay Tuned!', 'wiguard' ); ?></p>
		</div>
	</div>
	
</div>
<?php
 //get maintenance header
 require_once( WIGUARD_CORE_DIR . 'maintenance/footer.php' );
?>
