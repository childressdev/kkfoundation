  <footer id="footer">
    <div class="container-fluid">
      <div id="footer-contact-info" class="row">
        <div class="col-md-5 col-xl-3">
          <a href="<?php echo esc_url(home_url()); ?>" class="footer-logo">
            <?php
              $footer_logo = get_field('footer_logo', 'option');
              if($footer_logo): ?>
                <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" />
            <?php else: ?>
              <h2><?php echo esc_html(bloginfo('name')); ?></h2>
            <?php endif; ?>
          </a>
        </div>
        <div class="col-md-7 col-xl-4">
          <?php $address = get_field('address', 'option'); ?>
          <?php if($address): ?>
            <div class="footer-contact">
              <div class="footer-contact_icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-map-marker-bg.png" alt="" />
              </div>
              <div class="footer-contact_info">
                <h4><?php echo esc_html(bloginfo('name')); ?></h4>
                <p><?php echo wp_kses_post($address); ?></p>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-md-12 col-xl-5">
          <div class="row">
            <div class="col-md-6">
              <?php $phone = get_field('phone_number', 'option'); ?>
              <?php if($phone): ?>
                <div class="footer-contact">
                  <div class="footer-contact_icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-phone-bg.png" alt="" />
                  </div>
                  <div class="footer-contact_info">
                    <h4>PHONE</h4>
                    <p><a href="tel:<?php echo esc_url(preg_replace('/[^\d]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a></p>
                  </div>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-md-6">
              <?php $email = get_field('email', 'option'); ?>
              <?php if($email): ?>
                <div class="footer-contact">
                  <div class="footer-contact_icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-email-bg.png" alt="" />
                  </div>
                  <div class="footer-contact_info">
                    <h4>EMAIL</h4>
                    <p><a href="mailto:<?php echo esc_url($email); ?>"><?php echo esc_html($email); ?></a></p>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <?php
        $footer_nav_args = array(
          'theme_location' => 'footer-nav',
          'menu' => '',
          'container' => '',
          'container_id' => '',
          'container_class' => '',
          'menu_id' => 'footer-navigation',
          'menu_class' => 'nav footer-nav',
          'echo' => true,
          'fallback_cb' => 'kkf_footer_fallback_menu',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth' => 0,
          'walker' => new bootstrap_5_wp_nav_menu_walker()
        );
        wp_nav_menu($footer_nav_args);
      ?>
    </div>
    <div class="footer-bottom-bar">
      <div class="container-fluid">
        <div class="copyright">
          <p>&copy; <?php echo date('Y'); ?> <?php echo esc_html(bloginfo('name')); ?> | All Rights Reserved</p>
          <p>website created by <a href="https://childressagency.com" target="_blank">Childress Agency</a></p>
        </div>
        <div class="social">
          <?php get_template_part('partials', 'social_media'); ?>
        </div>
      </div>
    </div>
  </footer>

  <?php get_template_part('partials/sprites.svg'); ?>
  <?php wp_footer(); ?>
</body>
</html>