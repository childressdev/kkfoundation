<?php if(have_rows('testimonials')): ?>
  <section id="testimonials-slider">
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php while(have_rows('testimonials')): the_row(); ?>
          <div class="swiper-slide">
            <div class="testimonial">
              <div class="stars-quote">
                <div class="stars">
                  <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/blocks/testimonials-slider/images/icon-5-stars.png" alt="stars" />
                </div>
                <div class="quotes">
                  <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/blocks/testimonials-slider/images/icon-quote.png" alt="quotes" />
                </div>
              </div>
              <div class="testimonial_text">
                <?php the_sub_field('testimonial'); ?>
              </div>
              <cite>
                <?php
                  $author = get_sub_field('author');
                  $author_location = get_sub_field('author_location');
                  if($author): ?>
                    <span class="author-name">
                      <?php echo esc_html($author); ?>
                    </span>
                <?php endif; if($author_location): ?>
                    <span class="author-location">
                      <?php echo esc_html($author_location); ?>
                    </span>
                <?php endif; ?>
              </cite>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="testimonials-pagination"></div>
    </div>
  </section>
<?php endif;