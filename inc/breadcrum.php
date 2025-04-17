<ul class="vodanet-breadcrumb list-unstyled">
    <li class="home">
        <span property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" title="Go to <?php bloginfo('name'); ?>" href="<?php echo esc_url(home_url('/')); ?>" class="home">
                <span property="name">Home</span>
            </a>
            <meta property="position" content="1">
        </span>
    </li>

    <?php if (is_single()) : ?>
        <?php
        $category = get_the_category();
        if ($category && !empty($category[0])) :
            $cat_link = get_category_link($category[0]->term_id);
        ?>
            <li class="taxonomy category">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to the <?php echo esc_attr($category[0]->name); ?> category" href="<?php echo esc_url($cat_link); ?>" class="taxonomy category">
                        <span property="name"><?php echo esc_html($category[0]->name); ?></span>
                    </a>
                    <meta property="position" content="2">
                </span>
            </li>
        <?php endif; ?>
        <li class="post post-page current-item">
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item"><?php the_title(); ?></span>
                <meta property="position" content="3">
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
        <li class="post post-page current-item">
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item"><?php single_cat_title(); ?></span>
                <meta property="position" content="2">
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
