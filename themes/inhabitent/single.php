<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="journal-posts-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
<section class="journal-post-buttons">
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-facebook-f"></i>like</a></div>
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-twitter"></i>tweet</a></div>
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-pinterest"></i>pin</a></div>
</section>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		</section>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
