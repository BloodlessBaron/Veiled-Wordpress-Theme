<div class="post-wrapper">
  <div class="post-title">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </div>
  <div class="post-meta">
    By <?php the_author(); ?> on <?php the_date(); ?>
  </div>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
</div>
