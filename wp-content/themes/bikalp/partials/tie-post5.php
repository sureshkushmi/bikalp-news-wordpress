<?php
// Slugs of categories to exclude
$exclude_slugs = ['breaking-news', 'ई-पेपर', 'फिचर', 'फोटो', 'समाचार'];

// Get the IDs of these categories
$exclude_ids = [];
foreach ($exclude_slugs as $slug) {
    $cat = get_category_by_slug($slug);
    if ($cat) {
        $exclude_ids[] = $cat->term_id;
    }
}

// Get all categories except the excluded ones
$categories = get_categories([
    'orderby' => 'name',
    'order'   => 'ASC',
    'hide_empty' => 1,
    'exclude' => $exclude_ids
]);

foreach ($categories as $category) :
    // Query posts in this category
    $args = [
        'post_type' => 'post',
        'cat' => $category->term_id,
        'posts_per_page' => 10,
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>
        <div class="section-wrapper container-full without-background">
            <div class="section-item full-width">
                <div class="container">
                    <div class="tie-row main-content-row">
                        <div class="main-content tie-col-md-12">
                            <div class="mag-box big-post-left-box big-thumb-left-box first-post-gradient media-overlay">
                                <div class="container-wrapper">
                                    <div class="mag-box-title the-global-title">
                                        <h3><?php echo esc_html($category->name); ?></h3>
                                    </div>
                                    <div class="mag-box-container clearfix">
                                        <ul class="posts-items posts-list-container">
                                        <?php
                                        $first_post = true;
                                        while ($query->have_posts()) : $query->the_post();
                                            if ($first_post) : ?>
                                                <li class="post-item tie-standard">
                                                    <div class="big-thumb-left-box-inner bg-none" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
                                                        <a href="<?php the_permalink(); ?>" class="post-thumb" aria-label="<?php the_title(); ?>"></a>
                                                    </div>
                                                    <div class="Bikalpa News__title">
                                                        <div class="post-details">
                                                            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                            <div class="thumb-meta">
                                                                <div class="post-meta clearfix">
                                                                    <span class="date meta-item fa-before">
                                                                        <?php echo nepali_date(get_the_date('Y-m-d H:i:s')); ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php $first_post = false; ?>
                                            <?php else : ?>
                                                <li class="post-item tie-standard">
                                                    <a href="<?php the_permalink(); ?>" class="post-thumb" aria-label="<?php the_title(); ?>">
                                                        <?php the_post_thumbnail('medium'); ?>
                                                    </a>
                                                    <div class="post-details">
                                                        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                        <div class="post-meta clearfix">
                                                            <span class="date meta-item fa-before"><?php echo nepali_date(get_the_date('Y-m-d H:i:s')); ?></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endif;
                                        endwhile; wp_reset_postdata(); ?>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;

endforeach; ?>
