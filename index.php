<?php get_header(); ?>
<div id="wrapper">
  <div id="leftbar">
    <?php get_sidebar('left-bar'); ?>
  </div>
  <div id="centerwrap">
    <div id="header">
      <p><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a><br><?php echo get_bloginfo( 'description' ); ?></p>
    </div>
    <div id="content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() );

      endwhile; endif; ?>
    </div>
    <div id="footer">
      <?php get_footer('copy'); ?>
    </div>
  </div>
  <div id="rightbar">
    <?php get_sidebar('right-bar'); ?>
  </div>
<?php get_footer(); ?>
