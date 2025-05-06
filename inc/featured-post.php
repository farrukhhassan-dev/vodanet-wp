<section class="blog-one blog-one--page">
  <div class="container">
    <div class="sec-title text-center">
      <div class="d-flex align-items-center justify-content-center">
        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
          alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
        <h6 class="sec-title__tagline">Latest</h6>
      </div>
      <h3 class="sec-title__title">Featured Insights</h3>
    </div>

    <div class="service-three__carousel vodanet-owl__carousel owl-theme owl-carousel">
      <?php
      $featured_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'category_name' => 'featured'
      ));

      if ($featured_query->have_posts()):
        while ($featured_query->have_posts()):
          $featured_query->the_post();
          ?>
          <div class="item">
            <?php get_template_part('template-parts/content', 'blog-card'); ?>
          </div>
          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>

  </div>
</section>