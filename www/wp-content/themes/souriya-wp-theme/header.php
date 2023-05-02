<!DOCTYPE html>
<html lang="fr">
<head>
  <title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title(':',true,right); ?> <?php bloginfo('name'); ?></title>

  <meta http-equiv="content-type" 
    content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style2.css" type="text/css">
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="shortcut icon" href="favicon.ico" /> 

  <?php
    //wp_head();
    remove_action( 'wp_head', 'wp_generator' );
  ?>

</head>
<body id="screen">
  <header>
    <h1>
      <a href="/">
        souriya.blog
        <!-- <?php bloginfo('name'); ?> -->
      </a>
    </h1>
    <div id="toggle">
    </div>
  </header>