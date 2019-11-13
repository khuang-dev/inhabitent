<?php
/**
 * The template for displaying front-page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<?php if( get_field('image') ): ?>
    		<img src="<?php the_field('image'); ?>" />
			<?php endif; ?>
				<?php get_template_part( 'template-parts/content', 'front-page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
