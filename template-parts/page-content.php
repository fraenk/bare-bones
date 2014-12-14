<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/WebPageElement">

    <header>

        <h1 itemprop="headline"><?php the_title(); ?></h1>

        <p>
            <?php printf( __( 'Posted <time datetime="%1$s" itemprop="datePublished">%2$s</time> by <span>%3$s</span>', 'barebonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
        </p>

    </header> <?php // end article header ?>

    <section>
        <?php
            // the content (pretty self explanatory huh)
            the_content();

            /*
             * Link Pages is used in case you have posts that are set to break into
             * multiple pages. You can remove this if you don't plan on doing that.
             *
             * Also, breaking content up into multiple pages is a horrible experience,
             * so don't do it. While there are SOME edge cases where this is useful, it's
             * mostly used for people to get more ad views. It's up to you but if you want
             * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
             *
             * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
             *
            */
            wp_link_pages( array(
                'before'      => '<div><span>' . __( 'Pages:', 'barebonestheme' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
            ) );
        ?>
    </section> <?php // end article section ?>

    <footer>

    </footer>

    <?php comments_template(); ?>

</article>