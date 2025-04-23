<?php
/**
 * Template Name: Cloud Application Template
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
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/cloud2.webp);background-position: 50% 40%;">
            </div>
            <div class="container">
                <h2 class="page-header__title">
                    Cloud Application </h2>
                    <?php include get_template_directory() . '/inc/breadcrum.php'; ?>
            </div>
        </section>

        <section id="" class="about-three pb-0 min-h-sec-title">
            <div class="container">
                <div class="sec-title sec-title--one text-center">
                    <!-- <h3 class="sec-title__title">Cloud Application</h3> -->
                    <p>Vodanet offers a wide range of cloud-based applications tailored to meet the growing digital
                        demands in Globally. Our solutions cover Customer Relationship Management (CRM), Mobile
                        Applications, and Customized Web Portals to enhance business efficiency and scalability.</p>
                </div>
                <div class="row gutter-y-30 mb-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-three__left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crm.webp" width="auto"
                                height="100%" alt="" style="object-fit: cover;width: auto;min-height: 280px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-three__right">
                            <div class="about-three__top mb-0">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">01</h6>
                                    </div>
                                    <h3 class="fw-bold border-bottom pb-3">CRM Solutions</h3>
                                    <p class="lh-normal">Enhance customer relationships with powerful CRM platforms
                                        tailored for retail, healthcare, finance, and government sectors:</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                                    <li class="about-three__list__item">
                                        <i aria-hidden="true" class="fas fa-check-circle"></i>Salesforce CRM – <span
                                            style="font-weight: 400;color: #4b4b4b;">Enterprise-level sales
                                            automation and customer engagement.</span>
                                    </li>
                                    <li class="about-three__list__item">
                                        <i aria-hidden="true" class="fas fa-check-circle"></i>Microsoft Dynamics 365
                                        CRM – <span style="font-weight: 400;color: #4b4b4b;">Best for ERP & CRM
                                            integration in corporate and government sectors.</span>
                                    </li>
                                    <li class="about-three__list__item">
                                        <i aria-hidden="true" class="fas fa-check-circle"></i>Zoho CRM – <span
                                            style="font-weight: 400;color: #4b4b4b;">Affordable, user-friendly CRM
                                            for SMEs.</span>
                                    </li>
                                    <li class="about-three__list__item">
                                        <i aria-hidden="true" class="fas fa-check-circle"></i>Odoo CRM – <span
                                            style="font-weight: 400;color: #4b4b4b;">Open-source, highly
                                            customizable CRM solution.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30 mb-5 align-items-center flex-column-reverse flex-md-row">
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <div class="d-flex align-items-center justify-content-start">
                                <img decoding="async"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                <h6 class="sec-title__tagline">02</h6>
                            </div>
                            <h3 class="fw-bold border-bottom pb-3">Cloud ERP & Business Applications</h3>
                            <p class="lh-normal">Transform business operations with cloud-based ERP and business
                                management tools:</p>
                        </div>
                        <ul class="about-three__list list-unstyled ml-0 icon_absolute border-0 pt-1">
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>SAP ERP & Business One –
                                <span style="font-weight: 400;color: #4b4b4b;">Scalable enterprise resource
                                    planning solutions.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Oracle NetSuite – <span
                                    style="font-weight: 400;color: #4b4b4b;">Cloud-based finance, HR, and
                                    inventory management.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Odoo ERP – <span
                                    style="font-weight: 400;color: #4b4b4b;">Open-source ERP with modular
                                    flexibility.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>QuickBooks & Xero – <span
                                    style="font-weight: 400;color: #4b4b4b;">Cloud accounting for SMEs and
                                    enterprises.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>FreshBooks & Zoho Books –
                                <span style="font-weight: 400;color: #4b4b4b;">Simplified cloud-based
                                    bookkeeping & invoicing solutions.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-end">
                        <div class="about-three__left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud.webp" width="auto"
                                height="100%" alt="" style="object-fit: cover;width: auto;min-height: 280px;">
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30 mb-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-three__left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ecommerce.webp"
                                width="auto" height="100%" alt=""
                                style="object-fit: cover;width: auto;min-height: 280px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <div class="d-flex align-items-center justify-content-start">
                                <img decoding="async"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                <h6 class="sec-title__tagline">03</h6>
                            </div>
                            <h3 class="fw-bold border-bottom pb-3">E-Commerce & Marketplace Solutions</h3>
                            <p class="lh-normal">Comprehensive cloud-based solutions for online stores and
                                digital marketplaces:</p>
                        </div>
                        <ul class="about-three__list list-unstyled ml-0 icon_absolute border-0 pt-1">
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Shopify – <span
                                    style="font-weight: 400;color: #4b4b4b;">Scalable cloud-based eCommerce
                                    platform.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Magento (Adobe Commerce) –
                                <span style="font-weight: 400;color: #4b4b4b;">Highly customizable online
                                    shopping solution.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>WooCommerce – <span
                                    style="font-weight: 400;color: #4b4b4b;">WordPress-integrated eCommerce
                                    platform.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Custom B2B & B2C
                                Marketplaces – <span style="font-weight: 400;color: #4b4b4b;">Multi-vendor
                                    platforms tailored for local and global businesses.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Cloud-Based POS Systems –
                                <span style="font-weight: 400;color: #4b4b4b;">Vend, Lightspeed, Square, for
                                    retail and restaurant businesses.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Omnichannel E-commerce –
                                <span style="font-weight: 400;color: #4b4b4b;">Integrated online, in-store, and
                                    mobile shopping experiences.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row gutter-y-30 mb-5 align-items-center flex-column-reverse flex-md-row">
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <div class="d-flex align-items-center justify-content-start">
                                <img decoding="async"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                <h6 class="sec-title__tagline">04</h6>
                            </div>
                            <h3 class="fw-bold border-bottom pb-3">Mobile App Development</h3>
                            <p class="lh-normal">Custom cloud-powered mobile applications for various
                                industries:</p>
                        </div>
                        <ul class="about-three__list list-unstyled ml-0 icon_absolute border-0 pt-1">
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Delivery & Logistics Apps
                                – <span style="font-weight: 400;color: #4b4b4b;">On-demand apps for food
                                    delivery, courier services, fleet tracking.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Healthcare & Telemedicine
                                Apps – <span style="font-weight: 400;color: #4b4b4b;">Secure patient management
                                    & virtual consultations.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Financial & Fintech Apps –
                                <span style="font-weight: 400;color: #4b4b4b;">Cloud-based banking, investments,
                                    and digital wallets.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>HR & Payroll Mobile Apps –
                                <span style="font-weight: 400;color: #4b4b4b;">Mobile solutions for employee
                                    management & payroll automation.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Education & E-learning
                                Apps – <span style="font-weight: 400;color: #4b4b4b;">Cloud-based learning
                                    management systems (LMS) like Moodle & Blackboard.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-end">
                        <div class="about-three__left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile-app.webp"
                                width="auto" height="100%" alt=""
                                style="object-fit: cover;width: auto;min-height: 280px;">
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30 mb-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-three__left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portal.webp"
                                width="auto" height="100%" alt=""
                                style="object-fit: cover;width: auto;min-height: 280px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <div class="d-flex align-items-center justify-content-start">
                                <img decoding="async"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                <h6 class="sec-title__tagline">05</h6>
                            </div>
                            <h3 class="fw-bold border-bottom pb-3">Government & Enterprise Portals</h3>
                            <p class="lh-normal">Cloud-based platforms for corporate, public sector, and smart
                                city services:</p>
                        </div>
                        <ul class="about-three__list list-unstyled ml-0 icon_absolute border-0 pt-1">
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Smart City Portals – <span
                                    style="font-weight: 400;color: #4b4b4b;">Digital solutions for municipal
                                    services & infrastructure management.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Cloud-Based Document
                                Management – <span style="font-weight: 400;color: #4b4b4b;">Secure storage
                                    solutions (Alfresco, SharePoint, M-Files).</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Customer Self-Service
                                Portals – <span style="font-weight: 400;color: #4b4b4b;">Online banking,
                                    telecom, and utility service portals.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Corporate Intranet Portals
                                – <span style="font-weight: 400;color: #4b4b4b;">Enterprise collaboration tools
                                    like Microsoft SharePoint.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Property Management
                                Portals – <span style="font-weight: 400;color: #4b4b4b;">Real estate and rental
                                    management cloud platforms.</span>
                            </li>
                            <li class="about-three__list__item">
                                <i aria-hidden="true" class="fas fa-check-circle"></i>Cloud-Based HR & Payroll
                                Portals – <span style="font-weight: 400;color: #4b4b4b;">Employee benefits,
                                    payroll, and workforce management.</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div><!-- /.container -->
        </section>



        <!-- /.client-carousel -->

        <section id="" class="about-three bg-base">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6">
                        <div class="about-three__left">
                            <div class="about-three__thumb">
                                <div class="about-three__thumb__item about-three__thumb__item--one">
                                    <img decoding="async"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/about-s-3-1.webp"
                                        alt="about-s-3-1" title="about-s-3-1">
                                </div>


                                <div class="about-three__thumb__call">
                                    <div class="about-three__thumb__call__icon">
                                        <i aria-hidden="true" class="icon-chatting-1"></i>
                                    </div>
                                    <div class="about-three__thumb__call__content">
                                        <span class="about-three__thumb__call__text">Call to anytime</span>
                                        <h5 class="about-three__thumb__call__title"><a href="tel:<?php echo get_theme_mod('voda_phone'); ?>">+966
                                                54 1714423</a></h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-three__right">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <h3 class="sec-title__title">Why Choose Vodanet?</h3>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute mb-3">
                                    <li class="about-three__list__item">
                                        <i aria-hidden="true" class="fas fa-check-circle"></i>Industry-Leading
                                        Solutions – Partnering with top cloud service providers.
                                    </li>
                                    <li class="about-three__list__item">
                                        <i aria-hidden="true" class="fas fa-check-circle"></i>Scalability & Security
                                        – Future-proof cloud applications tailored for your business.
                                    </li>
                                    <li class="about-three__list__item">
                                        <i aria-hidden="true" class="fas fa-check-circle"></i>Expert Integration &
                                        Support – Seamless cloud adoption with 24/7 technical assistance.
                                    </li>
                                </ul>
                                <p>Ready to transform your business with cloud applications? Contact us today!</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Contact section Start -->
        <?php include get_template_directory() . '/inc/book-free-form.php'; ?>
        <!-- Contact section End -->

    </div>

</main>

<?php
get_footer();