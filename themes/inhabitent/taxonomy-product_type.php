<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="archive-header">
		<h2 class="product-archive-title"><?php single_term_title(); ?></h2>
		<span class="product-type-description"><?php the_archive_description(); ?></span>
		</header>

	
<section class="all-products">
	<?php 


				$args = array( 'post_type' => 'product', 'order' => 'ASC', 'posts_per_page' => 16,);
   				$product_posts = get_posts( $args ); // returns an array of posts
			?>
			<div class="product-archive-section">

			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
			
   				<?php /* Content from your array of post results goes here */ ?>
					   <div class="product-archive-container">
					   			<div class="product-image">
								<?php the_post_thumbnail(); ?>
								</div>
								<div class="product-info">
								   <p class=archive-product-title><?php the_title(); ?></p>
								   <p class=archive-price>$<?php the_field('price'); ?></p>
								</div>
				  		</div>
			<?php endforeach; wp_reset_postdata(); ?>
			</div>
	</section>

	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
