<?php
/**
 * Template Name: Brands Template
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
				<div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/brands-banner.webp);background-position: top center;"></div>
				<div class="container">
					<h2 class="page-header__title">
						Popular Brands we Carry </h2><!-- /.page-title -->
						<?php include get_template_directory() . '/inc/breadcrum.php'; ?>
				</div>
			</section>

			<div id="partners" class="client-carousel client-carousel--one brand-bg">
				<div class="container">
					<div class="sec-title sec-title--one text-center">
						<h3 class="sec-title__title">Tech Brands -  Digital Solutions</h3>
					</div>
					<div class="row g-5 justify-content-center">

						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/dynamics-365.webp" alt=""
									class="brand-img"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/Oracle-logo.webp" alt=""
									class="brand-img"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/power-bi-logo.webp" alt=""
									class="brand-img"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/Logos-28.webp" alt="" class="brand-img">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/odoo-logo.webp" alt=""
									class="brand-img"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/woo.webp" alt="" class="brand-img">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/Shopify-logo.webp" alt=""
									class="brand-img"> </div>
						</div>



					</div><!-- /.thm-owl__slider -->
				</div><!-- /.container -->
			</div>


			<div id="client" class="client-carousel client-carousel--one ">
				<div class="container">
					<div class="sec-title sec-title--one text-center">
						<h3 class="sec-title__title">Tech Brands - Infrastructure Solutions</h3>
					</div>
					<div class="row g-5 justify-content-center">
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/cisco.svg" alt="Cisco" title="Cisco"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/juniper.svg" alt="Juniper" title="Juniper"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/hpe.svg" alt="HPE" title="HPE"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/fortinet.svg" alt="Fortinet" title="Fortinet">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/mikrotik.svg" alt="Mikrotik" title="Mikrotik">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/apc.webp" alt="APC" title="APC">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/ubiquiti.svg" alt="Ubiquiti" title="Ubiquiti">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/dell.svg" alt="Dell" title="Dell"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/epson.webp" alt="epson" title="epson">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/jabra.svg" alt="Jabra" title="Jabra"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/zebra.svg" alt="Zebra" title="Zebra"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/aruba.svg" alt="Aruba" title="Aruba"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/ruckus.svg" alt="Ruckus" title="Ruckus"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/mellanox.webp" alt="mellanox" title="mellanox">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/broadcom.svg" alt="Broadcom" title="Broadcom">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/qlogic.webp" alt="Broadcom" title="Broadcom">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/intel.webp" alt="intel" title="intel">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/seagate.svg" alt="Seagate" title="Seagate"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"><img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/avaya.webp" alt="avaya" title="avaya">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/kodak.webp" alt="kodak" title="kodak">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/lenovo.webp" alt="lenovo" title="lenovo">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/axis.svg" alt="Axis" title="Axis"> </div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
									class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/palo-alto.svg" alt="Palo-Alto" title="Palo-Alto">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/asus.webp" alt="asus" title="asus">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/dlink.webp" alt="dlink" title="dlink">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/teltonika.svg" alt="Teltonika" title="Teltonika">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/rackmount.webp" alt="rackmount" title="rackmount">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/allen.webp" alt="allen" title="allen">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/fluke.webp" alt="fluke" title="fluke">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/toshiba.webp" alt="toshiba" title="toshiba">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/star-micronics-logo.webp" alt="star-micronics" title="star-micronics">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/tripplite.webp" alt="tripplite" title="tripplite">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/amd.webp" alt="amd" title="amd">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card h-100 d-flex align-items-center justify-content-center p-4 border-0"> <img
								class="brand img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands/sonic.webp" alt="sonic" title="sonic">
							</div>
						</div>

					</div><!-- /.thm-owl__slider -->
				</div><!-- /.container -->
			</div>

			<!-- /.client-carousel -->





			<!-- Contact section Start -->
			<?php include get_template_directory() . '/inc/contact-form.php'; ?>


		</div>

</main>

<?php
get_footer();