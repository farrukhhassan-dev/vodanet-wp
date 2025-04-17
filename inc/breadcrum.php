<ul class="vodanet-breadcrumb list-unstyled">
    <li class="home">
        <span property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" title="Go to <?php bloginfo('name'); ?>" href="<?php echo esc_url(home_url('/')); ?>" class="home">
                <span property="name">Home</span>
            </a>
            <meta property="position" content="1">
        </span>
    </li>

    <?php
    // Blog archive page (usually 'Insights' if that's your page for posts)
    $posts_page_id = get_option('page_for_posts');
    $posts_page_title = get_the_title($posts_page_id);
    $posts_page_url = get_permalink($posts_page_id);
    ?>

    <?php if (is_singular('career')) : ?>
        <li class="post post-type-career">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to the Career page" href="<?php echo esc_url(get_post_type_archive_link('career')); ?>" class="taxonomy career">
                    <span property="name">Career</span>
                </a>
                <meta property="position" content="2">
            </span>
        </li>
        <li class="post post-page current-item">
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item"><?php the_title(); ?></span>
                <meta property="position" content="3">
            </span>
        </li>

    <?php elseif (is_singular('post')) : ?>
        <li class="taxonomy blog-archive">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Insights" href="<?php echo esc_url($posts_page_url); ?>" class="taxonomy blog-archive">
                    <span property="name"><?php echo esc_html($posts_page_title); ?></span>
                </a>
                <meta property="position" content="2">
            </span>
        </li>
        <li class="post post-page current-item">
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item"><?php the_title(); ?></span>
                <meta property="position" content="3">
            </span>
        </li>

    <?php elseif (is_home() || is_post_type_archive('post')) : ?>
        <li class="post post-page current-item">
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item"><?php echo esc_html($posts_page_title); ?></span>
                <meta property="position" content="2">
            </span>
        </li>

    <?php elseif (is_page()) : ?>
        <li class="post post-page current-item">
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item"><?php the_title(); ?></span>
                <meta property="position" content="2">
            </span>
        </li>

    <?php elseif (is_category()) : ?>
        <li class="taxonomy category">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Insights" href="<?php echo esc_url($posts_page_url); ?>" class="taxonomy blog-archive">
                    <span property="name"><?php echo esc_html($posts_page_title); ?></span>
                </a>
                <meta property="position" content="2">
            </span>
        </li>
        <li class="post post-page current-item">
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item"><?php single_cat_title(); ?></span>
                <meta property="position" content="3">
            </span>
        </li>

    <?php elseif (is_archive()) : ?>
        <li class="post post-page current-item">
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item"><?php the_archive_title(); ?></span>
                <meta property="position" content="2">
            </span>
        </li>

    <?php elseif (is_search()) : ?>
        <li class="post post-page current-item">
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item">Search: <?php the_search_query(); ?></span>
                <meta property="position" content="2">
            </span>
        </li>

    <?php elseif (is_404()) : ?>
        <li class="post post-page current-item">
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item">404 Not Found</span>
                <meta property="position" content="2">
            </span>
        </li>
    <?php endif; ?>
</ul>
