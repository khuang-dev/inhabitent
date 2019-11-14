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
				<div class="banner-image" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;">
					<?php //the_post_thumbnail(); ?>
				</div>
				

			<?php endwhile; // End of the loop. ?>

			<?php 
				$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3);
   				$product_posts = get_posts( $args ); // returns an array of posts
			?>
			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   				<?php /* Content from your array of post results goes here */ ?>
				   <div class="journal-container">
					   <div class="journal-image">
						<?php the_post_thumbnail(); ?>
						</div>
						<div class="journal-meta">
							<?php echo get_the_date(); ?> / <?php echo get_comments_number(); ?> Comments
						</div>
						<div class="fp-journal-title">
						   <?php the_title(); ?>
						</div>
						<div class="read-entry">
						<a href="">read entry</a>
					</div>
					</div>

			<?php endforeach; wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
