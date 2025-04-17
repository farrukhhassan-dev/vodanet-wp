<?php
/**
 * Template Name: Careers Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://designhipe.com/
 *
 * @package Vodanet
 */

get_header();
?>
<main id="primary" class="site-main">

  <div class="mid_wrapper">

    <section class="page-header ">
      <div class="page-header__bg"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/young-arab-man-works-diligently-his-desk-browsing-internet-his-digital-laptop-engrossed-online-webpage-he-takes-notes-researches-embodying-professionalism-efficiency.webp); background-position: bottom center;">
      </div>
      <div class="container">
        <h2 class="page-header__title">
          Careers </h2><!-- /.page-title -->
        <?php include get_template_directory() . '/inc/breadcrum.php'; ?>
      </div>
    </section>

    <!-- Blog section Start -->
    <section class="blog-one blog-one--page">
      <div class="container">
        <!-- <div class="sec-title text-center">
          <div class="d-flex align-items-center justify-content-center">
            <img decoding="async"
              src="<?php // echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
              alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
            <h6 class="sec-title__tagline">Latest</h6>
          </div>
          <h3 class="sec-title__title">Careers</h3>
        </div> -->

        <div class="row g-5">
          <?php
          $args = array(
            'post_type' => 'career',
            'posts_per_page' => -1
          );
          $career_query = new WP_Query($args);

          if ($career_query->have_posts()):
            while ($career_query->have_posts()):
              $career_query->the_post();

              // Get the custom link from ACF field
              $career_link = get_field('career_link');
              $status = get_field('career_link');

              ?>
              <div class="col-md-12">
                <div class="blog-card">
                  <div class="blog-card__content">
                    <div class="blog-card__content__inner customize">
                      <h3 class="blog-card__title">
                        <?php if ($career_link): ?>
                          <a href="<?php echo esc_url($career_link); ?>"><?php the_title(); ?></a>
                        <?php else: ?>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                      </h3>
                      <p class="fs-6 fw-light mb-0 mt-2"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                      <div class="blog-card__date "><span><?php echo get_the_date('d'); ?></span><?php echo get_the_date('M'); ?></div>
                      <div class="blog-card__date blog-card__status">Close</div>

                      <?php if ($career_link): ?>
                        <a href="<?php echo esc_url($career_link); ?>" class="blog-card__link">
                          Apply Now <i aria-hidden="true" class="icon-arrow-left"></i>
                        </a>
                      <?php else: ?>
                        <a href="<?php the_permalink(); ?>" class="blog-card__link">
                          Apply Now <i aria-hidden="true" class="icon-arrow-left"></i>
                        </a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          else:
            echo '<p>No career opportunities found.</p>';
          endif;
          ?>



        </div>
      </div>
    </section>
    <!-- Blog section End -->





    <!-- Contact section Start -->
    <?php include get_template_directory() . '/inc/contact-form.php'; ?>
    <!-- Contact section End -->

  </div>

</main>

<?php
get_footer();