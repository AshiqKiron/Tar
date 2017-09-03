<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tar
 */
?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'tar' ), 'tar', '<a href="http://asphaltthemes.com" rel="designer">Asphaltthemes.com</a>' ); ?>
		</div><!-- .site-info -->
		<a href="#" class="scrolltotop"><i class="fa fa-chevron-up"></i></a>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>