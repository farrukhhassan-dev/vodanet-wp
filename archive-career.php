<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vodanet-wp
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="mid_wrapper">

		<!-- Banner -->
		<section class="page-header ">
			<div class="page-header__bg"
				style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/2024/05/young-arab-man-works-diligently-his-desk-browsing-internet-his-digital-laptop-engrossed-online-webpage-he-takes-notes-researches-embodying-professionalism-efficiency.webp); background-position: bottom center;">
			</div>
			<div class="container">
				<h2 class="page-header__title">
					<?php
					if (is_category()) {
						single_cat_title();
					} elseif (is_tag()) {
						single_tag_title();
					} elseif (is_author()) {
						the_author();
					} elseif (is_archive()) {
						the_archive_title();
					} elseif (is_search()) {
						echo 'Search results for: ' . get_search_query();
					} else {
						echo 'Blog';
					}
					?>
				</h2>
				<?php include get_template_directory() . '/inc/breadcrum.php'; ?>
			</div>
		</section>

		<section class="blog-one blog-one--page">
			<div class="container">
				<div class="row gutter-y-30">
						<?php if (have_posts()): ?>

							<?php
							/* Start the Loop */
							while (have_posts()):
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part('template-parts/content', get_post_type());

							endwhile;

							?>
							<div class="blog-pagination">
								<?php
								$pagination = paginate_links(array(
									'prev_text' => '<i class="fa fa-angle-left"></i>',
									'next_text' => '<i class="fa fa-angle-right"></i>',
									'type' => 'plain',
								));

								echo $pagination;
								?>
							</div>
							<?php

						else:

							get_template_part('template-parts/content', 'none');

						endif;
						?>
				</div>
			</div>
		</section>
	</div>

</main><!-- #main -->

<?php
get_footer();
