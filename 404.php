<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package blog-voce-virtual
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('Opa, essa página não existe. Experimente pesquisar o que está procurando.', 'blog-voce-virtual'); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e('Parece que essa página não existe ou está inativa. Por favor, experimente utilizar o campo de pesquisas no nosso menu no topo da página.', 'blog-voce-virtual'); ?></p>

		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
