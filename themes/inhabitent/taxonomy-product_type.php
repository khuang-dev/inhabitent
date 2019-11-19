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
	if ( have_posts() ) { ?>

	<div class="product-archive-section">

		<?php
		while ( have_posts() ) { the_post();  ?>
		<div class="product-archive-container">
			<div class="product-image">
					<?php the_post_thumbnail(); ?>
					</div>
					<div class="product-info">
						<p class=archive-product-title><?php the_title(); ?></p>
						<p class=archive-price>$<?php the_field('price'); ?></p>
					</div>
			</div>
		<?php
		} // end while ?>

	</div>
	<?php
	} // end if
	?>





	</section>

	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
