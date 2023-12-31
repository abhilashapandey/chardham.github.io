<?php
/**
 * Template part for displaying related post as slider
 *
 */
$aps = new WiguardPostSettings;
$slide_template = 'featured';
$cols = '';
$gal_atts = array(
	'data-loop="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-infinite' )) .'"',
	'data-margin="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-margin' )) .'"',
	'data-center="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-center' )) .'"',
	'data-nav="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-navigation' )) .'"',
	'data-dots="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-pagination' )) .'"',
	'data-autoplay="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-autoplay' )) .'"',
	'data-items="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-items' )) .'"',
	'data-items-tab="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-tab' )) .'"',
	'data-items-mob="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-mobile' )) .'"',
	'data-duration="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-duration' )) .'"',
	'data-smartspeed="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-smartspeed' )) .'"',
	'data-scrollby="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-scrollby' )) .'"',
	'data-autoheight="'. esc_attr(WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-autoheight' )) .'"',
);
$data_atts = implode( " ", $gal_atts );
$cols = absint( WiguardThemeOpt::wiguard_static_theme_mod( $slide_template.'-slide-items' ) );
if( $cols == 1 ){
	$thumb_size = 'large';
}elseif( $cols == 2 ){
	$thumb_size = 'medium';
}elseif( $cols == 3 ){
	$thumb_size = 'wiguard-grid-large';
}else{
	$thumb_size = 'wiguard-grid-medium';
}
$args = array(
	'ignore_sticky_posts' => 1,
	'posts_per_page'=> -1,
	'meta_query' => array(
		array(
			'key' => 'wiguard_post_featured_stat',
			'value' => 1
		)
	),
);
$slide_class = $cols == 1 ? ' owl-single-item' : '';
$related_query = new WP_Query( $args );
if( $related_query->have_posts() ) { 
	wp_enqueue_script( 'owl-carousel' );
	wp_enqueue_style( 'owl-carousel' );
?>
	<div class="featured-slider-wrapper clearfix">
		<div class="owl-carousel featured-slider<?php echo esc_attr( $slide_class ); ?>" <?php echo ( ''. $data_atts ); ?>><?php
		while( $related_query->have_posts() ) : $related_query->the_post(); ?>
		
			<div class="item">
				<div class="featured-item">
					<?php 
						if ( has_post_thumbnail( get_the_ID() ) ) :
					?>
						<a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php the_title_attribute(); ?>">
							<?php echo get_the_post_thumbnail( get_the_ID(), $thumb_size, array( 'class' => 'img-fluid' ) ); ?>
						</a>
					<?php else: ?>
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
							<div class="empty-post-image text-center"><i class="ti-image"></i></div>
						</a>
					<?php endif; ?>
					<div class="featured-item-inner">
					
						<?php echo ( ''. $aps->wiguard_meta_category() ); ?>
						
						<h3 class="featured-title">
							<a href="<?php echo esc_url( get_the_permalink() ); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php echo esc_html( get_the_title() ); ?>
							</a>
						</h3>
						<?php
							//Author 
							echo ( ''. $aps->wiguard_meta_author() );
						?>
						<div class="featured-meta">
							<?php	
								//Date 
								echo ( ''. $aps->wiguard_meta_date() );
								
								//Comments Count 
								echo ( ''. $aps->wiguard_meta_comment() );
							?>
						</div>
					</div><!-- .featured-item-inner -->
				</div><!-- .featured-item -->
			</div><!-- .item -->
		<?php
		endwhile;?>
		
		</div><!-- .related-slider -->
	</div><!-- .related-slider-wrapper --><?php
}
wp_reset_postdata();
