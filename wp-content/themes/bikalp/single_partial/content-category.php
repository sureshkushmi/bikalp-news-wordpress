<?php 
get_template_part('single_partial/navigation');
?>
<?php

$category = get_queried_object(); // Get current category
?>

<div class="mag-box wide-post-box">
    <div class="container-wrapper">
        <div class="mag-box-container clearfix">
            <ul id="posts-container" data-layout="default" data-settings='{"uncropped_image":"jannah-image-post","category_meta":false,"post_meta":true,"excerpt":true,"excerpt_length":"25","read_more":true,"media_overlay":false,"title_length":0,"is_full":false,"is_category":true}' class="posts-items">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <li <?php post_class('post-item tie-standard'); ?>>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <a aria-label="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="post-thumb">
                                <?php the_post_thumbnail('jannah-image-large'); ?>
                            </a>
                        <?php endif; ?>

                        <div class="post-details">
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="post-meta clearfix">
                                <span class="date meta-item fa-before"><?php echo get_the_date('d M, H:i'); ?></span>
                            </div>

                                    <p class="post-excerpt">
                                        <?php
                                        if ( has_excerpt() ) {
                                            echo wp_trim_words( get_the_excerpt(), 52 );
                                        } else {
                                            echo wp_trim_words( get_the_content(), 52 );
                                        }
                                        ?>
                                    </p>


                            <a class="more-link button" href="<?php the_permalink(); ?>">पुरा पढ्नुहोस »</a>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php else : ?>
                <li>
                    <p>यस श्रेणीमा हाल कुनै पोस्ट छैन।</p>
                </li>
            <?php endif; ?>

            </ul><!-- #posts-container /-->
            <div class="clearfix"></div>

            <!-- Pagination -->
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $wp_query->max_num_pages,
                    'prev_text' => __('« पुरा', 'textdomain'),
                    'next_text' => __('अर्को »', 'textdomain'),
                ));
                ?>
            </div>
        </div><!-- .mag-box-container /-->
    </div><!-- .container-wrapper /-->
</div>


