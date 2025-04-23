<?php
/**
 * Template Name: IT Product Template
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
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/it-product.webp);background-position: bottom center;">
      </div>
      <div class="container">
        <h2 class="page-header__title">
          IT Product </h2><!-- /.page-title -->
          <?php include get_template_directory() . '/inc/breadcrum.php'; ?>
      </div>
    </section>

    <div id="partners" class="client-carousel client-carousel--one">
      <div class="container">
        <!-- <div class="sec-title sec-title--one text-center">
            <h3 class="sec-title__title">Tech Brands -  Digital Solutions</h3>
          </div> -->
        <div class="row g-5 justify-content-center">
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/0.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Access Point</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/1.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Router</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/2.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Server</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/3.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Video Surveillance</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/4.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Switch</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/5.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">IP Phone</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/6.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Wireless Controller</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/7.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Video Conferencing Kit</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/8.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">SSD</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/9.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Memory</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/10.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Chassis</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/11.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Security Appliance</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/12.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Server Cabinets</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/13.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Work Stations</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/14.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Laptops</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 text-center scroll">
              <div class="card-body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdpro/15.webp"
                  class="img-fluid" alt="..."></div>
              <div class="card-footer">
                <p class="mb-0 fs-5">Cables</p>
              </div>
            </div>
          </div>

        </div><!-- /.thm-owl__slider -->
      </div><!-- /.container -->
    </div>

    <!-- /.client-carousel -->


    <div id="client" class="client-carousel client-carousel--one ">
      <div class="container">
        <div class="sec-title sec-title--one text-center">
          <h3 class="sec-title__title">Brands</h3>
        </div>
        <div class="row g-5 justify-content-center">
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/cisco.svg" alt="Cisco"
                title="Cisco"> </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/juniper.svg" alt="Juniper"
                title="Juniper">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/fortinet.svg" alt="Fortinet"
                title="Fortinet">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/aruba.svg" alt="Aruba"
                title="Aruba"> </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/logo-1-hp.webp" alt="Mikrotik"
                title="Mikrotik">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/dell.svg" alt="APC" title="APC">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/ubiquiti.svg" alt="Ubiquiti"
                title="Ubiquiti">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/netgear.svg" alt="epson"
                title="epson">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/avaya.webp" alt="Jabra"
                title="Jabra"> </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/yealink.webp" alt="Zebra"
                title="Zebra"> </div>
          </div>

          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/grandstream.webp" alt="Ruckus"
                title="Ruckus">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/hikvision-logo.svg" alt="mellanox"
                title="mellanox">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/dahua.webp" alt="Broadcom"
                title="Broadcom">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/apc.webp" alt="intel"
                title="intel">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/palo-alto.svg" alt="Seagate"
                title="Seagate">
            </div>
          </div>
          <div class="col-md-3">
            <div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"><img
                class="brand img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/sonic.webp" alt="avaya"
                title="avaya">
            </div>
          </div>


        </div><!-- /.thm-owl__slider -->
      </div><!-- /.container -->
    </div>


    <!-- Contact section Start -->
    <?php include get_template_directory() . '/inc/request-quote-form.php'; ?>
    <!-- Contact section End -->

  </div>

</main>

<?php
get_footer();