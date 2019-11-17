<?php
/**
 * The template for displaying all product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="product-single-container">
				<div class="single-product-image">
					<?php the_post_thumbnail(); ?></div>
					<div class="product-content">
						<p class="single-product-title"><?php the_title(); ?></p>
						<p class="single-price">$<?php the_field('price'); ?></p>
						<span class="product-description"><?php the_content();?></span>
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-facebook-f"></i>like</a></div>
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-twitter"></i>tweet</a></div>
						<div class="like-tweet-pin">
							<a href=""><i class="link-icon fab fa-pinterest"></i>pin</a></div>
						</div>
				</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
