<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <title><?php bloginfo('name'); wp_title('|',true,'left'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="inner">
      <div class="titleWrap">
        <a href="<?php echo home_url(); ?>/index">
          <h1 class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo.png" alt="PIX TECH BLOG">
          </h1>
          <p class="subTitle spNone">
            未経験からエンジニアを目指す!
          </p>
        </a>
      </div>
      <nav>
        <?php
          wp_nav_menu( array(
            'theme_location' => 'global',
            'menu_class' => 'list',
            'container' => 'nav', 
            'depth' => 1
          ));
        ?>
      </nav>
      <div class="hamburger pcNone">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menu">
        <ul>
          <?php
            wp_nav_menu( array(
              'theme_location' => 'global',
              'menu_class' => 'list',
              'container' => 'nav', 
              'depth' => 1
            ));
          ?>
        </ul>
      </div>
    </div>
  </header>