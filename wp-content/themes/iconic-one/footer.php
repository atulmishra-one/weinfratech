<?php
/**
 * Footer section template.
 * @package WordPress
 * @subpackage Iconic_One
 * @since Iconic One 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
		<div class="footercopy"><?php echo get_theme_mod( 'textarea_copy', 'custom footer text left' ); ?></div>
		<div class="footercredit"><?php echo get_theme_mod( 'custom_text_right', 'custom footer text right' ); ?></div>
		<div class="clear"></div>
		</div><!-- .site-info -->
		</footer><!-- #colophon -->
				<div class="clear"></div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>