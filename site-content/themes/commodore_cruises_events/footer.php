<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package commodore_cruises_events
 */

?>

<!--	</div> #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<aside class="footer-widgets">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) ?> 
		</aside>
		<div class="site-info">
			<p>Copyright &copy <?php echo date('Y'); ?> &middot; <a href="http://www.commodoreevents.com/" >Commodore Cruises & Events, Inc.</a> &middot; All Rights Reserved
			<span class="sep"> &middot; </span>
			<?php printf( __( 'website design by %1$s.', 'commodore_cruises_events' ), '<a href="http://pacificwebfoundry.com" rel="designer">Pacifc Web Foundry</a>' ); ?></p>
		</div> <!-- .site-info -->
	</footer> <!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
