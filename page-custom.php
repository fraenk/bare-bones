<?php
/*
 Template Name: Custom Page Example
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name it "page-whatever.php" and add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
 * 
 * This example creates a one-pager from a page and all it's direct child-pages
*/
?>

<!doctype html>

<?php get_header(); ?>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
        
    <?php get_template_part( 'template-parts/site-header' );  ?>

    <main role="main" itemprop="mainContentOfPage"> <?php //itemscope itemtype="http://schema.org/WebPageElement" ?!? ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            
            <?php
                // first display the page content itself
                get_template_part( 'template-parts/page-content' );
                // now query for child-pages
                $parentPostID = get_the_ID();
                $args = array(
                    'post_type' => 'page',
                    'post_parent' => $parentPostID,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $child_pages = new WP_Query( $args );
                // and display all child pages
                if( $child_pages->have_posts() ):
                    while ( $child_pages->have_posts() ) : $child_pages->the_post();
                        get_template_part( 'template-parts/page-content' );
                    endwhile;
                endif;
                // finally reset the post-data to finish rendering in the parentpage's context
                wp_reset_postdata();
            ?>

        <?php endwhile; else : ?>

            <?php get_template_part( 'template-parts/missing-content' );  ?>

        <?php endif; ?>

    </main>
    
    <?php get_sidebar(); ?>

    <?php get_footer(); ?>

</body>

</html> <!-- end of site. what a ride! -->