<section class="related-posts">
    <h3>Related Posts</h3>
    <ul>
        <?php
        $related = new WP_Query(array(
            'category__in'   => wp_get_post_categories(get_the_ID()),
            'post__not_in'   => array(get_the_ID()),
            'posts_per_page' => 3
        ));
        if ($related->have_posts()) :
            while ($related->have_posts()) : $related->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 8, '...' ); ?></a>
                </li>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </ul>
</section>
