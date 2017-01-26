<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="main-header">
      <div class="main-header__wrap">
        <nav class="main-header__nav">
          
          <ul class="main-menu">
            <li><a href="index.html" id="js-main-menu-btn" class="main-menu__btn">&#9776;</a>
              
              <?php
                $defaults = array(
                  'container' => false,
                  'theme_location' => 'primary-menu',
                  'menu_class' => 'main-menu__ul',
                  'menu_id' => 'js-sub-menu'
                );

                wp_nav_menu($defaults);
              ?>
              
            </li>
          </ul>

        </nav>
        
        <p class="main-header__logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
      </div>
    </header>


