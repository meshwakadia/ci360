<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container nav">
    <a class="brand" href="#home">CI360<span>°</span></a>
    <button class="menu-toggle" aria-label="Open menu">☰</button>
    <nav class="menu">
      <a href="#home">Home</a><a href="#about">About</a><a href="#services">Services</a><a href="#team">Team</a><a href="#contact">Contact</a>
    </nav>
  </div>
</header>
