<!DOCTYPE html>
<html lang="fr">
<head>
  <title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title(':',true,right); ?> <?php bloginfo('name'); ?></title>

  <meta http-equiv="content-type" 
    content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="shortcut icon" href="favicon.ico" /> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

  <?php
    //wp_head();
    remove_action( 'wp_head', 'wp_generator' );
  ?>

</head>
<body>
    <header>
      <h1><a href="/"><?php bloginfo('name'); ?></a></h1>
      <div class="toggle-theme">toggle</div>
    </header>