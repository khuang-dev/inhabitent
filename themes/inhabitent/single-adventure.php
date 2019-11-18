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
			<div id="banner-image" class="banner-image hero-image" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover; background-position: bottom;">
			</div>
		<section class="about-content">
			<h1 class="post-adventure-title"><?php the_title(); ?></h1>
			<h3 class="post-adventure-author">by <?php the_author();?></h3>
			<?php the_content(); ?>

		<section class="journal-post-buttons">
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-facebook-f"></i>like</a></div>
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-twitter"></i>tweet</a></div>
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-pinterest"></i>pin</a></div>
</section>
</section>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
