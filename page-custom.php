<?php
/*
 Template Name: Custom Page Example
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <div>

        <?php get_template_part( 'template-parts/site-header' );  ?>

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
        
    <?php // div closed in footer.php ?>

<?php // div closed in footer.php ?>