By <?php the_author(); ?> in <?php the_category(', '); ?> on <?php the_date(); ?>.<br />
This post has <a href="<?php the_permalink(); ?>#comments"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a>. <?php the_tags(); ?>
