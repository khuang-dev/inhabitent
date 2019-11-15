<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php //if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php //while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'template-parts/content' );?>

			<?php// endwhile; ?>

			<?php //the_posts_navigation(); ?>

		<?php// else : ?>

			<?php// get_template_part( 'template-parts/content', 'none' ); ?>

		<?php //endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php 
				$args = array( 'post_type' => 'product', 'order' => 'ASC',);
   				$product_posts = get_posts( $args ); // returns an array of posts
			?>
			<div class="product-archive-section">

			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   				<?php /* Content from your array of post results goes here */ ?>
					   <ul class="product-archive-container">
					   			<div class="product-image">
								<?php the_post_thumbnail(); ?>
								</div>
								<div class="product-meta">
								<?php  ?>
								</div>
								<div class="product-title">
						   		<?php the_title(); ?>
								</div>
								<div class="price">
								</div>
						</ul>

			<?php endforeach; wp_reset_postdata(); ?>
			</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
