<?php get_header(); ?>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <div>

        <?php get_template_part( 'template-parts/site-header' );  ?>

        <div>

            <div>

                    <main role="main" itemprop="mainContentOfPage"> <?php //itemscope itemtype="http://schema.org/WebPageElement" ?!? ?>

						<article>

							<header>

								<h1><?php _e( 'Epic 404 - Article Not Found', 'barebonestheme' ); ?></h1>

							</header>

							<section>

								<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'barebonestheme' ); ?></p>

							</section>

							<section>

									<p><?php get_search_form(); ?></p>

							</section>

							<footer>

									<p><?php _e( 'This is the 404.php template.', 'barebonestheme' ); ?></p>

							</footer>

						</article>

					</main>

                    <?php get_sidebar(); ?>

            </div>

        </div>

        <?php get_footer(); ?>
        
    <?php // div closed in footer.php ?>

<?php // div closed in footer.php ?>
