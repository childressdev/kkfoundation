<?php
$logos = get_field('logos');
if($logos): ?>
  <div class="logos">
    <?php foreach($logos as $logo): ?>
      <div class="logo">
        <?php if($logo['url']): ?>
          <a href="<?php echo esc_url($logo['url']); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
          </a>
        <?php else: ?>
          <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif;