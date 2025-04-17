<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vodanet-wp
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="mid_wrapper">

    <!-- Banner -->
    <section class="page-header ">
      <div class="page-header__bg" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
); background-position: center;">
      </div>
      <div class="container">
        <h2 class="page-header__title">
          <?php the_title(); ?>
        </h2><!-- /.page-title -->

        <?php include get_template_directory() . '/inc/breadcrum.php'; ?>
      </div>
    </section>

    <section class="blog-one blog-one--page">
      <div class="container">
        <div class="row gutter-y-30">
          <div class="col-xl-8 col-lg-7">
            <div class="blog-details">
              <div class="blog-card-two">
                <div class="blog-card__two__image">

                  <div class="blog-card__two__date"><?php echo get_the_date('M j, Y'); ?></div>
                </div>
                <div class="blog-card-two__content">


                  <div id="blog-content">
                    <?php the_content(); ?>
                  </div>

                </div>
              </div>
              <?php
              // Get the custom link from ACF field
              $career_link = get_field('career_link');
              $status = get_field('status');
              $class = ($status === 'Close') ? 'is-close' : '';
              ?>
              <div class="blog-details__meta">
                <div class="why-choose-one__link mt-0">
                  <?php if ($career_link): ?>
                    <a href="<?php echo esc_url($career_link); ?>" class="why-choose-one__link__btn vodanet-btn">Apply
                      Now</a>
                  <?php else: ?>
                    <a href="<?php the_permalink(); ?>" class="why-choose-one__link__btn vodanet-btn">Apply
                      Now</a>
                  <?php endif; ?>

                </div>
              </div>
            </div>


          </div>
          <div class="col-xl-4 col-lg-5 ">
            <div class="sidebar">
              <section id="custom_toc_widget" class="sidebar__single widget widget_custom_toc_widget">
                <div class="title">
                  <h2>Table of Contents</h2>
                </div>
                <ul class="sidebar__posts list-unstyled" id="toc-list">
                  <!-- JavaScript will populate this -->
                </ul>
              </section>


            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const tocList = document.getElementById("toc-list");
      const contentArea = document.getElementById("blog-content"); // Wrap your content with this ID
      if (!tocList || !contentArea) return;

      const headings = contentArea.querySelectorAll("h2, h3");
      headings.forEach((heading, index) => {
        const anchor = "heading-" + index;
        heading.setAttribute("id", anchor);

        const li = document.createElement("li");
        li.className = "sidebar__posts__item";
        li.innerHTML = `
      <div class="sidebar__posts__content">
        <h4 class="sidebar__posts__title">
          <a href="#${anchor}">${heading.textContent}</a>
        </h4>
      </div>`;
        tocList.appendChild(li);
      });
    });
  </script>



</main><!-- #main -->

<?php
get_footer();
