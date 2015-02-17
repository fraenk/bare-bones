<!doctype html>

<?php get_header(); ?>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <?php get_template_part( 'template-parts/site-header' );  ?>

	<main role="main" itemprop="mainContentOfPage"> <?php //itemscope itemtype="http://schema.org/WebPageElement" ?!? ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    <?php get_template_part( 'template-parts/page-content' );  ?>

		<?php endwhile; else : ?>

			<?php get_template_part( 'template-parts/missing-content' );  ?>

		<?php endif; ?>

	</main>

	<?php get_sidebar(); ?>

    <?php get_footer(); ?>

</body>

</html> <!-- end of site. what a ride! -->