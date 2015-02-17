<footer role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

	<nav role="navigation">
		<?php wp_nav_menu(array(
		'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
		'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
		'menu' => __( 'Footer Links', 'barebonestheme' ),   // nav name
		'menu_class' => 'nav footer-nav cf',            // adding custom nav class
		'theme_location' => 'footer-links',             // where it's located in the theme
		'before' => '',                                 // before the menu
	    'after' => '',                                  // after the menu
	    'link_before' => '',                            // before each link
	    'link_after' => '',                             // after each link
	    'depth' => 0,                                   // limit the depth of the nav
		'fallback_cb' => 'barebones_footer_links_fallback'  // fallback function
		)); ?>
	</nav>

	<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

</footer>

<?php // all js scripts are loaded in library/barebones.php ?>
<?php wp_footer(); ?>