<div class="post-wrapper">
  <div class="post-title">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
