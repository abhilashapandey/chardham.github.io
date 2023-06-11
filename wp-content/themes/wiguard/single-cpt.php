<?php
/**
 * The template for displaying all custom post types
 */
 
get_header(); 
$ahe = new WiguardHeaderElements;
$aps = new WiguardPostSettings;
$post_type = get_post_type();
$template = str_replace( "wiguard-", "", $post_type ); // template id
$aps->wiguard_set_post_template( $template );
$template_class = $aps->wiguard_template_content_class();
$full_width_class = '';
$acpt = new WiguardCPT;
?>
<div class="wiguard-content <?php echo esc_attr( 'wiguard-' . $template ); ?> wiguard-page">
		
		<?php $ahe->wiguard_header_slider('bottom'); ?>
		
		<?php $ahe->wiguard_page_title( 'page' ); ?>
		<div class="wiguard-content-inner">
			<div class="container">
	
				<div class="row">
					
					<div class="<?php echo esc_attr( $template_class['content_class'] ); ?>">
						<div id="primary" class="content-area">
							<?php
								$acpt->wiguard_cpt_call_template( $post_type );
							?>				
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
					
				</div><!-- row -->
			
		</div><!-- .container -->
	</div><!-- .wiguard-content-inner -->
</div><!-- .wiguard-content -->
<?php get_footer();
