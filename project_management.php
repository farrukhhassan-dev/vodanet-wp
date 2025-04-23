<?php
/**
 * Template Name: Project Management Template
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
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/project-mang.webp);background-position: center;">
      </div>
      <div class="container">
        <h2 class="page-header__title">
          Project Management </h2>
        <?php include get_template_directory() . '/inc/breadcrum.php'; ?>
      </div>
    </section>

    <section id="" class="about-three pb-0 min-h-sec-title">
      <div class="container">
        <div class="sec-title sec-title--one text-center">

          <h3 class="sec-title__title mt-3 mb-4">Streamlining Project Success, From Concept to Completion
          </h3>
          <p>At VODANET, we provide comprehensive project management services that ensure your projects
            are
            executed with precision, efficiency, and strategic alignment. Our team of experts helps
            businesses
            navigate the complexities of project management, delivering impactful results while staying
            on time and
            within budget.</p>
          <p>Whether you're launching a new initiative, expanding operations, or driving digital
            transformation, our
            services cater to your specific needs, ensuring seamless execution and high-quality
            outcomes.</p>
          <div class="d-flex align-items-center gap-5 justify-content-between mb-5 border-top border-bottom py-3">
            <a class="vodanet-btn" href="#our_project">Our Project Management Services</a>
            <a class="vodanet-btn" href="#project_manag_training">Project Management Training & Certifications</a>
            <a class="vodanet-btn" href="#project_manag_staff">Project Management Staff Augmentation</a>
          </div>
        </div>
        <div class="sec-title sec-title--one text-center" id="our_project">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-2.webp" alt="">
          <h3 class="sec-title__title mt-3 mb-4">Our Project Management Services</h3>
        </div>
        <div class="row gutter-y-30 mb-5 align-items-start">
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">01</h6>
                </div>
                <h5 class="fw-bold">End-to-End Project Life-cycle Management</h5>
                <p class="lh-normal">We manage every phase of your project, from initiation to
                  closure, ensuring all milestones are met and the project stays on track.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">02</h6>
                </div>
                <h5 class="fw-bold">Project Planning & Scheduling</h5>
                <p class="lh-normal">We help you plan effectively with tools like Gantt Charts and
                  Work Breakdown Structures (WBS), setting clear timelines and deliverables.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">03</h6>
                </div>
                <h5 class="fw-bold">Project Governance & Compliance</h5>
                <p class="lh-normal">Establish PMO frameworks, ensure regulatory alignment, and
                  maintain compliance throughout the project lifecycle to avoid costly risks.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">04</h6>
                </div>
                <h5 class="fw-bold">Agile & Scrum Implementation</h5>
                <p class="lh-normal">We specialize in Agile transformations, Sprint planning, and
                  Scrum methodology, fostering flexible and efficient workflows.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">05</h6>
                </div>
                <h5 class="fw-bold">Risk Management & Mitigation Planning</h5>
                <p class="lh-normal">Identify potential risks early and implement mitigation
                  strategies to minimize disruption and safeguard project success.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">06</h6>
                </div>
                <h5 class="fw-bold">Cost Control & Budget Management</h5>
                <p class="lh-normal">We manage your project’s financials, keeping a close eye on
                  cost, resource allocation, and delivering value within the set budget.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">07</h6>
                </div>
                <h5 class="fw-bold">Change Management & Business Transformation</h5>
                <p class="lh-normal">Ensure smooth transitions and transformational success with our
                  expert change management strategies.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">08</h6>
                </div>
                <h5 class="fw-bold">Stakeholder Management & Communication Strategy</h5>
                <p class="lh-normal">We prioritize effective communication with stakeholders,
                  keeping them informed and engaged throughout the project journey.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">09</h6>
                </div>
                <h5 class="fw-bold">Quality Assurance & Performance Monitoring</h5>
                <p class="lh-normal">Deliver quality outputs by setting performance benchmarks and
                  regular monitoring, ensuring all project standards are met.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">10</h6>
                </div>
                <h5 class="fw-bold">Vendor & Contract Management</h5>
                <p class="lh-normal">We assist in evaluating suppliers, negotiating contracts, and
                  ensuring service level agreements (SLAs) are met to drive project success.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">11</h6>
                </div>
                <h5 class="fw-bold">Project Documentation & Reporting</h5>
                <p class="lh-normal">Stay informed with KPI dashboards, progress reports, and
                  comprehensive project audits, providing transparency and accountability.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">12</h6>
                </div>
                <h5 class="fw-bold">Enterprise Project Portfolio Management (PPM)</h5>
                <p class="lh-normal">Manage multiple projects effectively with advanced PPM
                  solutions, aligning all projects with strategic goals.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">13</h6>
                </div>
                <h5 class="fw-bold">Digital Project Management Solutions</h5>
                <p class="lh-normal">Leverage powerful project management tools such as JIRA,
                  Microsoft Project, Primavera, and SAP PPM for seamless project execution.</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
    </section>

    <section id="" class="about-three pb-0 min-h-sec-title">
      <div class="container">

        <div class="sec-title sec-title--one text-center" id="project_manag_training">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-1.webp" alt="">
          <h3 class="sec-title__title mt-3 mb-4">Project Management Training & Certifications</h3>
          <p class="mb-1 lead"><span style="font-weight: 600;">Building Expertise for the Leaders of
              Tomorrow</span></p>
          <p>To support your growth, we offer training programs and certifications tailored to various
            industries and methodologies. Equip your team with the necessary skills to lead projects
            efficiently and successfully.
          </p>
        </div>
        <div class="row gutter-y-30 mb-5 align-items-start">
          <div class="col-lg-6">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">01</h6>
                </div>
                <h5 class="fw-bold">Certification & Methodology-Based Training</h5>
              </div>
              <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>PMP (Project Management
                  Professional) – <span style="font-weight: 400;color: #4b4b4b;">PMI
                    Standard</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>PRINCE2 Certification –
                  <span style="font-weight: 400;color: #4b4b4b;">Foundation & Practitioner
                    Level</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Agile & Scrum Master
                  Certification – <span style="font-weight: 400;color: #4b4b4b;">CSM, SAFe
                    Agilist</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Lean Six Sigma
                  Certification – <span style="font-weight: 400;color: #4b4b4b;">Yellow, Green,
                    and Black Belt</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Microsoft Project &
                  Primavera Training – <span style="font-weight: 400;color: #4b4b4b;">Project
                    Scheduling & Resource Allocation</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>ITIL Training – <span
                    style="font-weight: 400;color: #4b4b4b;">Service
                    Management Framework</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Certified Business Process
                  Professional (CBPP) – <span style="font-weight: 400;color: #4b4b4b;">BPM Best
                    Practices</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Risk Management
                  Certification – <span style="font-weight: 400;color: #4b4b4b;">PMI-RMP, ISO
                    31000</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">02</h6>
                </div>
                <h5 class="fw-bold">Industry-Specific Project Management Training</h5>
                <p lang="lh-normal">We offer specialized training tailored to the nuances of
                  different industries:</p>
              </div>
              <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Construction Project
                  Management – <span style="font-weight: 400;color: #4b4b4b;">FIDIC Contracts,
                    Primavera P6</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Healthcare Project
                  Management – <span style="font-weight: 400;color: #4b4b4b;">Hospital Expansion,
                    Digital Health PMO</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>IT & Software Project
                  Management – <span style="font-weight: 400;color: #4b4b4b;">Agile, DevOps, Cloud
                    Migration Projects</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Oil & Gas Project
                  Management – <span style="font-weight: 400;color: #4b4b4b;">EPCM, Asset
                    Integrity, Risk-Based PMO</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Government &
                  Infrastructure Project Management – <span style="font-weight: 400;color: #4b4b4b;">Smart Cities, GIGA
                    Projects (NEOM,
                    Vision
                    2030)</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
    </section>

    <section id="" class="about-three pb-0 min-h-sec-title" >
      <div class="container">

        <div class="sec-title sec-title--one text-center" id="project_manag_staff">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-3.webp" alt="">
          <h3 class="sec-title__title mt-3 mb-4">Project Management Staff Augmentation</h3>
          <p class="mb-1 lead"><span style="font-weight: 600;">Access Top-Tier Talent to Lead Your
              Projects
            </span></p>
          <p>At VODANET, we provide highly skilled project management professionals to handle projects
            across various industries, whether you're managing a small-scale initiative or large-scale
            mega projects.</p>
        </div>
        <div class="row gutter-y-30 mb-5 align-items-start">
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">01</h6>
                </div>
                <h5 class="fw-bold">Senior & Leadership Roles</h5>
              </div>
              <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Project Director
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Head of Project Management
                  Office (PMO)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Program Manager
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Senior Project Manager
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">02</h6>
                </div>
                <h5 class="fw-bold">Project Management Experts</h5>
              </div>
              <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Project Manager (PMP /
                  PRINCE2 Certified)
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Agile Coach / Scrum Master
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Business Process
                  Consultant
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Lean Six Sigma Expert
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-three__top mb-2">
              <div class="sec-title">
                <div class="d-flex align-items-center justify-content-start">
                  <img decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/sec-title-s-1.webp"
                    alt="sec-title-s-1" title="sec-title-s-1" class="sec-title__img">
                  <h6 class="sec-title__tagline">02</h6>
                </div>
                <h5 class="fw-bold">Technical & Industry-Specific Project Roles</h5>
              </div>
              <ul class="about-three__list list-unstyled ml-0 icon_absolute">
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Construction Project
                  Manager – <span style="font-weight: 400;color: #4b4b4b;">MEP, Civil, Infrastructure PMs</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>IT Project Manager – <span
                    style="font-weight: 400;color: #4b4b4b;">Software, Cloud, Cybersecurity PMs</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>ERP Project Manager – <span
                    style="font-weight: 400;color: #4b4b4b;">SAP, Oracle, Microsoft Dynamics PMs</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Oil & Gas Project Engineer – <span
                    style="font-weight: 400;color: #4b4b4b;">Upstream & Downstream PMs</span>
                </li>
                <li class="about-three__list__item">
                  <i aria-hidden="true" class="fas fa-check-circle"></i>Government & Smart Cities PM – <span
                    style="font-weight: 400;color: #4b4b4b;">Vision 2030 Mega Projects (NEOM, Red Sea, Qiddiya)</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
    </section>


    <!-- Contact section Start -->
    <?php include get_template_directory() . '/inc/book-free-form.php'; ?>
    <!-- Contact section End -->

  </div>

</main>

<?php
get_footer();