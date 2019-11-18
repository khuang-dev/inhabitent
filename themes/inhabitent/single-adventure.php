<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<div id="banner-image" class="banner-image hero-image" style="background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover, cover; background-position: bottom, bottom;">
			</div>
		<section class="about-content">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</section>
		<section class="journal-post-buttons">
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-facebook-f"></i>like</a></div>
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-twitter"></i>tweet</a></div>
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-pinterest"></i>pin</a></div>
</section>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
