<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blog-voce-virtual
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while (have_posts()) :
		the_post(); ?>

		<header class="allposts-header">
		</header>

		<section class="post">
			<div class="post-header">
				<div class="post-informations">
					<p class="post-categories"><?php the_category(', '); ?></p>
					<h1><?php the_title(); ?></h1>
					<p><?php echo get_the_date(); ?></p>
				</div>
			</div>

			<div class="post-content-container">
				<div class="post-content">
					<?php the_content(); ?>
				</div>
			</div>
		</section>

		<div class="horizontal-row-divider"></div>



	<?php // If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
