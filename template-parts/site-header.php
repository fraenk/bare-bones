<header role="banner" itemscope itemtype="http://schema.org/WPHeader">

    <div>

        <?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
        <p itemprop="headline"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

        <?php // if you'd like to use the site description you can un-comment it below ?>
        <?php // bloginfo('description'); ?>


        <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <?php wp_nav_menu(array(
                'container' => false,                               // remove nav container as we have the nav element above
                'container_class' => '',                            // class of container (should you choose to use it)
                'menu' => __( 'The Main Menu', 'barebonestheme' ),  // nav name
                'menu_class' => '',                                 // adding custom nav class
                'theme_location' => 'main-nav',                     // where it's located in the theme
                'before' => '',                                     // before the menu
                'after' => '',                                      // after the menu
                'link_before' => '',                                // before each link
                'link_after' => '',                                 // after each link
                'depth' => 0,                                       // limit the depth of the nav
                'fallback_cb' => ''                                 // fallback function (if there is one)
            )); ?>

        </nav>

    </div>

</header>