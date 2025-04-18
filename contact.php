<?php
/**
 * Template Name: Contact Template
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
			<div class="page-header__bg"></div>
			<div class="container">
				<h2 class="page-header__title">
					Contact </h2><!-- /.page-title -->
				<?php include get_template_directory() . '/inc/breadcrum.php'; ?>
			</div>
		</section>

		<section class="contact-one">
			<div class="container">
				<div class="row gutter-y-30">
					<div class="col-lg-4">
						<div class="contact-one__left">
							<ul class="contact-one__list list-unstyled ml-0">
								<li class="contact-one__list__item">
									<div class="contact-one__list__icon"> <i aria-hidden="true" class="icon-telephone"></i>
									</div>
									<div class="contact-one__list__content"> <span class="contact-one__list__subtitle">Have any
											question?</span>
										<p class="contact-one__list__action">

											<a
												href="tel:<?php echo get_theme_mod('voda_phone'); ?>"><?php echo get_theme_mod('voda_phone'); ?></a>
										</p>
									</div>
								</li>
								<li class="contact-one__list__item">
									<div class="contact-one__list__icon"> <i aria-hidden="true" class=" icon-email2"></i></div>
									<div class="contact-one__list__content"> <span class="contact-one__list__subtitle">Send
											Email</span>
										<p class="contact-one__list__action"><a
												href="mailto:<?php echo get_theme_mod('voda_email'); ?>"><?php echo get_theme_mod('voda_email'); ?></a>
										</p>
									</div>
								</li>
								<li class="contact-one__list__item">
									<div class="contact-one__list__icon"> <i aria-hidden="true" class=" icon-Pin"></i></div>
									<div class="contact-one__list__content"> <span class="contact-one__list__subtitle">Visit
											Anytime</span>
										<p class="contact-one__list__action"><?php echo get_theme_mod('voda_address'); ?></p>
									</div>
								</li>
							</ul>
							<div class="contact-one__thumb"> <img decoding="async"
									src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/contact-1-1.webp"
									alt="contact-1-1" title="contact-1-1"></div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="contact-one__right">
							<div class="contact-one__top">
								<div class="sec-title wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
									<div class="d-flex align-items-center justify-content-start"> <img decoding="async"
											src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
											alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
										<h6 class="sec-title__tagline">CONTACT WITH US</h6>
									</div>
									<h3 class="sec-title__title">Feel Free to Write us Anytime</h3>
								</div>
							</div>
							<div class="contact-one__form contact-form-validated form-one background-base wow fadeInUp"
								data-wow-duration="1500ms">
								<div class="wpcf7 js" id="wpcf7-f1954-p130-o1" lang="en-US" dir="ltr">
									<div class="screen-reader-response">
										<p role="status" aria-live="polite" aria-atomic="true"></p>
										<ul></ul>
									</div>
									<?php echo do_shortcode('[contact-form-7 id="d93fb82" title="Contact form 1"]') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/map.webp" alt="">
			</div>
		</section>

		<section class="client-carousel">
			<div class="container">
				<div class="row">
					<?php
					$args = array(
						'post_type' => 'address',
						'posts_per_page' => -1, // or set a number if you want to limit
						'orderby' => 'date',
						'order' => 'ASC',
					);

					$address_query = new WP_Query($args);

					if ($address_query->have_posts()):
						while ($address_query->have_posts()):
							$address_query->the_post();
							?>

							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="service-one__item address-box">
									<div class="service-one__item__icon">
										<?php the_title(); ?>
									</div>
									<div class="service-one__item__thumb">
										<?php
										if (has_post_thumbnail()):
											the_post_thumbnail('full'); // Adjust size as needed
										endif;
										?>
									</div>
									<div class="service-one__item__content">
										<div class="service-one__item__text">
											<?php the_content(); ?> <!-- Or use the_content() if you want the full content -->
										</div>

									</div>
								</div>
							</div>

						<?php endwhile;
						wp_reset_postdata();
					else:
						echo '<p>No addresses found.</p>';
					endif;
					?>
				</div>
			</div>

		</section>



	</div>

</main>

<?php
get_footer();