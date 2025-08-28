<?php 
if(!defined('ABSPATH')){ exit; }

function kkf_header_fallback_menu(){ ?>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="<?php echo esc_url(home_url('about')); ?>" class="nav-link">About</a>
    </li>
    <li class="navbar-separator"></li>
    <li class="nav-item dropdown">
      <a href="#"
          class="nav-link dropdown-toggle"
          role="button"
          data-bs-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">
        Services
      </a>
      <ul class="dropdown-menu">
        <li class="nav-item">
          <a href="<?php echo esc_url(home_url('foundation-waterproofing')); ?>" class="dropdown-item">Foundation Waterproofing</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo esc_url(home_url('protective-drain-boards')); ?>" class="dropdown-item">Protective Drain Boards</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo esc_url(home_url('exterior-and-interior-drainage-systems')); ?>" class="dropdown-item">Exterior and Interior Drainage Systems</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo esc_url(home_url('epoxy-repair-services')); ?>" class="dropdown-item">Epoxy Repair Services</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo esc_url(home_url('pest-and-termite-services')); ?>" class="dropdown-item">Pest and Termite Services</a>
        </li>
      </ul>
    </li>
    <li class="navbar-separator"></li>
    <li class="nav-item">
      <a href="<?php echo esc_url(home_url('our-projects')); ?>" class="nav-link">Our Projects</a>
    </li>
    <li class="navbar-separator"></li>
    <li class="nav-item">
      <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="nav-link">Contact Us</a>
    </li>
  </ul>
<?php }

function kkf_footer_fallback_menu(){ ?>
  <ul id="footer-navigation" class="nav footer-nav">
    <li class="nav-item">
      <a href="<?php echo esc_url(home_url('about')); ?>" class="nav-link">About</a>
    </li>
    <li class="navbar-separator"></li>
    <li class="nav-item">
      <a href="<?php echo esc_url(home_url('services')); ?>" class="nav-link">Services</a>
    </li>
    <li class="navbar-separator"></li>
    <li class="nav-item">
      <a href="<?php echo esc_url(home_url('our-projects')); ?>" class="nav-link">Our Projects</a>
    </li>
    <li class="navbar-separator"></li>
    <li class="nav-item">
      <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="nav-link">Contact Us</a>
    </li>
  </ul>
<?php }