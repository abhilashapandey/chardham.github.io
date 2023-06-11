<?php
// Portfolio Content
$t = new WiguardCPTElements();
$p_layout = $t->wiguard_cpt_portfolio_layout();

wp_enqueue_style( 'magnific-popup' );
wp_enqueue_script( 'magnific-popup' );

while ( have_posts() ) : the_post();
	$sticky_col = get_post_meta( get_the_ID(), 'wiguard_portfolio_sticky', true );
	$sticky_lclass = $sticky_rclass = '';
	if( !empty( $sticky_col ) && $sticky_col != 'none' ){
		$sticky_lclass = $sticky_col == 'left' ? ' wiguard-sticky-obj' : '';
		$sticky_rclass = $sticky_col == 'right' ? ' wiguard-sticky-obj' : '';
	}
?>
	<?php if( $p_layout == '1' ) : ?>
		<div class="portfolio-single portfolio-model-1">
			<div class="row">
				
				<div class="col-sm-8">
					<div class="portfolio-format<?php echo esc_attr( $sticky_lclass ); ?>">
						<?php $t->wiguard_cpt_portfolio_format(); ?>
					</div>
					<div class="portfolio-info-wrap">
						<?php $t->wiguard_cpt_portfolio_title(); ?>
						<?php $t->wiguard_cpt_portfolio_content(); ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="portfolio-info<?php echo esc_attr( $sticky_rclass ); ?>">
						<?php $t->wiguard_cpt_meta(); ?>

					</div>
				</div><!-- .col -->
				<div class="col-sm-12">
					<?php WiguardCPTElements::wiguard_cpt_nav(); ?>
				</div>
		
			</div><!-- .row -->
		</div><!-- .portfolio-single -->
	<?php elseif( $p_layout == '2' ) : ?>
		<div class="portfolio-single portfolio-model-2">
			<div class="row">
			
				<div class="col-sm-12">
					<div class="portfolio-format">
						<?php 
							$t->wiguard_cpt_portfolio_format(); 
						?>
					</div>
				</div>
				
			</div><!-- .row -->
			<div class="row portfolio-details">
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="portfolio-content-wrap<?php echo esc_attr( $sticky_lclass ); ?>">
						<?php $t->wiguard_cpt_portfolio_title(); ?>
						<?php $t->wiguard_cpt_portfolio_content(); ?>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="portfolio-meta-wrap<?php echo esc_attr( $sticky_rclass ); ?>">
						<?php $t->wiguard_cpt_meta(); ?>
					</div>
				</div>
				
			</div><!-- .row -->
			
			<div class="col-sm-12">
				<?php WiguardCPTElements::wiguard_cpt_nav(); ?>
			</div>

			
		</div><!-- .portfolio-single -->
	<?php elseif( $p_layout == '3' ) : ?>
		<div class="portfolio-single portfolio-model-3">
			<div class="row">
				
				<div class="col-sm-4">
					<div class="portfolio-info<?php echo esc_attr( $sticky_rclass ); ?>">
						<?php $t->wiguard_cpt_meta(); ?>
					</div>
				</div><!-- .col -->
				<div class="col-sm-8">
					<div class="portfolio-format<?php echo esc_attr( $sticky_lclass ); ?>">
						<?php $t->wiguard_cpt_portfolio_format(); ?>
					</div>
					<div class="portfolio-info-wrap">
						<?php $t->wiguard_cpt_portfolio_title(); ?>
						<?php $t->wiguard_cpt_portfolio_content(); ?>
					</div>
				</div>
				<div class="col-sm-12">
					<?php WiguardCPTElements::wiguard_cpt_nav(); ?>
				</div>
		
			</div><!-- .row -->
		</div><!-- .portfolio-single -->
	<?php elseif( $p_layout == '4' ) : ?>
		<div class="portfolio-single portfolio-model-4">
			<div class="row">
				
				<div class="col-sm-12">
					<div class="portfolio-info<?php echo esc_attr( $sticky_rclass ); ?>">
						<?php $t->wiguard_cpt_portfolio_title(); ?>
						<?php $t->wiguard_cpt_meta(); ?>
						<?php $t->wiguard_cpt_portfolio_content(); ?>
					</div>
				</div><!-- .col -->
				<div class="col-sm-12">
					<?php WiguardCPTElements::wiguard_cpt_nav(); ?>
				</div>
		
			</div><!-- .row -->
		</div><!-- .portfolio-single -->
	<?php endif; 
	
	//Portfolio Related Slider
	$t->wiguard_cpt_portfolio_related();
	
endwhile; // End of the loop.
