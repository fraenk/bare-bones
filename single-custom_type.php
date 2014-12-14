<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <div>

        <?php get_template_part( 'template-parts/site-header' );  ?>

        <div>

            <div>

                <main role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php
                            /*
                             * Ah, post formats. Nature's greatest mystery (aside from the sloth).
                             *
                             * So this function will bring in the needed template file depending on what the post
                             * format is. The different post formats are located in the post-formats folder.
                             *
                             *
                             * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
                             * A SPECIFIC POST FORMAT.
                             *
                             * If you want to remove post formats, just delete the post-formats folder and
                             * replace the function below with the contents of the "format.php" file.
                            */
                            get_template_part( 'post-formats/format', get_post_format() );
                        ?>

                    <?php endwhile; ?>

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


