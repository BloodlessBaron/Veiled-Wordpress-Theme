<div class="post-wrapper">
<div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
  <div class="featured-image"><?php the_post_thumbnail(); ?></div>
  <div class="post-title">
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  </div>
  <div class="post-meta">
    <?php
    if( 'post' === get_post_type() ) {
      get_template_part( 'content', 'postmeta' );
    }
    else {
      get_template_part( 'content', 'pagemeta' );
    } ?>
  </div>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
</div>
</div>
