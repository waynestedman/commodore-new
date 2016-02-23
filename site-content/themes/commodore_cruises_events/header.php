<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package commodore_cruises_events
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Picturefill code -->
<script>
// Picture element HTML5 shiv
   document.createElement( "picture" );
</script>
<script src="site-content/themes/commodore_cruises_events/js/picturefill.min.js" async></script>

<!-- TypeKit code -->
<script>
  (function(d) {
    var config = {
      kitId: 'jjt6wdy',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'commodore_cruises_events' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<img
         	src="<?php echo get_template_directory_uri(); ?>/images/SF-skyline-original.jpg"
         	alt="San Francisco skyline day and night"
         	srcset="<?php echo get_template_directory_uri(); ?>/images/SF-skyline-small.jpg 640w, 
         		<?php echo get_template_directory_uri(); ?>/images/SF-skyline-medium.jpg 1080w,
               <?php echo get_template_directory_uri(); ?>/images/SF-skyline-large.jpg 1440w,
               <?php echo get_template_directory_uri(); ?>/images/SF-skyline-extralarge.jpg 1920w"
      	>
      	 
<!-- 			<nav class="event-nav">
				<img src= "images/bracket.svg" alt="">  
 				<h3>Event<br>Everything</h3>
				<ul>
					<li><a href="">Types</a></li>
					<li><a href="">Locations</a></a></li>
					<li><a href="">Menus</a></li>
				</ul>
			</nav>  -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'commodore_cruises_events' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
