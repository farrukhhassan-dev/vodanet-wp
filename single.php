<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vodanet-wp
 */

get_header();
?>

< id="primary" class="site-main">
	<div class="mid_wrapper">

		<!-- Banner -->
		<section class="page-header ">
			<div class="page-header__bg"
				style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
); background-position: center;">
			</div>
			<div class="container">
				<h2 class="page-header__title">
				<?php the_title(); ?>
			</h2><!-- /.page-title -->

				<?php include get_template_directory() . '/inc/breadcrum.php'; ?>
			</div>
		</section>

		<section class="blog-one blog-one--page">
			<div class="container">
				<div class="row gutter-y-30">
					<div class="col-xl-8 col-lg-7">
						<div class="blog-details">
							<div class="blog-card-two">
								<div class="blog-card__two__image">
									<?php if (has_post_thumbnail()): ?>
										<?php the_post_thumbnail('full', ['class' => 'attachment-post-thumbnail size-post-thumbnail wp-post-image', 'alt' => get_the_title()]); ?>
									<?php endif; ?>
									<div class="blog-card__two__date"><?php echo get_the_date('M j, Y'); ?></div>
								</div>
								<div class="blog-card-two__content">
									<ul class="list-unstyled blog-card__two__meta ml-0">
										<li>
											<span class="byline"><i class="fas fa-user-circle"></i>
												<span class="author vcard">
													<a class="url fn n"
														href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
														<?php the_author(); ?>
													</a>
												</span>
											</span>
										</li>
										<li>
											<span class="comments-link">
												<i class="icon-bubble-chat-1"></i>
												<a href="<?php comments_link(); ?>">
													<?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
												</a>
											</span>
										</li>
									</ul>

									<div id="blog-content">
										<?php the_content(); ?>
									</div>

								</div>
							</div>

							<div class="blog-details__meta">
								<span class="blog-details__tags cat-links">
									<span>Categories: </span>
									<?php the_category(' '); ?>
								</span>

								<span class="blog-details__tags news-details__tags--tags tag-links">
									<span>Tags: </span>
									<?php the_tags('', ' ', ''); ?>
								</span>
							</div>
						</div>

						<?php /*<div id="comments" class="comments-area">

							<h3 class="comment-one__title">
								<b><?php echo get_comments_number(); ?></b> Comments
							</h3>

							<ul class="comment-list">
								<?php

								if (comments_open() || get_comments_number()) {
									comments_template();
								}
								?>

								<?php

								wp_list_comments(array(
									'style' => 'ul',
									'short_ping' => true,
									'avatar_size' => 90,
								));
								?>
							</ul>

							<div id="respond" class="comment-respond">
								<h3 class="comment-form__title">Leave a Comment <small><a rel="nofollow" id="cancel-comment-reply-link"
											href="/the-evolution-of-smart-homes-tech-upgrades/#respond" style="display:none;">Cancel
											reply</a></small></h3>

								<?php

								comment_form(array(
									'title_reply' => '',
									'comment_field' => '<div class="col-md-12"><div class="blog-details__comment-form__input-box"><textarea name="comment" id="comment" class="message" placeholder="Write comment"></textarea></div></div>',
									'fields' => array(
										'author' => '<div class="col-md-6 name-field"><div class="blog-details__comment-form__input-box"><input type="text" name="author" id="name" value="" placeholder="Your name *"></div></div>',
										'email' => '<div class="col-md-6 email-field"><div class="blog-details__comment-form__input-box"><input type="email" name="email" id="email" value="" placeholder="Email address *"></div></div>',
									),
								));
								?>
							</div>


							<?php

							if (get_comment_pages_count() > 1 && get_option('page_comments')):
								?>
								<nav class="comment-navigation">
									<div class="nav-previous"><?php previous_comments_link(); ?></div>
									<div class="nav-next"><?php next_comments_link(); ?></div>
								</nav>
							<?php endif; ?>

							<?php

							if (!comments_open() && get_comments_number()):
								?>
								<p class="no-comments"><?php _e('Comments are closed.', 'textdomain'); ?></p>
							<?php endif; ?>

						</div>*/ ?>

					</div>
					<div class="col-xl-4 col-lg-5 ">
						<div class="sidebar">
							<section id="custom_toc_widget" class="sidebar__single widget widget_custom_toc_widget">
								<div class="title">
									<h2>Table of Contents</h2>
								</div>
								<ul class="sidebar__posts list-unstyled" id="toc-list">
									<!-- JavaScript will populate this -->
								</ul>
							</section>

							<section id="custom_recent_posts_widget-1"
								class="sidebar__single widget widget_custom_recent_posts_widget">
								<div class="title">
									<h2>Recent Posts</h2>
								</div>
								<ul class="sidebar__posts list-unstyled">
									<?php
									$recent_posts = new WP_Query(array(
										'posts_per_page' => 3,
										'post_status' => 'publish',
									));

									if ($recent_posts->have_posts()):
										while ($recent_posts->have_posts()):
											$recent_posts->the_post(); ?>
											<li class="sidebar__posts__item">
												<div class="sidebar__posts__image">
													<a href="<?php the_permalink(); ?>">
														<?php
														if (has_post_thumbnail()) {
															the_post_thumbnail('thumbnail', array('class' => 'attachment-ostech_blog_70X70 size-ostech_blog_70X70 wp-post-image', 'alt' => get_the_title()));
														} else {
															echo '<img src="' . get_template_directory_uri() . '/assets/images/default-thumb.jpg" width="70" height="70" alt="' . get_the_title() . '" />';
														}
														?>
													</a>
												</div>
												<div class="sidebar__posts__content">
													<p class="sidebar__posts__meta">
														<a href="<?php the_permalink(); ?>">
															<i class="icon-clock-1"></i><?php echo get_the_date('M j, Y'); ?>
														</a>
													</p>
													<h4 class="sidebar__posts__title">
														<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
													</h4>
												</div>
											</li>
										<?php endwhile;
										wp_reset_postdata();
									else: ?>
										<li class="sidebar__posts__item">
											<p>No recent posts found.</p>
										</li>
									<?php endif; ?>
								</ul>
							</section>

						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const tocList = document.getElementById("toc-list");
			const contentArea = document.getElementById("blog-content"); // Wrap your content with this ID
			if (!tocList || !contentArea) return;

			const headings = contentArea.querySelectorAll("h2, h3");
			headings.forEach((heading, index) => {
				const anchor = "heading-" + index;
				heading.setAttribute("id", anchor);

				const li = document.createElement("li");
				li.className = "sidebar__posts__item";
				li.innerHTML = `
			<div class="sidebar__posts__content">
				<h4 class="sidebar__posts__title">
					<a href="#${anchor}">${heading.textContent}</a>
				</h4>
			</div>`;
				tocList.appendChild(li);
			});
		});
	</script>



	</main><!-- #main -->

	<?php
	get_footer();
