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
						$posts = get_posts(array(
							'category_name' => 'executive',
							'orderby' => 'ID',		
							'post_type' => 'post',
							'post_status' => 'publish'
					));

					if($posts)
					{ 
						foreach ($posts as $post) {
							echo '<div class="card">';
			    			echo '<div class="staff-card-image">';
		      			echo '<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">';
			    			echo '</div>';
							echo	'<div class="staff-card-header">';
							echo	the_field('name');
							echo '</div>';
							echo	'<div class="staff-card-title">';
							echo	the_field('title');
							echo '</div>';
							echo '<div class="staff-card-copy">';
							echo the_field('description');
							echo '</div>';
							echo '</div>';
						}
					}
					?>
				</div> <!-- Executive cards -->
				<h3>Commodore "A" Team</h3>
				<div class="cards">
					<?php 
						$posts = get_posts(array(
							'posts_per_page' => 6,
							'category_name' => 'staff',
							'orderby' => 'ID',		
							'post_type' => 'post',
							'post_status' => 'publish'
					));

					if($posts)
					{ 
						foreach ($posts as $post) {
							echo '<div class="card">';
			    			echo '<div class="staff-card-image">';
		      			echo '<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">';
			    			echo '</div>';
							echo	'<div class="staff-card-header">';
							echo	the_field('name');
							echo '</div>';
							echo	'<div class="staff-card-title">';
							echo	the_field('title');
							echo '</div>';
							echo '<div class="staff-card-copy">';
							echo the_field('description');
							echo '</div>';
							echo '</div>';
						}
					}
					?>
				</div> <!-- Staff cards -->
			</main><!-- #main -->
		</section> <!-- section -->	
	</div> <!-- #primary -->

<?php get_footer(); ?>
