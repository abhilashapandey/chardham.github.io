<?php
/**
 * The template for displaying the footer
 *
 */
$afe = new WiguardFooterElements;
$footer_template = WiguardThemeOpt::wiguard_static_theme_mod( 'footer-template' );

$footer_class = $afe->wiguard_footer_layout();
$footer_class .= $footer_template ? ' footer-template-'. $footer_template : '';
?>
	</div><!-- .wiguard-content-wrapper -->
	<footer class="site-footer<?php echo esc_attr( $footer_class ); ?>">

		<?php $afe->wiguard_footer_elements(); ?>
		
		<?php $afe->wiguard_footer_backto_top(); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php
	/*
	 * Full Search - wiguard_full_search_wrap - 10
	 */
	echo apply_filters( 'wiguard_footer_filters', '' );
	
	/*
	 * Google Fonts - wiguardGoogleFontsCon - 10
	 */
	echo do_action( 'wiguard_footer_actions' );
?>

<?php 
	do_action( 'wiguard_body_end_action' );
?>

<?php wp_footer(); ?>
</body>
</html>
