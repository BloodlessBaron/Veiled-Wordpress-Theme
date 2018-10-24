<?php get_header();
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            get_template_part( 'content', get_post_format() );
        endwhile; // end while
    endif; // end if
    get_template_part( 'content', 'pagination' );
get_footer(); ?>
