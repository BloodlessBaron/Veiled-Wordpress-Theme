<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php
    if(is_front_page() || is_home()){
      echo get_bloginfo('name') . " - " . get_bloginfo('description');
    } else{
      echo wp_title('') . " - " . get_bloginfo('name');
    }?>
  </title>

  <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>
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

        endwhile; endif; ?>
