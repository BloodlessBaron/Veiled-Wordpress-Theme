<div class="post-wrapper">
  <div class="post-title">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </div>
  <div class="post-meta">
    By <?php the_author(); ?> in <?php the_category(', '); ?> on <?php the_date(); ?>.<br /><?php the_tags(); ?><br />
    This post has <a href="<?php the_permalink(); ?>#comments"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a>.
  </div>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
</div>
