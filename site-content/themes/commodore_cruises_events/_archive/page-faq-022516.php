<?php
/**
 * Template Name: FAQ Page
 * Description: Page template for the Event pages. 
 *
 * @package commodore_cruises_events
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<section>
			<main id="main" class="info-main" role="main">
				<article>
				<div class="expander">
					<a href="javascript:void(0)" class="expander-trigger expander-hidden">
						<?php the_field('question'); ?>
					</a>
					<div class="expander-content"> 
						<?php the_field('answer'); ?>
					</div> <!-- expander-content -->
				</div> <!-- expander -->
				<div class="expander">
				  <a href="javascript:void(0)" class="expander-trigger expander-hidden">Expandable section</a>
				  <div class="expander-content">
				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio mollitia fugiat facilis enim accusamus quisquam aut, repellendus incidunt quod optio facere labore illo numquam ipsum beatae vero debitis, fugit excepturi.</p>
				  </div>
				</div>
				</article>
				<article>
					<?php while ( have_posts() ) : the_post(); ?>

	 					<?php get_template_part( 'template-parts/content', 'page' ); ?> 
		
					<?php endwhile; // end of the loop. ?>
				</article> 
			</main><!-- #main -->
		</section> <!-- section -->	
	</div> <!-- #primary -->

<?php get_footer(); ?>
