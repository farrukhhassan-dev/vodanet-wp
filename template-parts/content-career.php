<div class="col-md-12">
  <?php
  // Get the custom link from ACF field
  $career_link = get_field('career_link');
  $status = get_field('status');
  $class = ($status === 'Close') ? 'is-close' : '';
  ?>
  <div class="blog-card <?php echo esc_attr($class); ?>">
    <div class="blog-card__content">
      <div class="blog-card__content__inner customize">
        <h3 class="blog-card__title">

          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <p class="fs-6 fw-light mb-0 mt-2"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
        <div class="blog-card__date ">
          <span><?php echo get_the_date('d'); ?></span><?php echo get_the_date('M'); ?>
        </div>
        <?php
        $status = get_field('status');

        if ($status) {
          echo '<div class="blog-card__date blog-card__status">Job Status: ' . esc_html($status) . '</div>';
        }
        ?>

        <a href="<?php the_permalink(); ?>" class="blog-card__link">
          Apply Now <i aria-hidden="true" class="icon-arrow-left"></i>
        </a>
      </div>
    </div>
  </div>
</div>