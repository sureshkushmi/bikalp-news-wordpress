<aside class="sidebar tie-col-md-4 tie-col-xs-12 normal-side is-sticky" aria-label="Primary Sidebar">
    <div class="theiaStickySidebar">
        <div class="container-wrapper widget posts-list">
            <div class="widget-title the-global-title">
                <div class="the-subtitle">भर्खर प्रकाशित</div>
            </div>
            <div class="">
                <ul class="posts-list-items">
                    <?php
                    // WP Query for latest 5 posts
                    $recent_posts = new WP_Query(array(
                        'posts_per_page' => 5,
                        'post_status'    => 'publish',
                    ));

                    if ($recent_posts->have_posts()) :
                        while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                            <li class="widget-post-list tie-standard">
                                <div class="post-widget-thumbnail">
                                    <a aria-label="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="post-thumb">
                                        <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('jannah-image-small', array(
                                                'class' => 'attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image',
                                                'alt' => get_the_title()
                                            )); 
                                        } else {
                                            // fallback image
                                            echo '<img src="' . get_template_directory_uri() . '/images/default-thumb.jpg" alt="' . get_the_title() . '" class="tie-small-image">';
                                        }
                                        ?>
                                    </a>
                                </div>
                                <div class="post-widget-body">
                                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="post-meta">
                                        <span class="date meta-item fa-before"><?php echo get_the_date('j F, H:i'); ?></span>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div><!-- .widget /-->
    </div><!-- .theiaStickySidebar /-->
</aside>
