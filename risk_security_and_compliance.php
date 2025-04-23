<?php
/**
 * Template Name: Risk, Security & Compliance Template
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
          style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/risk.webp);background-position: 50% 40%;">
        </div>
        <div class="container">
          <h2 class="page-header__title">
            Risk, Security & Compliance </h2>
            <?php include get_template_directory() . '/inc/breadcrum.php'; ?>
        </div>
      </section>

      <div class="container py-5">
        <div class="sec-title sec-title--one text-center">
          <h3 class="sec-title__title mt-3 mb-4">Fortifying Businesses with Trust, Resilience, and Global Compliance
          </h3>
          <p>In today’s evolving digital ecosystem, organizations face growing pressure to safeguard information,
            maintain regulatory compliance, and build operational resilience. At Vodanet, we help you face these
            challenges with confidence.</p>
          <p>Our Risk, Security & Compliance division delivers a broad spectrum of services that combine global
            best practices, regional regulations, and industry-specific expertise to protect your digital assets and
            enable sustainable growth.</p>
          <p>We serve clients across critical sectors — finance, healthcare, government, telecom, and enterprise — with
            custom-tailored solutions that empower organizations to operate securely and confidently in a data-
            driven world.
        </div>
        <div class="sec-title sec-title--one text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/risk.webp" alt="">
          <h3 class="sec-title__title mt-3 mb-4">Our Core Services</h3>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i class="bi section-icon me-2 bi-credit-card"></i>
                Payment Card Industry (PCI) Compliance</h3>
              <p class="lh-normal mb-3">Stay secure and compliant in a cashless world.</p>
              <p class="lh-normal mb-3">We help businesses meet the highest standards in payment security with
                compliance
                services for:</p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>PCI DSS (Data Security Standard)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>PCI ASV (Approved Scanning Vendor)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>PCI PIN, PCI 3DS, and PCI SSF
                </li>
              </ul>
              <p class="lh-normal mb-3 mt-4"><strong>Our support includes:</strong></p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Gap assessments & remediation
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Documentation and audit readiness
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Ongoing compliance monitoring
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Liaison with Qualified Security Assessors (QSAs)
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i
                  class="bi section-icon me-2 bi-file-earmark-text"></i> ISO/IEC Certification Services</h3>
              <p class="lh-normal mb-3">Achieve internationally recognized standards.</p>
              <p class="lh-normal mb-3">We support your journey to ISO/IEC 27001 and other key certifications with
                end-to-end
                guidance — from implementation to certification and maintenance.</p>
              <p class="lh-normal mb-3 mt-4"><strong>We provide:</strong></p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Risk-based implementation support
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>ISMS (Information Security Management System)
                  setup
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Internal audit readiness
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Policy and controls documentation
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i class="bi section-icon me-2 bi-search"></i> Offensive
                Security Services</h3>
              <p class="lh-normal mb-3">Think like an attacker. Act like a defender.</p>
              <p class="lh-normal mb-3">Our ethical hacking and penetration testing services simulate real-world threats
                using
                advanced red teaming and vulnerability assessments to proactively detect weaknesses.</p>
              <p class="lh-normal mb-3 mt-4"><strong>We offer:</strong></p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Web & mobile app testing
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Network infrastructure testing
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Red Team engagements
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Social engineering assessments
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i class="bi section-icon me-2 bi-shield-lock"></i> Data
                Protection & Privacy</h3>
              <p class="lh-normal mb-3">Navigate global privacy frameworks with ease.</p>
              <p class="lh-normal mb-3">Our experts help you align with regional and international data privacy
                regulations such
                as:</p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Australian Privacy Principles (APPs)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Bahrain Personal Data Protection Law (PDPL)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>GDPR & other global standards
                </li>
              </ul>
              <p class="lh-normal mb-3 mt-4"><strong>Our services include:</strong></p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Data mapping & classification
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Policy development
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>DPO advisory
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Privacy impact assessments (PIAs)
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i class="bi section-icon me-2 bi-tools"></i>
                Cybersecurity Services</h3>
              <p class="lh-normal mb-3">Build a strong defense against evolving cyber threats.</p>
              <p class="lh-normal mb-3">We implement proactive strategies and ensure compliance with local and regional
                cybersecurity frameworks, including:</p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>SAMA Cybersecurity Framework
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Capital Market Authority (CMA) Regulations
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>National Cybersecurity Authority (NCA) Standards
                </li>
              </ul>
              <p class="lh-normal mb-3 mt-4"><strong>Services include:</strong></p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Governance, Risk & Compliance (GRC) advisory
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Cyber maturity assessments
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Security architecture reviews
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Audit and incident readiness
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i class="bi section-icon me-2 bi-lightbulb"></i>
                Cybersecurity Solutions</h3>
              <p class="lh-normal mb-3">Customized technologies that protect and scale with you.</p>
              <p class="lh-normal mb-3">We offer turnkey cybersecurity solutions aligned with your unique risk profile,
                business
                size, and sectoral needs.</p>
              <p class="lh-normal mb-3 mt-4"><strong>Solutions include:</strong></p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>SIEM (Security Information & Event Management)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Endpoint Detection & Response (EDR)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Identity & Access Management (IAM)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Cloud Security Controls
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i class="bi section-icon me-2 bi-mortarboard"></i>
                Cybersecurity Awareness Training</h3>
              <p class="lh-normal mb-3">Empower your team to become the first line of defense.</p>
              <p class="lh-normal mb-3">Through interactive training sessions and simulations, we help build cyber
                awareness and
                response capabilities across your workforce.</p>
              <p class="lh-normal mb-3 mt-4"><strong>Topics we cover:</strong></p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Phishing & social engineering
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Password hygiene & data handling
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Insider threats
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Incident reporting protocols
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i class="bi section-icon me-2 bi-briefcase"></i> SWIFT
                Compliance Services</h3>
              <p class="lh-normal mb-3">Stay ahead of financial cyber regulations.</p>
              <p class="lh-normal mb-3">We guide financial institutions in achieving and maintaining compliance with
                SWIFT
                Customer Security Program (CSP) requirements.</p>
              <p class="lh-normal mb-3">Our approach includes:</p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Gap assessments
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Implementation roadmaps
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Control strengthening
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Annual attestations
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i
                  class="bi section-icon me-2 bi-exclamation-triangle"></i> Risk Assessment & Business Continuity</h3>
              <p class="lh-normal mb-3">Identify risks. Protect operations. Ensure resilience.</p>
              <p class="lh-normal mb-3">We provide holistic risk assessment and Business Continuity Management (BCM)
                planning to
                help organizations remain agile in the face of disruption.</p>
              <p class="lh-normal mb-3 mt-4"><strong>Services include:</strong></p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Enterprise risk assessments
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Business Impact Analysis (BIA)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Continuity & disaster recovery planning
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Tabletop exercises and drills
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i class="bi section-icon me-2 bi-seedling"></i> ESG
                Advisory & Technology Consulting</h3>
              <p class="lh-normal mb-3">Responsible business is sustainable business.</p>
              <p class="lh-normal mb-3">We integrate Environmental, Social, and Governance (ESG) goals into risk and
                compliance
                strategies to boost transparency, investor trust, and long-term value.</p>
              <p class="lh-normal mb-3 mt-4"><strong>Our services include:</strong></p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>ESG risk profiling
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Digital ESG tools and dashboards
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Regulatory reporting support
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Stakeholder alignment strategies
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i class="bi section-icon me-2 bi-cloud"></i> Office 365
                Security Assessment</h3>
              <p class="lh-normal mb-3">Secure your cloud collaboration environment.</p>
              <p class="lh-normal mb-3">We evaluate and enhance your Microsoft 365 security posture, helping you
                minimize
                exposure while embracing digital transformation.</p>
              <p class="lh-normal mb-3 mt-4"><strong>Assessment areas:</strong></p>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Access controls and MFA
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Data loss prevention (DLP)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Threat protection setup
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Security Score improvement roadmap
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-block mb-5">
              <h3 class="fw-bold border-bottom border-top py-3"><i class="bi section-icon me-2 bi-compass"></i>
                Industries We Serve</h3>
              <ul class="about-three__list list-unstyled ml-0 mb-0 icon_absolute border-0 pt-1">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Banking & Financial Services
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Healthcare & Life Sciences
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Government & Defense
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Telecom & Technology
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Education & Public Sector
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- /.client-carousel -->

      <section id="" class="about-three bg-base">
        <div class="container">
          <div class="row gutter-y-30">
            <div class="col-lg-6">
              <div class="about-three__left">
                <div class="about-three__thumb">
                  <div class="about-three__thumb__item about-three__thumb__item--one">
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/about-s-3-1.webp" alt="about-s-3-1"
                      title="about-s-3-1">
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
                    <h3 class="sec-title__title">Why Choose Vodanet?</h3>
                  </div>
                  <ul class="about-three__list list-unstyled ml-0 icon_absolute mb-3">
                    <li class="about-three__list__item">
                      <i aria-hidden="true" class="fas fa-check-circle"></i>📊 Data-driven
                      strategies, creative execution
                    </li>
                    <li class="about-three__list__item">
                      <i aria-hidden="true" class="fas fa-check-circle"></i>📱 Omnichannel
                      presence: Search, Social, Influencers, Content
                    </li>
                    <li class="about-three__list__item">
                      <i aria-hidden="true" class="fas fa-check-circle"></i>🚀 ROI-focused with
                      real, measurable growth
                    </li>
                    <li class="about-three__list__item">
                      <i aria-hidden="true" class="fas fa-check-circle"></i>🎯 Personalized
                      solutions based on your business goals
                    </li>
                    <li class="about-three__list__item">
                      <i aria-hidden="true" class="fas fa-check-circle"></i>💼 Trusted by
                      startups, enterprises & global brands
                    </li>
                  </ul>
                  <p class="lh-normal mb-3">Ready to amplify your digital presence?<br>
                    Let Vodanet take your brand to the next level with customized marketing
                    strategies that deliver results.</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact section Start -->
      <?php include get_template_directory() . '/inc/book-free-form.php'; ?>

    </div>

</main>

<?php
get_footer();