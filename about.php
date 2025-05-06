<?php
/**
 * Template Name: About Template
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
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/group-business-people-working-together-meeting-room.webp);background-position: top center;">
      </div>
      <div class="container">
        <h2 class="page-header__title">
          About </h2><!-- /.page-title -->
          <?php include get_template_directory() . '/inc/breadcrum.php'; ?>
      </div>
    </section>

    <!-- About section Start -->
    <section id="about" class="about-three">
      <div class="container">
        <div class="row gutter-y-30">
          <div class="col-lg-6">
            <div class="about-three__left">
              <div class="about-three__thumb">
                <div class="about-three__thumb__item about-three__thumb__item--one">
                  <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/about-s-3-1.webp" alt="about-s-3-1"
                    title="about-s-3-1">
                </div>
                <div class="about-three__thumb__item about-three__thumb__item--two">
                  <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/about-3-1.webp" alt="about-3-1" title="about-3-1">
                </div>


                <div class="about-three__thumb__call">
                  <div class="about-three__thumb__call__icon">
                    <i aria-hidden="true" class="icon-chatting-1"></i>
                  </div>
                  <div class="about-three__thumb__call__content">
                    <span class="about-three__thumb__call__text">Call to anytime</span>
                    <h5 class="about-three__thumb__call__title"><a href="tel:<?php echo get_theme_mod('voda_phone'); ?>"><?php echo get_theme_mod('voda_phone'); ?></a></h5>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-three__right">
              <div class="about-three__top mb-2">
                <div class="sec-title">
                  <div class="d-flex align-items-center justify-content-start">
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp" alt="sec-title-s-1"
                      title="sec-title-s-1" class="sec-title__img">
                    <h6 class="sec-title__tagline">INTRODUCTION & VALUE PROPOSITION</h6>
                  </div>
                  <h3 class="sec-title__title">About Company</h3>
                </div>
                <p class="about-three__top__text">Our company specializes in providing comprehensive
                  business solutions that help organizations achieve their goals through
                  digitaltransformation. We offer a range of services including process
                  automation, business applications, compute infrastructure, AI Solutions,and
                  outsourcing of digital services.</p>
              </div>

              <h4 class="sec-title__title about-three__list mb-2 pt-2">Value Proposition</h4>
              <p class="about-three__top__text">Our goal is to provide innovative and transformative
                solutions that help businesses stay ahead of the competition and thrive in today's
                fast-paced digital landscape.
              </p>
              <ul class="about-three__list list-unstyled ml-0 border-0">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i> Increased efficiency
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Improved customer
                  experience
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i> Competitive advantage
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i> Innovation and agility
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i> Access to valuable
                  insights
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About section End -->


    <div id="client" class="client-carousel client-carousel--one">
      <div class="container">
        <div class="sec-title sec-title--one text-center">
          <h3 class="sec-title__title">Our Clients</h3>
        </div>
        <div class="client-carousel__one vodanet-owl__carousel owl-theme owl-carousel">
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-46.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-45.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-44.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-42.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-41.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-40.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-39.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-38.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-37.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-36.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-34.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-33.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-32.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-31.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-29.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-28.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-27.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-26.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-25.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/Page-7-Logos-24.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="https://amaibs.com/wp-content/uploads/2023/08/Logos-24.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="https://amaibs.com/wp-content/uploads/2023/08/Logos-25.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="https://amaibs.com/wp-content/uploads/2023/08/Logos-26.webp" alt="" class=""> </div>
          <div class="client-carousel__one__item"> <img decoding="async"
              src="https://amaibs.com/wp-content/uploads/2023/08/Logos-27.webp" alt="" class=""> </div>
        </div><!-- /.thm-owl__slider -->
      </div><!-- /.container -->
    </div>

    <!-- /.client-carousel -->

    <!-- About section Start -->
    <section class="about-two">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6">
            <div class="about-two__left wow fadeInLeft" data-wow-delay="300ms">
              <div class="about-two__thumb">
                <div class="about-two__thumb__item about-two__thumb__item--one">
                  <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/about-2-1.webp" alt="about-2-1" title="about-2-1">
                </div>
                <div class="about-two__thumb__item about-two__thumb__item--two">
                  <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/about-2-2.webp" alt="about-2-2" title="about-2-2">
                </div>
                <div class="about-two__thumb__award">
                  <i class="icon-award"></i>
                </div>
                <div class="about-two__thumb__icon">
                  <span class="about-two__thumb__icon__box">
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/loader-1.webp" width="110" alt="vodanet logo">
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms">
            <div class="about-two__right">
              <div class="about-two__top">
                <div class="sec-title wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                  <div class="d-flex align-items-center justify-content-start">
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp" alt="sec-title-s-1"
                      title="sec-title-s-1" class="sec-title__img">
                    <h6 class="sec-title__tagline">ABOUT US</h6>
                  </div>
                  <h3 class="sec-title__title">Vision & Mission Statement</h3>
                </div>
                <p class="about-two__top__text">Vision Statement: To become a global leader in digital transformation
                  and business solutions, by enabling organizations to embrace innovation, transformation, and
                  efficiency through cutting-edge technologies and expert advisory services.
                </p>
                <p class="about-two__top__text">Mission Statement: Our mission is to empower organizations to unlock
                  their full potential by providing them with tailored digital transformation and business solutions
                  that address their unique challenges, opportunities, and goals. We are commited to delivering
                  exceptional value through innovation, excellence, and customer-centricity, and to fostering long-term
                  partnerships based on trust, integrity, and results.</p>
              </div>
              <h3>OBJECTIVES</h3>
              <ul class="about-three__list list-unstyled ml-0 pt-1 border-0 icon_absolute">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i> Seeking a Long Term Partnership
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Grow Partnership based on Software and
                  Technology Solutions built around your business challenges
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i> Develop a roadmap of solutions based on your
                  business priorities and focus
                </li>
              </ul>
            </div>
          </div>
        </div>
    </section>
    <!-- About section End -->


    <!-- Blog section Start -->
    <?php include get_template_directory() . '/inc/featured-post.php'; ?>
    <!-- Blog section End -->


    <!-- Contact section Start -->
    <?php include get_template_directory() . '/inc/contact-form.php'; ?>

  </div>
</main>

<?php
get_footer();