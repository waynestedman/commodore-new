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
					<?php if( have_rows('faq_entry') ): ?>
						<?php while( have_rows('faq_entry') ): the_row(); 
							// vars
							$question = get_sub_field('question');
							$answer = get_sub_field('answer');
							$link = get_sub_field('page_link');
							?>
								<a href="javascript:void(0)" class="expander-trigger expander-hidden"> <?php echo $question; ?> </a>
								<div class="expander-content"> 
									<p><?php echo $answer; 
									echo $link; ?></p>
								</div> <!-- expander-content -->
						<?php endwhile; ?>
					<?php endif; ?>
				</div> <!-- expander -->
				</article>
			</main><!-- #main -->
		</section> <!-- section -->	
	</div> <!-- #primary -->

<?php get_footer(); ?>
