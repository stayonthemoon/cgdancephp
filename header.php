<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <?php wp_head();?>
</head>
<body>
  <header class="header" id="header">
  <nav class="header__nav">
      <a href="#classes" class="header__nav-item">Classes</a>
      <a href="#plans" class="header__nav-item">Plans</a>
      <a href="#aboutus" class="header__nav-item">About us</a>
      <a href="#studio" class="header__nav-item">The Studio</a>
      <a href="#footer" class="header__nav-item">Contacts</a>
    </nav>
    <div class="header__background">
      <h1 class="header__logo">
        <img src="<?php echo get_theme_file_uri('/images/header__logo2.svg') ?>" alt="CGDance Company Logo" class="header__logo_img">
      </h1>
    </div>
  </header>