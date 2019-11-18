<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<section class="find-us-container">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="find-us-title">
				<?php single_post_title(); ?>
			</div>
			<div class="find-us-content find-us-page">
				<?php the_content()?>
</div>
</section>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
