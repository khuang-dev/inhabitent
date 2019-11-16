<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="">
            <h2 class="product-archive-title">Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
			   ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="">
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
		 </section>

	
<section class="all-products">
	<?php 
				$args = array( 'post_type' => 'product', 'order' => 'ASC', 'posts_per_page' => 16);
   				$product_posts = get_posts( $args ); // returns an array of posts
			?>
			<div class="product-archive-section">

			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   				<?php /* Content from your array of post results goes here */ ?>
					   <div class="product-archive-container">
					   			<div class="product-image">
								<?php the_post_thumbnail(); ?>
								</div>
								<div class="product-title">
						   		<?php the_title(); ?>
								</div>
								<div class="price">
								<?php the_field('price'); ?>
								</div>
				  </div>
			<?php endforeach; wp_reset_postdata(); ?>
			</div>
	</section>

	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
