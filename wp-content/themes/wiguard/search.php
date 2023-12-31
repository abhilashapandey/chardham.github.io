<?php
/**
 * The template for displaying search pages
 */
get_header(); 
$ahe = new WiguardHeaderElements;
$template = 'blog'; // template id
$aps = new WiguardPostSettings;
if( $aps->wiguard_check_template_exists( 'archive' ) ){
	$template = 'archive';
}
$aps->wiguard_set_post_template( $template );
add_filter( 'excerpt_length', array( &$aps, 'wiguard_set_excerpt_length' ), 999 );
$template_class = $aps->wiguard_template_content_class();
$extra_class = $layout = $aps->wiguard_get_current_layout();
$top_standard = WiguardThemeOpt::wiguard_static_theme_mod( $template.'-top-standard-post' );
$gutter = $cols = $infinite = $isotope = '';
$isotope_appear = false;
if( $layout == 'grid-layout' ){
	$cols = WiguardThemeOpt::wiguard_static_theme_mod( $template.'-grid-cols' );
	$gutter = WiguardThemeOpt::wiguard_static_theme_mod( $template.'-grid-gutter' );
	$infinite = WiguardThemeOpt::wiguard_static_theme_mod( $template.'-infinite-scroll' ) ? 'true' : 'false';
	$isotope = WiguardThemeOpt::wiguard_static_theme_mod( $template.'-grid-type' );
	$extra_class .= WiguardThemeOpt::wiguard_static_theme_mod( $template.'-grid-type' ) == 'normal' ? ' grid-normal' : '';
	
	if( $isotope == 'isotope' ) {
		$isotope_appear = true;
		wp_enqueue_script( 'isotope' );
		wp_enqueue_script( 'imagesloaded' );
		if( $infinite ) wp_enqueue_script( 'infinite-scroll' );
	}
}
?>
<div class="wiguard-content <?php echo esc_attr( 'wiguard-' . $template ); ?>">
	<?php $ahe->wiguard_page_title( $template ); ?>
	
	<?php 
		if( WiguardThemeOpt::wiguard_static_theme_mod( $template.'-featured-slider' ) ){
			$ahe->wiguard_featured_slider( $template );
		}
	?>
	
	<div class="wiguard-content-inner">
		<div class="container">
			
			<div class="row">
		
				<div class="<?php echo esc_attr( $template_class['content_class'] ); ?>">
					<div id="primary" class="content-area">
						<main class="site-main <?php echo esc_attr( $template ); ?>-template <?php echo esc_attr( $extra_class ); ?>" data-cols="<?php echo esc_attr( $cols ); ?>" data-gutter="<?php echo esc_attr( $gutter ); ?>">
							
							<?php
							
							if ( have_posts() ) :
		
								$chk = $isotope_stat = 1;
								/* Start the Loop */
								while ( have_posts() ) : the_post();
								
									if( $top_standard && $layout != 'standard-layout' ) : ?>
										
										<div class="top-standard-post clearfix">
											<?php
											$aps::$top_standard = true;
											get_template_part( 'template-parts/post/content' );
											$aps::$top_standard = false;
											$top_standard = false;
											?>
										</div><?php
										
									else :
									
										if( $isotope_appear && $isotope_stat ): $isotope_stat = 0;
										?>
											<div class="isotope" data-cols="<?php echo esc_attr( $cols ); ?>" data-gutter="<?php echo esc_attr( $gutter ); ?>" data-infinite="<?php echo esc_attr( $infinite ); ?>"><?php
										endif;
		
										if( $chk == 1 && $layout == 'grid-layout' && $isotope == 'normal' ) : echo '<div class="grid-parent clearfix">';  endif;
										
										get_template_part( 'template-parts/post/content' );
										
										if( $chk == $cols && $layout == 'grid-layout' && $isotope == 'normal' ) : echo '</div><!-- .grid-parent -->'; $chk = 0; endif;
										
										$chk++;
									
									endif;
				
								endwhile;
								
									if( $isotope_appear && !$isotope_stat ): $isotope_stat = 1;
									?>
										</div><!-- .isotope --><?php
									endif;
		
									if( $chk != 1 && $layout == 'grid-layout' && $isotope == 'normal' ) : echo '</div><!-- .grid-parent -->'; endif; // Unexpected if odd grid
					
							else :
				
								get_template_part( 'template-parts/post/content', 'none' );
				
							endif;
							?>
				
						</main><!-- #main -->
							<?php $aps->wiguard_wp_bootstrap_pagination(); ?>
					</div><!-- #primary -->
				</div><!-- main col -->
				
				<?php if( $template_class['lsidebar_class'] != '' ) : ?>
				<div class="<?php echo esc_attr( $template_class['lsidebar_class'] ); ?>">
					<aside class="widget-area left-widget-area<?php echo esc_attr( $template_class['sticky_class'] ); ?>">
						<?php dynamic_sidebar( $template_class['left_sidebar'] ); ?>
					</aside>
				</div><!-- sidebar col -->
				<?php endif; ?>
				
				<?php if( $template_class['rsidebar_class'] != '' ) : ?>
				<div class="<?php echo esc_attr( $template_class['rsidebar_class'] ); ?>">
					<aside class="widget-area right-widget-area<?php echo esc_attr( $template_class['sticky_class'] ); ?>">
						<?php dynamic_sidebar( $template_class['right_sidebar'] ); ?>
					</aside>
				</div><!-- sidebar col -->
				<?php endif; ?>
				
			</div><!-- .row -->
			
		</div><!-- .container -->
	</div><!-- .wiguard-content-inner -->
</div><!-- .wiguard-content -->
<?php get_footer();
