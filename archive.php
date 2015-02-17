<!doctype html>

<?php get_header(); ?>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <?php get_template_part( 'template-parts/site-header' );  ?>

	<main role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">

		<h1>
			 <?php if (is_category()) { ?>
				<span><?php _e( 'Posts Categorized:', 'barebonestheme' ); ?></span> <?php single_cat_title(); ?>
			 <?php } elseif (is_tag()) { ?>
				<span><?php _e( 'Posts Tagged:', 'barebonestheme' ); ?></span> <?php single_tag_title(); ?>
			 <?php } elseif (is_author()) {
				global $post;
				$author_id = $post->post_author;
			 ?>
				<span><?php _e( 'Posts By:', 'barebonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>
			 <?php } elseif (is_day()) { ?>
			    <span><?php _e( 'Daily Archives:', 'barebonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
			 <?php } elseif (is_month()) { ?>
				<span><?php _e( 'Monthly Archives:', 'barebonestheme' ); ?></span> <?php the_time('F Y'); ?>
			 <?php } elseif (is_year()) { ?>
				<span><?php _e( 'Yearly Archives:', 'barebonestheme' ); ?></span> <?php the_time('Y'); ?>
			 <?php } ?>
		</h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php get_template_part( 'post-formats/format', get_post_format() );  ?>

        <?php endwhile; ?>

            <?php barebones_page_navi(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/missing-content' );  ?>

        <?php endif; ?>

	</main>

	<?php get_sidebar(); ?>

    <?php get_footer(); ?>

</body>

</html> <!-- end of site. what a ride! -->
