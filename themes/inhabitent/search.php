<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main search-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="search-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="search-post-title">
				<a href=""><?php the_title(); ?></a></div>
			<div class="search-post-excerpt">
				<?php the_excerpt(); ?></div>
				<div class="read-more">
					<a href="">read more →</a>
				</div>
			<?php endwhile; ?>
<section class="search-number-nav">
			<?php red_starter_numbered_pagination(); ?>
		</section>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
