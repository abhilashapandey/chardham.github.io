<?php
/**
 * Template part for displaying page content in page.php
 *
 */
?>
<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
	the_content();
	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wiguard' ),
		'after'  => '</div>',
	) );
?>
</div><!-- #post-## -->