<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog-voce-virtual
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-grid">
		<div class="first-column">
			<div class="site-branding">
				<a href="<?php echo get_site_url(); ?>">
					<h1>Blog. <span>V</span>ocê <span>V</span>irtual</h1>
				</a>
			</div><!-- .site-branding -->
		</div>
		<div class="second-column">
			<h3>Categorias</h3>
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
		<div class="third-column">
			<h3>Redes Sociais</h3>
			<div class="social-media">
				<a href="https://wa.me/5598991771166" target="_blank">Whatsapp</a>
				<a href="https://instagram.com/blog.vocevirtual" target="_blank">Instagram</a>
				<p>E-mails</p>
				<a href="mailto:contato@vocevirtualblog.com" class="e-mail" target="_blank">contato@vocevirtualblog.com</a>
				<a href="mailto:duvidas@vocevirtualblog.com" class="e-mail" target="_blank">duvidas@vocevirtualblog.com</a>

			</div>
		</div>
	</div> <!-- FOOTER GRID -->
	<div class="copyrights">
		<p>&copy; 2022 - Blog Você Virtual</p>
		<a href="https://github.com/tiagodev96">Designed and Developed by &lt;TFrontDev/&gt;</a>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	document.onload = AOS.init();
</script>
<?php wp_footer(); ?>
</body>

</html>
