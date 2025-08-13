<div id="tiepost-1020-section-749" class="section-wrapper container-full without-background">
  <div class="section-item full-width">
    <div class="container">
      <div class="tie-row main-content-row">
        <div class="main-content tie-col-md-12">

          <div id="tie-block_3151" class="mag-box big-post-left-box big-thumb-left-box first-post-gradient media-overlay">
            <div class="container-wrapper">

              <!-- Section Title -->
              <div class="mag-box-title the-global-title">
                <h3>समाचार</h3>
              </div><!-- .mag-box-title /-->

              <div class="mag-box-container clearfix">
                <ul class="posts-items posts-list-container">

                  <?php
                  $news_posts = new WP_Query(array(
                      'posts_per_page' => 12, // total posts
                      'post_status'    => 'publish',
                  ));

                  if ($news_posts->have_posts()) :
                      $count = 0; // initialize counter

                      while ($news_posts->have_posts()) : $news_posts->the_post();
                          $count++;
                          if ($count == 1) : // first post - big
                              ?>
                              <li class="post-item tie-standard">
                                  <div class="big-thumb-left-box-inner bg-none" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>')">
                                      <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>" class="post-thumb"></a>
                                  </div>
                                  <div class="Bikalpa News__title">
                                      <div class="post-details">
                                          <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                          <div class="thumb-meta">
                                              <div class="post-meta clearfix">
                                                  <span class="date meta-item fa-before"><?php echo nepali_date(get_the_date('Y-m-d H:i:s')); ?></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                          <?php else : // rest posts - small thumbnails ?>
                              <li class="post-item tie-standard">
                                  <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>" class="post-thumb">
                                      <?php the_post_thumbnail('thumbnail', ['class' => 'tie-small-image']); ?>
                                  </a>
                                  <div class="post-details">
                                      <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                      <div class="post-meta clearfix">
                                          <span class="date meta-item fa-before"><?php echo nepali_date(get_the_date('Y-m-d H:i:s')); ?></span>
                                      </div>
                                  </div>
                              </li>
                          <?php
                          endif;
                      endwhile;
                      wp_reset_postdata();
                  endif;
                  ?>

                </ul>
                <div class="clearfix"></div>
              </div><!-- .mag-box-container /-->

            </div><!-- .container-wrapper /-->
          </div><!-- .mag-box /-->

        </div><!-- .main-content /-->
      </div><!-- .main-content-row /-->
    </div><!-- .container /-->
  </div><!-- .section-item /-->
</div><!-- .tiepost-1020-section-749 /-->
