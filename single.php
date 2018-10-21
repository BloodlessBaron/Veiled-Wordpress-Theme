<?php get_header(); ?>
<div id="wrapper">
  <div id="leftbar">
    <?php get_sidebar('left-bar'); ?>
  </div>
  <div id="centerwrap">
    <div id="header">
      <h1><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
      <?php echo get_bloginfo( 'description' ); ?>
    </div>
    <div id="content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() );

      endwhile; endif;

      comments_template(); ?>
    </div>
    <div id="footer">
      <p class="footer-copy"><?php get_footer('copy'); ?></p>
    </div>
  </div>
  <div id="rightbar">
    <?php get_sidebar('right-bar'); ?>
  </div>
<?php get_footer(); ?>
