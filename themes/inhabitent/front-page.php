<?php
/**
 * The template for displaying front-page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class=" fp-content-area content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div id="banner-image" class="banner-image" style="background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover, cover;">
					<?php //the_post_thumbnail(); ?>
					<img class="full-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" alt="full-logo">
				</div>
				

			<?php endwhile; // End of the loop. ?>

			<section class="product-nav-container">
            <h2 class="fp-title">Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
			   ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
		 </section>

		 <h2 class="fp-title">inhabitent journal</h2>
			<?php 
				$args = array( 'post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => 3);
   				$product_posts = get_posts( $args ); // returns an array of posts
			?>
			<div class="journal-section">

			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   				<?php /* Content from your array of post results goes here */ ?>
					   <ul class="journal-container">
					   			<div class="journal-image">
								<?php the_post_thumbnail(); ?></div>
								<div class="fp-journal-content">
								<div class="journal-meta">
								<?php echo get_the_date(); ?> / <?php echo get_comments_number(); ?> Comments</div>
								<div class="fp-journal-title">
						   		<a href="<?php echo get_post_permalink($post);?>"><?php the_title(); ?></a></div>
								<div class="read-entry">
								<a href="<?php echo get_post_permalink($post);?>">read entry</a></div>
				  			</div>
						</ul>

			<?php endforeach; wp_reset_postdata(); ?>
			</div>

			<h2 class="fp-title">latest adventures</h2>
			<?php 
				$args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'posts_per_page' => 4);
   				$product_posts = get_posts( $args ); // returns an array of posts
			?>
			<ul class="fp-adventure-section">
			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   				<?php /* Content from your array of post results goes here */ ?>
					   <li class="fp-adventure-container">
					   			<div class="adventure-image" style="background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover; background-position: center;">
								<div class="adventure-title-info">
									<div class="fp-adventure-title">
									<a href="<?php echo get_post_permalink($post);?>"><?php the_title(); ?></a>
									</div>
									<div class="reverse-read-more">
										<a href="<?php echo get_post_permalink($post);?>">read more</a>
									</div>
								  </div>
				  				</div>
				  </li>
			<?php endforeach; wp_reset_postdata(); ?>
				  </ul>
				  <div class="green-read-more"><a href="<?php echo get_post_type_archive_link('adventure')?>">more adventures</a></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
