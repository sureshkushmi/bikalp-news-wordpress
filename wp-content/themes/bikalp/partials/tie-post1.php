<div id="tiepost-1020-section-3286" class="section-wrapper container normal-width without-background">
  <div class="section-item is-first-section full-width" style="" >
    <div class="container-normal">
      <div class="tie-row main-content-row">
        <div class="main-content tie-col-md-12">
          <div id="tie-block_2308" class="mag-box full-width-img-news-box content-only">  
            <div class="container-wrapper">            
              <div class="mag-box-container clearfix">
			  <?php
$latest_posts = new WP_Query(array(
    'posts_per_page' => 3, // Number of posts to show
    'post_status'    => 'publish',
));

if ($latest_posts->have_posts()) : ?>
    <ul class="posts-items posts-list-container">
        <?php 
        $count = 0; // Initialize counter
        while ($latest_posts->have_posts()) : 
            $latest_posts->the_post(); 
            $count++;
        ?>
            <li class="post-item tie-standard">
                <h2 class="post-title text-align-center">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <h3 class="Bikalpa News-sub-title text-align-center"><?php //the_excerpt(); ?></h3>
                <div class="post-meta clearfix">
                    <span class="single-author no-avatars">
                        <span class="meta-item meta-author-wrapper">
                            <span class="meta-author">
                                <b class="author-name">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 32, '', '', ['class' => 'meta-author-avatar m-5']); ?>
                                    <?php the_author(); ?>
                                </b>
                            </span>
                        </span>
                    </span>
                    <span class="date meta-item fa-before"><?php echo nepali_date(get_the_date('Y-m-d H:i:s')); ?></span>
                </div>

                <?php if ($count === 2 && has_post_thumbnail()) : // Show only on second post ?>
                    <div class="bnews__featured_img">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
<?php endif; ?>

                <div class="clearfix"></div>
              </div><!-- .mag-box-container /-->          
            </div><!-- .container-wrapper /-->        
          </div><!-- .mag-box /-->

          <div id="tie-block_3032" class="mag-box scrolling-box content-only">
  <div class="container-wrapper">            
    <div class="mag-box-container clearfix">

      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
          // WP_Query for latest posts
          $latest_posts = new WP_Query(array(
              'posts_per_page' => 5, // adjust number of posts
              'post_status'    => 'publish',
          ));

          if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) : $latest_posts->the_post();
          ?>
            <div class="swiper-slide">
              <div class="slide-img">
                <a href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>">
                  <?php 
                  if (has_post_thumbnail()) {
                      the_post_thumbnail('large', ['class' => 'ok-post-thumb']); 
                  } else { 
                      echo '<img src="' . get_template_directory_uri() . '/assets/img/default.jpg" alt="' . get_the_title() . '" />';
                  } ?>
                </a>
              </div>
              <div class="Bikalpa-News__title">
                <h2 class="post-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="post-meta">
                  <span class="date"><?php echo nepali_date(get_the_date('Y-m-d H:i:s')); ?></span>
                </div>
              </div>
            </div>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Optional navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>

    </div><!-- .mag-box-container /-->            
  </div><!-- .container-wrapper /-->
</div><!-- .mag-box /-->


        </div><!-- .main-content /-->
      </div><!-- .main-content-row /-->
    </div><!-- .container /-->  
  </div><!-- .section-item /-->
</div><!-- .tiepost-1020-section-3286 /-->


