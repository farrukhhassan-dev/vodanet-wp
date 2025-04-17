<?php
/**
 * Template Name: Business Process Template
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
				<div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/group-business-people-working-together-meeting-room.webp);background-position: top center;"></div>
				<div class="container">
					<h2 class="page-header__title">
						Business Process </h2><!-- /.page-title -->
						<?php include get_template_directory() . '/inc/breadcrum.php'; ?>
				</div>
			</section>

			<!-- About section Start -->
			<section id="about" class="about-three">
				<div class="container">
					<div class="row gutter-y-30 mb-5 align-items-center">
						<div class="col-lg-4">
							<div class="about-three__left">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/corporate-training.webp" width="100%" alt="">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="about-three__right">
								<div class="about-three__top mb-2">
									<div class="sec-title">
										<div class="d-flex align-items-center justify-content-start">
											<img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
												alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
											<h6 class="sec-title__tagline">01</h6>
										</div>
										<h3 class="sec-title__title">Corpotate Trainings</h3>
									</div>
									<p class="about-three__top__text">Our company specializes in providing comprehensive
										business solutions that help organizations achieve their goals through
										digitaltransformation. We offer a range of services including process
										automation, business applications, compute infrastructure, AI Solutions,and
										outsourcing of digital services.</p>
								</div>
								<div class="about-three__link">
									<a href="<?php echo esc_url(home_url('/')); ?>corpotate-trainings" class="about-three__link__btn vodanet-btn vodanet-btn--base">
										<span>Read More</span>
									</a>
								</div>

							</div>
						</div>
					</div>
					<div class="row gutter-y-30 mb-5 align-items-center">

						<div class="col-lg-8 text-md-end">
							<div class="about-three__right">
								<div class="about-three__top mb-2">
									<div class="sec-title">
										<div class="d-flex align-items-center justify-content-md-end justify-content-start">
											<img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
												alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
											<h6 class="sec-title__tagline">02</h6>
										</div>
										<h3 class="sec-title__title">Staff Augment</h3>
									</div>
									<p class="about-three__top__text">Our company specializes in providing comprehensive
										business solutions that help organizations achieve their goals through
										digitaltransformation. We offer a range of services including process
										automation, business applications, compute infrastructure, AI Solutions,and
										outsourcing of digital services.</p>
								</div>
								<div class="about-three__link">
									<a href="<?php echo esc_url(home_url('/')); ?>staff-augment" class="about-three__link__btn vodanet-btn vodanet-btn--base">
										<span>Read More</span>
									</a>
								</div>

							</div>
						</div>
						<div class="col-lg-4">
							<div class="about-three__left">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff-agu.webp" width="100%" alt="">
							</div>
						</div>
					</div>
					<div class="row gutter-y-30 mb-5 align-items-center">
						<div class="col-lg-4">
							<div class="about-three__left">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-mang.webp" width="100%" alt="">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="about-three__right">
								<div class="about-three__top mb-2">
									<div class="sec-title">
										<div class="d-flex align-items-center justify-content-start">
											<img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
												alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
											<h6 class="sec-title__tagline">03</h6>
										</div>
										<h3 class="sec-title__title">Project Management</h3>
									</div>
									<p class="about-three__top__text">Our company specializes in providing comprehensive
										business solutions that help organizations achieve their goals through
										digitaltransformation. We offer a range of services including process
										automation, business applications, compute infrastructure, AI Solutions,and
										outsourcing of digital services.</p>
								</div>
								<div class="about-three__link">
									<a href="<?php echo esc_url(home_url('/')); ?>project-management" class="about-three__link__btn vodanet-btn vodanet-btn--base">
										<span>Read More</span>
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- About section End -->



		</div>

</main>

<?php
get_footer();