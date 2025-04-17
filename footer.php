<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vodanet-wp
 */

?>

<div class="footer-wrapper d-flex flex-column main-footer">


	<div class="main-footer__shape">
		<img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/footer-shape.webp"
			alt="footer-shape" title="footer-shape">
	</div>
	<div class="main-footer__earth">
		<img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/earth-footer.webp"
			alt="earth-footer" title="earth-footer">
	</div>

	<div class="main-footer__top">
		<div class="container">
			<div class="main-footer__top__inner">
				<div class="main-footer__top__logo">
					<a class="footer__logo vodanet-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img loading="lazy" decoding="async" width="150" height="39"
							src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/vodanet2x.svg" alt="vodanet">
					</a>
				</div>
				<div class="main-footer__top__social">
					<a href="https://facebook.com/">
						<i aria-hidden="true" class="fab fa-facebook-f"></i> </a>
					<a href="https://x-twitter.com/">
						<i aria-hidden="true" class=" icon-x-twitter"></i> </a>
					<a href="https://linkedin.com/">
						<i aria-hidden="true" class=" icon-linkedin"></i> </a>
					<a href="https://instagram.com/">
						<i aria-hidden="true" class=" icon-instagram"></i> </a>
				</div>
			</div>
		</div>
	</div>

	<div class="main-footer__middle e-flex e-con-boxed e-con e-child">
		<div class="container">
			<div class="row">


				<!-- /.footer-subscribe-widget -->
				<div class="col-md-4">
					<div class="footer-widget footer-widget--about">
						<h2 class="footer-widget__title">ABOUT</h2>

						<p class="footer-widget__text">Vodanet is dedicated to provide businesses with the
							latest in business applications and technology solutions to drive digital
							transformation.</p>

						<form
							data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e"
							class="footer-widget__newsletter mc-form">
							<input type="email" name="EMAIL" placeholder="Email">
							<button type="submit" class="icon-right-arrow"><span class="sr-only"></span></button>
						</form>
						<div class="mc-form__response"></div>
					</div>
				</div>
				<!-- /.footer-subscribe-widget -->
				<div class="col-md-4">
					<h2 class="footer-widget__title">LINKS</h2>
					<div class="menu-footer-menu-container">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'footer',
							'menu_id' => 'menu-footer-menu',
							'menu_class' => 'list-unstyled footer-widget__links ml-0',
							'container' => false,
						));
						?>

					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-widget footer-widget--contact">
						<h3 class="footer-widget__title">CONTACT</h3>
						<ul class="list-unstyled footer-widget__contact ml-0">
							<li class="footer-widget__contact__item">
								<div class="footer-widget__contact__icon">
									<i aria-hidden="true" class="icon-call   "></i>
								</div>
								<div class="footer-widget__contact__inner">
									<a href="tel:+966-54-1714423" class="footer-widget__contact__text">+966 54
										1714423</a>
								</div>
							</li>
							<li class="footer-widget__contact__item">
								<div class="footer-widget__contact__icon">
									<i aria-hidden="true" class=" icon-Earth"></i>
								</div>
								<div class="footer-widget__contact__inner">
									<a href="mailto:support@vodanetcorp.com"
										class="footer-widget__contact__text">support@vodanetcorp.com</a>
								</div>
							</li>
							<li class="footer-widget__contact__item">
								<div class="footer-widget__contact__icon">
									<i aria-hidden="true" class=" icon-Pin"></i>
								</div>
								<div class="footer-widget__contact__inner">
									<p class="footer-widget__contact__text">Al Aseel Plaza, 3rd Floor Toubah
										Street, Al Sharafeyah Distt, Jeddah, Saudi Arabia</p>
								</div>
							</li>
						</ul>
						<div class="footer-widget__thumb">
							<img decoding="async"
								src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/footer-1-1.webp" alt="footer-1-1"
								title="footer-1-1">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<!-- /.main-footer copyright -->
					<div class="main-footer__bottom">
						<div class="main-footer__bottom__inner">
							<p class="main-footer__copyright">
								© Copyright 2024 by Vodanet
							</p>
						</div><!-- /.main-footer__inner -->
					</div>
				</div>
				<!-- /.main-footer copyright -->
			</div>
		</div>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>