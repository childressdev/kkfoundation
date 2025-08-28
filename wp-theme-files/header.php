<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php echo esc_html(bloginfo('name')); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="header">
    <div class="masthead">
      <div class="container-fluid">
        <?php
          $masthead_message = get_field('masthead_message', 'option');
          if($masthead_message){
            echo apply_filters('the_content', $masthead_message);
          }
        ?>
      </div>
    </div>
    <nav class="navbar navbar-expand-xl">
      <div class="header-logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <?php
            $header_logo = get_field('header_logo', 'option');
            if($header_logo): ?>
              <img src="<?php echo esc_url($header_logo['url']); ?>" alt="<?php echo esc_attr($header_logo['alt']); ?>" />
            <?php else: ?>
              <h1><?php echo esc_html(bloginfo('name')); ?></h1>
            <?php endif; ?>
        </a>
      </div>

      <div class="header-mobile-ctas d-xl-none">
        <button type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#header-nav"
            aria-controls="header-nav"
            aria-expanded="false"
            aria-label="Toggle navigation">
          <svg class="icon-bars">
            <use href="#icon-bars"></use>
          </svg>
        </button>

        <?php $phone = get_field('phone_number', 'option'); ?>
        <?php if($phone): ?>
          <a href="<?php echo esc_url('tel: ' . preg_replace('/[^\d]/', '', $phone));  ?>" class="header-phone-mobile">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-phone-header.png" alt="" />
          </a>
        <?php endif; ?>
      </div>

      <div id="header-nav" class="navbar-collapse collapse">
        <?php
          $header_nav_args = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => '',
            'container_id' => '',
            'container_class' => '',
            'menu_id' => '',
            'menu_class' => 'navbar-nav',
            'echo' => true,
            'fallback_cb' => 'kkf_header_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new bootstrap_5_wp_nav_menu_walker()
          );
          wp_nav_menu($header_nav_args);
        ?>

        <?php if($phone): ?>
          <div class="header-ctas d-none d-xl-flex">
            <div class="header-cta">
              <a href="<?php echo esc_url('tel:' . preg_replace('/[^\d]/', '', $phone));  ?>" class="header-phone">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-phone-header.png" alt="" />
                <span><?php echo esc_html($phone); ?></span>
              </a>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </nav>
  </header>