<?php get_header(); ?>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <div>

        <?php get_template_part( 'template-parts/site-header' );  ?>

		<div>

			<div>

					<main role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						    
						    <?php get_template_part( 'post-formats/format', get_post_format() );  ?>

						<?php endwhile; ?>

							<?php barebones_page_navi(); ?>

						<?php else : ?>

                            <?php get_template_part( 'template-parts/missing-content' );  ?>

						<?php endif; ?>


					</main>

				<?php get_sidebar(); ?>

			</div>

		</div>

        <?php get_footer(); ?>
        
    <?php // div closed in footer.php ?>

<?php // div closed in footer.php ?>
