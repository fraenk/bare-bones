<?php get_header(); ?>

			<div>

				<div>

						<main role="main" itemprop="mainContentOfPage"> <?php //itemscope itemtype="http://schema.org/WebPageElement" ?!? ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							    <?php get_template_part( 'template-parts/page-content' );  ?>

							<?php endwhile; else : ?>

								<?php get_template_part( 'template-parts/missing-content' );  ?>

							<?php endif; ?>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
