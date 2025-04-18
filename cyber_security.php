<?php
/**
 * Template Name: Cyber Security Template
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
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cyber-security-sol.webp);background-position: top center;">
                </div>
                <div class="container">
                    <h2 class="page-header__title">
                        Cybersecurity Solutions & Services </h2><!-- /.page-title -->
                        <?php include get_template_directory() . '/inc/breadcrum.php'; ?>
                </div>
            </section>

            <!-- About section Start -->
            <section id="" class="about-three pb-0 min-h-sec-title">
                <div class="container">
                    <div class="sec-title sec-title--one text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cybersecurity-solution.webp" alt="">
                        <h3 class="sec-title__title mt-3 mb-4">Cybersecurity Solutions</h3>
                    </div>
                    <div class="row gutter-y-30 mb-5 border-bottom-col">
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">01</h6>
                                    </div>
                                    <h5 class="fw-bold">Security Risk &amp; Threat Management</h5>
                                    <p class="mb-0 lh-normal">Identify, assess, and mitigate security risks before they
                                        escalate into threats.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Cyber Risk
                                        Assessments &amp; Gap Analysis</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Threat
                                        Intelligence &amp; Detection</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Business
                                        Continuity &amp; Disaster Recovery (BCDR)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">02</h6>
                                    </div>
                                    <h5 class="fw-bold">Security Operations & Incident Response</h5>
                                    <p class="mb-0 lh-normal">Ensure 24/7 monitoring, detection, and rapid response to
                                        cyber threats.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Security Information & Event Management
                                        (SIEM)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Security Orchestration & Automation (SOAR)
                                    </li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Digital Forensics & Incident Handling</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">03</h6>
                                    </div>
                                    <h5 class="fw-bold"> Network &amp;
                                        Endpoint Security</h5>
                                    <p class="mb-0 lh-normal">Protect network infrastructure and endpoints from
                                        cyberattacks.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Next-Gen Firewalls
                                        (NGFW) &amp; Intrusion Prevention Systems (IPS)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Zero Trust Network
                                        Access (ZTNA)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Endpoint Detection
                                        &amp; Response (EDR)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">04</h6>
                                    </div>
                                    <h5 class="fw-bold"> Cloud Security
                                        &amp; Compliance</h5>
                                    <p class="mb-0 lh-normal">Secure your cloud infrastructure while ensuring compliance
                                        with regulatory standards.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Cloud Security
                                        Posture Management (CSPM)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Cloud Workload
                                        Protection (CWP)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Compliance with
                                        NCA, SAMA, ISO 27001, GDPR &amp; PCI-DSS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">05</h6>
                                    </div>
                                    <h5 class="fw-bold"> Identity &amp;
                                        Access Management (IAM)</h5>
                                    <p class="mb-0 lh-normal">Enhance access security through identity verification and
                                        access control.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Multi-Factor
                                        Authentication (MFA)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Privileged Access
                                        Management (PAM)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Single Sign-On
                                        (SSO) &amp; Identity Federation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">06</h6>
                                    </div>
                                    <h5 class="fw-bold"> Application &amp;
                                        Web Security</h5>
                                    <p class="mb-0 lh-normal">Ensure the security of applications against cyber threats.
                                    </p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Secure Software
                                        Development Lifecycle (SDLC)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Web Application
                                        Firewall (WAF)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Penetration
                                        Testing &amp; Code Reviews</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">07</h6>
                                    </div>
                                    <h5 class="fw-bold"> OT &amp; IoT
                                        Security</h5>
                                    <p class="mb-0 lh-normal">Protect operational technology (OT) and Internet of Things
                                        (IoT) environments.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>ICS/SCADA
                                        Security</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>IoT Risk
                                        Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>
            <!-- About section End -->

            <!-- About section Start -->
            <section id="" class="about-three pb-0 min-h-sec-title">
                <div class="container">
                    <div class="sec-title sec-title--one text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cybersecurity-services.webp" alt="">
                        <h3 class="sec-title__title mt-3 mb-4">Cybersecurity Services</h3>
                    </div>
                    <div class="row gutter-y-30 mb-5 border-bottom-col">
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">01</h6>
                                    </div>
                                    <h5 class="fw-bold"> Security Strategy &amp; Roadmap</h5>
                                    <p class="mb-0 lh-normal">Develop tailored cybersecurity roadmaps aligned with your
                                        business needs.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Maturity Assessments
                                        &amp; Gap Analysis</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Cybersecurity Framework
                                        Development</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">02</h6>
                                    </div>
                                    <h5 class="fw-bold"> Cyber Risk Management</h5>
                                    <p class="mb-0 lh-normal">Mitigate cyber risks through proactive security
                                        strategies.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Risk Identification &amp;
                                        Threat Modeling</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Third-Party Risk
                                        Assessments</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">03</h6>
                                    </div>
                                    <h5 class="fw-bold"> Virtual CISO (vCISO) Services</h5>
                                    <p class="mb-0 lh-normal">Gain CISO-level expertise without hiring a full-time
                                        executive.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Security Policy &amp;
                                        Governance Advisory</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Security Awareness &amp;
                                        Training Programs</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">04</h6>
                                    </div>
                                    <h5 class="fw-bold"> Identity &amp; Access Management (IAM) Services</h5>
                                    <p class="mb-0 lh-normal">Implement advanced identity security solutions to prevent
                                        unauthorized access.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Privileged Access
                                        Management (PAM) Deployment</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Multi-Factor
                                        Authentication (MFA) Implementation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">05</h6>
                                    </div>
                                    <h5 class="fw-bold"> Data Protection &amp; Privacy Services</h5>
                                    <p class="mb-0 lh-normal">Secure sensitive business data and ensure compliance with
                                        privacy regulations.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Data Loss Prevention
                                        (DLP) Implementation</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Encryption &amp; Data
                                        Masking Solutions</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">06</h6>
                                    </div>
                                    <h5 class="fw-bold"> Endpoint Security Management</h5>
                                    <p class="mb-0 lh-normal">Protect company devices from malware, ransomware, and
                                        other cyber threats.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Endpoint Detection &amp;
                                        Response (EDR) Solutions</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Mobile Device Management
                                        (MDM) Services</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">07</h6>
                                    </div>
                                    <h5 class="fw-bold"> Security Awareness &amp; Training Programs</h5>
                                    <p class="mb-0 lh-normal">Educate employees on cybersecurity best practices to
                                        reduce human error risks.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Phishing Awareness
                                        Training</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Cyber Hygiene Workshops
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">08</h6>
                                    </div>
                                    <h5 class="fw-bold"> Managed Security Services (MSSP)</h5>
                                    <p class="mb-0 lh-normal">24/7 monitoring and management of security infrastructure.
                                    </p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Managed Detection &amp;
                                        Response (MDR)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Threat Intelligence &amp;
                                        Dark Web Monitoring</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">09</h6>
                                    </div>
                                    <h5 class="fw-bold"> Cloud Security Services</h5>
                                    <p class="mb-0 lh-normal">Ensure end-to-end cloud protection for hybrid, public, and
                                        private clouds.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Cloud Security Posture
                                        Management (CSPM)</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Cloud Workload Protection
                                        (CWP)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">10</h6>
                                    </div>
                                    <h5 class="fw-bold"> Network Security Architecture &amp; Implementation</h5>
                                    <p class="mb-0 lh-normal">Design and deploy secure network architectures for
                                        enterprises.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Firewall &amp; VPN
                                        Deployment</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Zero Trust Network
                                        Security Implementation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">11</h6>
                                    </div>
                                    <h5 class="fw-bold"> Compliance &amp; Regulatory Consulting</h5>
                                    <p class="mb-0 lh-normal">Ensure compliance with ISO 27001, GDPR, PCI-DSS, NCA,
                                        SAMA, and other regulations.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Audit Readiness
                                        Assessments</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Policy &amp; Procedure
                                        Development</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">12</h6>
                                    </div>
                                    <h5 class="fw-bold"> Security Architecture &amp; Implementation</h5>
                                    <p class="mb-0 lh-normal">Build secure IT infrastructures with industry-leading best
                                        practices.</p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Enterprise Security
                                        Architecture Design</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Cloud Security
                                        Implementation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">13</h6>
                                    </div>
                                    <h5 class="fw-bold"> Cybersecurity Incident Response &amp; Digital Forensics</h5>
                                    <p class="mb-0 lh-normal">Investigate cyber incidents and prevent future breaches.
                                    </p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Incident Handling &amp;
                                        Investigation</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Threat Containment &amp;
                                        Root Cause Analysis</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-three__top mb-2">
                                <div class="sec-title">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                                            alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                                        <h6 class="sec-title__tagline">14</h6>
                                    </div>
                                    <h5 class="fw-bold"> Penetration Testing &amp; Vulnerability Assessment</h5>
                                    <p class="mb-0 lh-normal">Identify security vulnerabilities before attackers exploit
                                        them.
                                    </p>
                                </div>
                                <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>External
                                        &amp; Internal
                                        Penetration Testing</li>
                                    <li class="about-three__list__item"><i aria-hidden="true"
                                            class="fas fa-check-circle"></i>Red
                                        Teaming &amp; Ethical
                                        Hacking Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section End -->

            <section id="" class="about-three bg-base">
                <div class="container">
                    <div class="row gutter-y-30">
                        <div class="col-lg-6">
                            <div class="about-three__left">
                                <div class="about-three__thumb">
                                    <div class="about-three__thumb__item about-three__thumb__item--one">
                                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/about-s-3-1.webp"
                                            alt="about-s-3-1" title="about-s-3-1">
                                    </div>


                                    <div class="about-three__thumb__call">
                                        <div class="about-three__thumb__call__icon">
                                            <i aria-hidden="true" class="icon-chatting-1"></i>
                                        </div>
                                        <div class="about-three__thumb__call__content">
                                            <span class="about-three__thumb__call__text">Call to anytime</span>
                                            <h5 class="about-three__thumb__call__title"><a
                                                    href="tel:<?php echo get_theme_mod('voda_phone'); ?>"><?php echo get_theme_mod('voda_phone'); ?></a></h5>
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
                                            <i aria-hidden="true" class="fas fa-check-circle"></i>Comprehensive Security
                                            Services – <span style="font-weight: 300;">Covering everything from risk assessments to incident response.
                                        </span></li>
                                        <li class="about-three__list__item">
                                            <i aria-hidden="true" class="fas fa-check-circle"></i>24/7 Security
                                            Monitoring & Threat Detection – <span style="font-weight: 300;">Ensuring proactive defense against
                                            cyberattacks.
                                        </span></li>
                                        <li class="about-three__list__item"><i aria-hidden="true" class="fas fa-check-circle"></i> Regulatory Compliance Expertise – <span style="font-weight: 300;">Helping
                                            businesses comply with international and regional standards.</span></li>
                                        <li class="about-three__list__item"><i aria-hidden="true" class="fas fa-check-circle"></i> Certified Cybersecurity
                                        Experts – <span style="font-weight: 300;">Backed by industry-leading cybersecurity certifications.</span></li>
                                    </ul>
                                </div>
                                <p class="about-three__top__text">Protect your business with Vodanet’s advanced cybersecurity solutions. Contact us today to schedule a consultation and enhance your security posture.
                                </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact section Start -->
            <?php include get_template_directory() . '/inc/contact-form.php'; ?>
            <!-- Contact section End -->



        </div>

</main>

<?php
get_footer();