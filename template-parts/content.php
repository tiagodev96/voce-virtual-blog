<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog-voce-virtual
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php blog_voce_virtual_post_thumbnail(); ?>
		<?php
		if (is_singular()) :  the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			<div class="entry-meta">
				<?php
				echo get_the_date(); ?>
				<br>
				<div>
					<a href="<?php echo get_the_permalink(); ?>">Ler Artigo</a>
				</div>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->



</article><!-- #post-<?php the_ID(); ?> -->
