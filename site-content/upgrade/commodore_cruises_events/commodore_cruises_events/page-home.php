<?php
/**
 * Template Name: Home Page
 * Description: Page template for the Home page. 
 *
 * @package commodore_cruises_events
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<section>
			<main id="main" class="home-main" role="main">
				<article>
					<?php while ( have_posts() ) : the_post(); ?>

	 					<?php get_template_part( 'template-parts/content', 'page' ); ?> 
		
					<?php endwhile; // end of the loop. ?>
				</article> 
			</main><!-- #main -->
			<aside class="events-list">
				<ul>
					<li class="main-event-type"><a href="/weddings">
							<h2>Weddings</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, cum! Voluptatibus molestiae esse dolorum.</p>
						</a></li>
					<li class="event-type1"><a href="/corporate">
							<h2>Corporate</h2>
							<p>Tenetur impedit, similique. Ducimus, totam, id error tempore praesentium temporibus nemo odit incidunt sit officia.</p>
						</a></li>
					<li class="event-type2"><a href="/schools">
							<h2>Schools</h2>
							<p>Commodi molestiae sit, recusandae iure possimus nemo iusto quidem neque, tenetur fugit illum sint adipisci omnis.</p>
						</a></li>
					<li class="event-type3"><a href="/celebrate">
							<h2>Celebrations</h2>
							<p>Soluta labore consequatur suscipit sint voluptatum ad, quas tempore porro culpa! </p>
						</a></li>
					<li class="event-type4"><a href="/public-cruises">
							<h2>Public Cruises</h2>
							<p>Odit non quae culpa, necessitatibus est libero ratione facilis id laboriosam suscipit dolorem.</p>
						</a></li>
					<li class="event-type5"><a href="/meet-the-fleet">
							<h2>Meet The Fleet</h2>
							<p>Culpa cupiditate deleniti placeat aperiam distinctio, amet, aut quibusdam veritatis assumenda.</p>
						</a></li>
				</ul>
			</aside> <!-- .events-list -->
		</section> <!-- section -->
	</div> <!-- #primary -->

<?php get_footer(); ?>
