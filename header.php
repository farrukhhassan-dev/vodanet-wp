<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vodanet-wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Barlow:wght@400;500;600;700;800&display=swap"
		rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site page-wrapper">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'vodanet-wp'); ?></a>

		<div class="top_wrapper">

			<div class="topbar-one">
				<div class="container-fluid">
					<div class="topbar-one__inner">
						<ul class="list-unstyled topbar-one__info ml-0">
							<li class="topbar-one__info__item">
								<i aria-hidden="true" class="topbar-one__info__icon fas fa-map-marker-alt"></i> <?php echo get_theme_mod('voda_address'); ?>
							</li>
							<li class="topbar-one__info__item">
								<i aria-hidden="true" class="topbar-one__info__icon  icon-email"></i>

								<a href="mailto:<?php echo get_theme_mod('voda_email'); ?>"><?php echo get_theme_mod('voda_email'); ?></a>
							</li>
						</ul>
						<div class="topbar-one__right">


							<a href="tel:<?php echo get_theme_mod('voda_phone'); ?>" class="topbar-one__right__call">
								<div class="topbar-one__right__call__icon">
									<i aria-hidden="true" class="icon-telephone"></i>
								</div>

								<p class="topbar-one__right__call__text"><?php echo get_theme_mod('voda_phone'); ?></p>
							</a>

							<div class="topbar-one__social">
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
			</div>

			<header class="main-header main-header--two sticky-header sticky-header--normal">
				<div class="container-fluid">
					<div class="main-header__inner">
						<div class="main-header__logo logo-vodanet">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img decoding="async" width="295" height="80"
									src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/vodanet2x.svg" alt="vodanet">
							</a>

						</div><!-- /.main-header__logo -->
						<div class="main-header__inner__item">
							<nav class="main-header__nav main-menu">
								<div class="menu-main-menu-container">
									<?php
									wp_nav_menu(array(
										'theme_location' => 'menu-1',
										'menu_class' => 'main-menu__list',
										'container' => false,
										'fallback_cb' => false,
									));
									?>
								</div>
							</nav>
							<!-- /.main-header__nav -->
							<div class="main-header__right">
								<div class="main-header__right__btn">
									<a href="<?php echo esc_url(home_url('/')); ?>contact" class="vodanet-btn main-header__btn">Get In
										Touch</a>
								</div>
								<div class="mobile-nav__btn mobile-nav__toggler">
									<span></span> <span></span> <span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="mobile-nav__wrapper">
				<div class="mobile-nav__overlay mobile-nav__toggler"></div>
				<!-- /.mobile-nav__overlay -->
				<div class="mobile-nav__content">
					<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

					<div class="logo-box logo-retina">
						<a href="/" aria-label="logo image">
							<img decoding="async" width="250" height="110"
								src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/vodanet2x-light.svg"
								alt="vodanet" />
						</a>
					</div>
					<!-- /.logo-box -->
					<div class="mobile-nav__container">

					</div>
					<!-- /.mobile-nav__container -->
					<ul class="mobile-nav__contact list-unstyled ml-0">
						<li>
							<i class="fa fa-envelope"></i>
							<a href="mailto:<?php echo get_theme_mod('voda_email'); ?>"><?php echo get_theme_mod('voda_email'); ?></a>
						</li>
						<li>
							<i class="fa fa-phone-alt"></i>
							<a href="tel:+92-3800-8060">
								<?php echo get_theme_mod('voda_phone'); ?> </a>
						</li>
					</ul><!-- /.mobile-nav__contact -->
					<div class="mobile-nav__top">
						<div class="mobile-nav__social">
							<a href="https://facebook.com/" class="fab fa-facebook-f"></a>
							<a href="https://x-twitter.com/" class="fab fa-x-twitter"></a>
							<a href="https://linkedin.com/" class="fab fa-linkedin-in"></a>
							<a href="https://instagram.com/" class="fab fa-instagram"></a>
						</div><!-- /.mobile-nav__social -->
					</div><!-- /.mobile-nav__top -->

				</div>
				<!-- /.mobile-nav__content -->
			</div>

			<div class="search-popup">
				<div class="search-popup__overlay search-toggler"></div>
				<!-- /.search-popup__overlay -->
				<div class="search-popup__content">
					<form role="search" method="get" class="search-popup__form" action="/">
						<input name="s" type="text" id="search" placeholder="Search Here..." />
						<button type="submit" aria-label="search submit" class="vodanet-btn">
							<span class="vodanet-btn__shape"></span><span class="vodanet-btn__shape"></span><span
								class="vodanet-btn__shape"></span><span class="vodanet-btn__shape"></span>
							<span class="vodanet-btn__text"><i class="icon-search"></i></span>
						</button>
					</form>
				</div>
				<!-- /.search-popup__content -->
			</div>
			<!-- /.search-popup -->

			<!-- back-to-top-start -->
			<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
				<span class="scroll-to-top__text">back to top</span>
				<span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
			</a>

		</div>