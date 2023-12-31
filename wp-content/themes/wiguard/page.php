<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */
 
get_header(); 
$ahe = new WiguardHeaderElements;
$aps = new WiguardPostSettings;
$template = 'page'; // template id
$aps->wiguard_set_post_template( $template );
$template_class = $aps->wiguard_template_content_class();
$full_width_class = '';
?>
<div class="wiguard-content <?php echo esc_attr( 'wiguard-' . $template ); ?>">
		
		<?php $ahe->wiguard_header_slider('bottom'); ?>
		
		<?php $ahe->wiguard_page_title( $template ); ?>
		<div class="wiguard-content-inner">
			<div class="container">
	
				<div class="row">
					
					<div class="<?php echo esc_attr( $template_class['content_class'] ); ?>">
					
						<?php while ( have_posts() ) : the_post(); ?>
						
							<?php
							if ( ( is_single() || is_page() ) && has_post_thumbnail( get_queried_object_id() ) ) :
								echo '<div class="single-featured-image-header">';
								echo get_the_post_thumbnail( get_queried_object_id(), 'large' );
								echo '</div><!-- .single-featured-image-header -->';
							endif;
							?>
						
							<div id="primary" class="content-area clearfix">
								<?php get_template_part( 'template-parts/page/content', 'page' ); ?>
							</div><!-- #primary -->
							
							<?php if ( comments_open() || get_comments_number() ) : ?>
							<div class="post-comments-wrapper clearfix">
								<?php comments_template(); ?>
							</div>
							<?php endif; ?>
						<?php endwhile; // End of the loop. ?>
						
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
					
				</div><!-- row -->
			
		</div><!-- .container -->
	</div><!-- .wiguard-content-inner -->
</div><!-- .wiguard-content -->
<?php get_footer();
