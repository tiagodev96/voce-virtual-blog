<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog-voce-virtual
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Ops, não encontramos o que você buscava...', 'blog-voce-virtual'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if (is_home() && current_user_can('publish_posts')) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'blog-voce-virtual'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			);

		elseif (is_search()) :
		?>

			<p><?php esc_html_e('Desculpe, mas não encontramos nenhum resultado com sua pesquisa. Por favor, tente fazê-la novamente utilizando outras palavras', 'blog-voce-virtual'); ?></p>
		<?php
		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
