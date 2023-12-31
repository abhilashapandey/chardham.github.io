<?php
// Portfolio Archive Template
$q_object = get_queried_object();
$term_name = $taxonomy = '';
if( isset($q_object->name) ) $term_name = $q_object->name;
if( isset($q_object->taxonomy) ) $taxonomy = $q_object->taxonomy;
$aps = new WiguardPostSettings;
$gutter = $cols = $infinite = $isotope = $extra_class = '';
$extra_class = 'grid-layout';
// Archive Layout Grid Settings
$cols = WiguardFamework::wiguard_static_theme_mod( 'portfolio-grid-cols' );
$gutter = WiguardFamework::wiguard_static_theme_mod( 'portfolio-grid-gutter' );
$infinite = WiguardFamework::wiguard_static_theme_mod( 'portfolio-infinite-scroll' ) ? 'true' : 'false';
$isotope = WiguardFamework::wiguard_static_theme_mod( 'portfolio-grid-type' );
$extra_class .= WiguardFamework::wiguard_static_theme_mod( 'portfolio-grid-type' ) == 'normal' ? ' grid-normal' : '';
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main archive-template <?php echo esc_attr( $extra_class ); ?>" role="main" data-cols="<?php echo esc_attr( $cols ); ?>" data-gutter="<?php echo esc_attr( $gutter ); ?>">
						
			<?php
			$args = array(
				'post_type' => 'wiguard-portfolio',
				$taxonomy => $term_name
			);
			$query = new WP_Query( $args );
			
			if ( $query->have_posts() ) {
				
				$chk = $isotope_stat = 1;
				// Start the Loop
				while ( $query->have_posts() ) : $query->the_post();
			
					if( $isotope == 'isotope' && $isotope_stat == 1 ) : $isotope_stat = 0; 
						wp_enqueue_script( 'isotope' );
						wp_enqueue_script( 'infinite-scroll' );
						wp_enqueue_script( 'imagesloaded' );
					?>
						<div class="isotope" data-cols="<?php echo esc_attr( $cols ); ?>" data-gutter="<?php echo esc_attr( $gutter ); ?>" data-infinite="<?php echo esc_attr( $infinite ); ?>"><?php
					endif;
					
					if( $chk == 1 && $isotope == 'normal' ) : echo '<div class="grid-parent clearfix">';  endif; ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'post wiguard-portfolio' ); ?>>
						<div class="portfolio-archive">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid' ) ); ?></a>
							<div class="portfolio-archive-title">
								<?php 
									$custom_url = get_post_meta( get_the_ID(), 'wiguard_portfolio_custom_url', true );
									$target = get_post_meta( get_the_ID(), 'wiguard_portfolio_custom_url_target', true );
									$title_url = $custom_url != '' ? $custom_url : get_the_permalink();
								?>
								<h4><a href="<?php echo esc_url( $title_url ); ?>" target="<?php echo esc_attr( $target ); ?>"><?php the_title(); ?></a></h4>
							</div>
						</div>
					</article><!-- #post-## -->
					<?php
					if( $chk == $cols && $isotope == 'normal' ) : echo '</div><!-- .grid-parent -->'; $chk = 0; endif;
					
					$chk++;
					
					?>
				 
				<?php endwhile;
				
				if( $isotope == 'isotope' ) : $isotope_stat = 0; ?>
					</div><!-- .isotope --><?php
				endif;
				if( $chk != 1 && $isotope == 'normal' ) : echo '</div><!-- .grid-parent -->'; endif;
					 
			} // end of check for query having posts
				 
			// use reset postdata to restore orginal query
			wp_reset_postdata();
?>
		</main>
	</div>
