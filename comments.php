<?php
/*
The comments page for BareBones
*/

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<?php // You can start editing here. ?>

  <?php if ( comments_open() || have_comments() ) : ?>
    <h3><?php comments_number( __( '<span><meta itemprop="commentCount" content="0" />No</span> Comments', 'barebonestheme' ), __( '<span><meta itemprop="commentCount" content="1" />One</span> Comment', 'barebonestheme' ), __( '<span itemprop="commentCount">%</span> Comments', 'barebonestheme' ) );?></h3>
  <?php endif; ?>
  
  <?php if ( have_comments() ) : ?>

    <section>
      <?php
        wp_list_comments( array(
          'style'             => 'div',
          'short_ping'        => true,
          'avatar_size'       => 40,
          'callback'          => 'barebones_comments',
          'type'              => 'all',
          'reply_text'        => __('Reply', 'barebonestheme'),
          'page'              => '',
          'per_page'          => '',
          'reverse_top_level' => null,
          'reverse_children'  => ''
        ) );
      ?>
    </section>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    	<nav role="navigation">
      	<div><?php previous_comments_link( __( '&larr; Previous Comments', 'barebonestheme' ) ); ?></div>
      	<div><?php next_comments_link( __( 'More Comments &rarr;', 'barebonestheme' ) ); ?></div>
    	</nav>
    <?php endif; ?>

    <?php if ( ! comments_open() ) : ?>
    	<p><?php _e( 'Comments are closed.' , 'barebonestheme' ); ?></p>
    <?php endif; ?>

  <?php endif; ?>

  <?php comment_form(); ?>

