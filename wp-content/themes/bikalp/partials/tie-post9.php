<?php
// Get the category object by slug
$feature_category = get_category_by_slug('फिचर');

if ($feature_category) :

    // Query posts from फिचर category
    $feature_posts = new WP_Query([
        'cat'            => $feature_category->term_id,
        'posts_per_page' => 10, // number of posts to display
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);

    if ($feature_posts->have_posts()) :
?>
<div class="ok-section ok-section-gallery" id="ok-gallery-<?php echo esc_attr($feature_category->term_id); ?>">
    <div class="ok-container">
        <div class="ok-section-title">
            <h2>
                फोटो ग्यालरी
                <a href="#" class="circle-arrow"><i class="fas fa-chevron-right"></i></a>
            </h2>
        </div>

        <div class="ok-carousel swiper" id="ok-carousel-<?php echo esc_attr($feature_category->term_id); ?>">
            <div class="swiper-wrapper">
                <?php while ($feature_posts->have_posts()) : $feature_posts->the_post(); 
                    if (has_post_thumbnail()) :
                        $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $img_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                        $title   = get_the_title();
                ?>
                <div class="swiper-slide ok-item">
                    <a href="<?php the_permalink(); ?>" class="ok-news-post ok-post-overlay">
                        <span class="ok-post-has-gallery"><i class="far fa-images"></i></span>
                        <img class="ok-post-thumb" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>" loading="lazy"/>
                        <div class="ok-post-content-wrap">
                            <h2 class="ok-news-title-txt"><?php echo esc_html($title); ?></h2>
                        </div>
                    </a>
                </div>
                <?php endif; endwhile; wp_reset_postdata(); ?>
            </div>

            <!-- Navigation buttons 
            <button class="ok-nav ok-prev swiper-button-prev" aria-label="Previous"><span>‹</span></button>
            <button class="ok-nav ok-next swiper-button-next" aria-label="Next"><span>›</span></button>
            -->
        </div>
    </div>
</div>



<?php 
    endif; 
endif; 
?>
