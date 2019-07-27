<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <a href="<?php echo site_url(''); ?>">
      <figure id="logoHeader">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
      </figure>
    </a>
    <nav id="navBig">
      <a href="">Marketing Strategy</a>
      <a href="">Digital Health</a>
      <a href="">Whatever</a>
      <a href="">Events & Training</a>
      <a href="">News</a>
    </nav>
  </header>
  <br>
