<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package blog-voce-virtual
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()) : ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Aqui está o que encontramos: %s', 'blog-voce-virtual'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header><!-- .page-header -->
		<div class="all-articles">
			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part('template-parts/content', 'search');

			endwhile;
			?>
		</div>
		<div class=" all-posts-pagination">
			<?php
			echo paginate_links(); ?>
		</div>
	<?php
	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
get_footer();
