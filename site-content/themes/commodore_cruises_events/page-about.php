<?php
/**
 * Template Name: About Page
 * Description: Page template for the Event pages. 
 *
 * @package commodore_cruises_events
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<section>
			<main id="main" class="info-main" role="main">
				<article>
					<?php while ( have_posts() ) : the_post(); ?>
	 					<?php get_template_part( 'template-parts/content', 'page' ); ?> 
					<?php endwhile; // end of the loop. ?>
				</article> 
				<div class="cards">

					<?php 
						$args = array(
							'posts_per_page' => 5,
							'offset' => 0,
							'orderby' => 'ID',		
							'post_type' => 'post',
							'post_parent' => 'executive',
							'post_status' => 'publish'
						);
						$posts_array = get_posts( $args );

						while ( have_posts() ) : the_post(); ?>
							<h3><?php the_field('name'); ?></h3>
							<h4><?php the_field('title'); ?></h4>
	<!-- 						<img src="<?php the_field('hero_image'); ?>" />  -->										<p><?php the_content(); ?></p>
						<?php endwhile; // end of the loop. ?>

	 				<div class="card">
		    			<div class="card-image">
		      			<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">
		    			</div> <!-- card-image -->
		    			<div class="card-header">
		      			First Card
		    			</div> <!-- card-header -->
		    			<div class="card-copy">
		      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
		    			</div> <!-- card-copy -->
		  			</div> <!-- card -->
				</div> <!-- cards -->
			</main><!-- #main -->
		</section> <!-- section -->	
	</div> <!-- #primary -->

<?php get_footer(); ?>
