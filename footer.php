<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package framework
 */
?>

	</div><!-- #content -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<h1 class="menu-toggle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu.png" alt="menu.png"/></h1>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'framework' ); ?></a>

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>

	</nav><!-- #site-navigation -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p>Copyright &copy; <?php echo '2003 - '. date("Y"); ?>. All rights reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>