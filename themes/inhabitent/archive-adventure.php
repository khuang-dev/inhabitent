<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="archive-header">
            <h2 class="product-archive-title">Latest Adventures</h2>

               <div class="product-type-blocks">
                     <div class="product-type-link">
                     </div>
               </div>
		 </section>

	
<section class="all-products">
<?php 
				$args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'posts_per_page' => 4);
   				$product_posts = get_posts( $args ); // returns an array of posts
			?>
			<ul class="adventure-section">
			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   				<?php /* Content from your array of post results goes here */ ?>
					   <li class="adventure-container">
					   			<div class="adventure-image" style="background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover; background-position: center;">
								<div class="adventure-title-info">
									<div class="fp-adventure-title">
						   				<?php the_title(); ?>
									</div>
									<div class="reverse-read-more">
										<a href="">read more</a>
									</div>
								  </div>
				  				</div>
				  </li>
			<?php endforeach; wp_reset_postdata(); ?>
				  </ul>
	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
