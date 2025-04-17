<div class="blog-card">
	<div class="blog-card__image">
		<?php if (has_post_thumbnail()) :
			$image_url = get_the_post_thumbnail_url(get_the_ID(), 'vodanet_blog_370X290');
		?>
			<img loading="lazy" decoding="async" width="370" height="290" src="<?php echo esc_url($image_url); ?>"
				class="attachment-vodanet_blog_370X290 size-vodanet_blog_370X290 wp-post-image" alt="<?php the_title(); ?>" />
			<img loading="lazy" decoding="async" width="370" height="290" src="<?php echo esc_url($image_url); ?>"
				class="attachment-vodanet_blog_370X290 size-vodanet_blog_370X290 wp-post-image" alt="<?php the_title(); ?>" />
		<?php endif; ?>
		<a href="<?php the_permalink(); ?>" class="blog-card__image__link"></a>
		<div class="blog-card__date"><span><?php echo get_the_date('d'); ?></span><?php echo get_the_date('M'); ?></div>
	</div>
	<div class="blog-card__content">
		<ul class="list-unstyled blog-card__meta ml-0">
			<li>
				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
					<img decoding="async" src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'), ['size' => 31])); ?>" alt="<?php the_author(); ?>">
					<?php the_author(); ?>
				</a>
			</li>
			<li><span class="comments-link"><i class="icon-bubble-chat-1"></i>
				<a href="<?php comments_link(); ?>"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a>
			</span></li>
		</ul>
		<div class="blog-card__content__inner">
			<h3 class="blog-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="fs-6 fw-light mb-0 mt-2"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
			<a href="<?php the_permalink(); ?>" class="blog-card__link">Read More <i class="icon-arrow-left"></i></a>
		</div>
	</div>
</div>
