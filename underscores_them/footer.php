<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Underscores_theme
 */
?>
</div>
	</div><!-- #content -->
    <!-- added class wrapper to footer -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!--<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'underscores_theme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'underscores_theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'underscores_theme' ), 'underscores_theme', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>-->
			<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
