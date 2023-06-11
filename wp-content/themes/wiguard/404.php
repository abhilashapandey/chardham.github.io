<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
get_header();

$ahe = new WiguardHeaderElements;
$aps = new WiguardPostSettings;
$template = 'page'; // template id
$aps->wiguard_set_post_template( $template );
$template_class = $aps->wiguard_template_content_class();
?>
<div class="wrap">
	<div id="primary" class="content-area error-404-area wiguard-page">
		<main id="main" class="site-main">
		
			<?php $ahe->wiguard_page_title( $template ); ?>
		
			<section class="error-404 not-found text-center">
				<div class="container">
					<header class="page-header">
						
						<div class="image-wrap-404">
							<img src="<?php echo esc_url( WIGUARD_ASSETS . '/images/404.png' ); ?>">
							
						</div>	
						
						<div class="relative mb-2">
							<h3 class="page-title"><?php esc_html_e( 'Page Not Found', 'wiguard' ); ?></h3>
						</div>
						<?php 
							$home_url = home_url( '/' ); 
						?>
							<p class="error-description">
								<?php esc_html_e( 'Sorry we cannot find that page!', 'wiguard' ); ?>
								<?php esc_html_e( 'Go back to home', 'wiguard' ); ?>
							</p>							
							<a class="home-link" href="<?php echo esc_url( $home_url ); ?>">
								<?php esc_html_e( 'Home Page', 'wiguard' ); ?>
							</a>
					</header><!-- .page-header -->
				</div><!-- .container -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer();
