<?php get_header();
get_header();
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            get_template_part( 'content', get_post_format() );
        endwhile; // end while
    endif; // end if ?>

    <hr />
    <a name="comments"></a>

    <?php comments_template(); // Show comments form
get_footer(); ?>
