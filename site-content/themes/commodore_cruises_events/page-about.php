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
					<div class="card">
					<?php 
						$posts = get_posts(array(
							//'posts_per_page' => 5,
							//'offset' => 0,
							//'numberposts' => -1,
							'category_name' => 'executive',
							'orderby' => 'ID',		
							'post_type' => 'post',
							'post_status' => 'publish'
					));

					if($posts)
					{ 
						foreach ($posts as $post) {
			    			echo '<div class="card-image">';
		      			echo '<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">';
			    			echo '</div>';
							echo	'<div class="card-header">';
							echo	'<h3>' .  the_field('name') . '</h3>';
							echo	'<h3>' .  the_field('title') . '</h3>';
							// echo '<p>' . the_content($post) . '</p>';
							echo '</div>';
						}
					}
					?>
					
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
