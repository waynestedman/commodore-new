<?php
/**
 * Template Name: Event Page
 * Description: Page template for the Event pages. 
 *
 * @package commodore_cruises_events
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<section>
			<main id="main" class="events-main" role="main">
				<article>
					<?php while ( have_posts() ) : the_post(); ?>

	 					<?php get_template_part( 'template-parts/content', 'page' ); ?> 
		
					<?php endwhile; // end of the loop. ?>
				</article> 
			</main><!-- #main -->
			
		</section> <!-- section -->
	</div> <!-- #primary -->

<?php get_footer(); ?>
