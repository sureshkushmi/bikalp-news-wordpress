<div id="tiepost-1020-section-8869" class="section-wrapper container normal-width without-background">
  <div class="section-item sidebar-right has-sidebar" style="">
    <div class="container-normal">
      <div class="tie-row main-content-row">

        <!-- Main content (news posts in अर्थ category) -->
        <div class="main-content tie-col-md-8 tie-col-xs-12" role="main">
          <div id="tie-block_979" class="mag-box big-post-left-box has-first-big-post">
          <div class="container-wrapper">

            <div class="mag-box-title the-global-title">
              <h3><?php echo esc_html( get_cat_name( get_category_by_slug('धवलागिरी')->term_id ) ); ?></h3>
            </div>

            <div class="mag-box-container clearfix">
              <ul class="posts-items posts-list-container">

                <?php
                $args = array(
                  'category_name' => 'धवलागिरी',
                  'posts_per_page' => 5,
                );
                $query = new WP_Query( $args );

                if ( $query->have_posts() ) :
                  $first_post = true;
                  while ( $query->have_posts() ) : $query->the_post(); ?>
                    
                    <li class="post-item tie-standard">
                      <a href="<?php the_permalink(); ?>" class="post-thumb">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<span class="post-cat-wrap"><span class="post-cat tie-cat-' . esc_attr($categories[0]->term_id) . '"></span></span>';
                        }
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('medium');
                        } else {
                            echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/img/petrolium.jpg' ) . '" alt="' . get_the_title() . '" />';
                        }
                        ?>
                      </a>

                      <div class="post-details">
                        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-meta clearfix">
                          <span class="single-author no-avatars">
                            <span class="meta-item meta-author-wrapper">
                              <span class="meta-author">
                                <b class="author-name"><?php the_author(); ?></b>
                              </span>
                            </span>
                          </span>
                          <span class="date meta-item fa-before"><?php echo nepali_date(get_the_date('Y-m-d H:i:s')); ?></span>
                        </div>

                        <?php if ( $first_post ) : ?>
                          <p class="post-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 25, '...' ); ?></p>
                          <?php $first_post = false; ?>
                        <?php endif; ?>
                      </div>
                    </li>

                  <?php endwhile;
                  wp_reset_postdata();
                else : ?>
                  <li><?php esc_html_e('No posts found in this category.', 'your-theme-textdomain'); ?></li>
                <?php endif; ?>

              </ul>
              <div class="clearfix"></div>
            </div>
            </div>
          </div>
        </div>

        <!-- Sidebar (technology posts widget) -->
        <aside class="sidebar tie-col-md-4 tie-col-xs-12 normal-side" aria-label="Primary Sidebar">
    <div class="theiaStickySidebar">
        <div id="posts-list-widget-33" class="container-wrapper widget posts-list">
            <div class="widget-title the-global-title">
                <div class="the-subtitle">विज्ञापन</div>
            </div>

            <div class="posts-list-big-first has-first-big-post">
                <ul class="posts-list-items">
                    <?php
                    $sidebar_args = array(
                        'category_name'  => 'विचार',
                        'posts_per_page' => 2, // Change number if you need more/less
                    );
                    $sidebar_query = new WP_Query( $sidebar_args );

                    if ( $sidebar_query->have_posts() ) :
                        $count = 0;
                        while ( $sidebar_query->have_posts() ) : $sidebar_query->the_post();
                            $count++;
                    ?>
                        <li class="widget-post-list tie-standard">
                            <div class="post-widget-thumbnail">
                                <a href="<?php the_permalink(); ?>" class="post-thumb">
                                    <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        echo '<span class="post-cat-wrap"><span class="post-cat tie-cat-' . esc_attr($categories[0]->term_id) . '"></span></span>';
                                    }

                                    if ( has_post_thumbnail() ) {
                                        if ( $count === 1 ) {
                                            // First post: big image
                                            the_post_thumbnail('medium');
                                        } else {
                                            // Other posts: small thumbnail (150x102)
                                            the_post_thumbnail([150, 102], ['class' => 'tie-small-image']);
                                        }
                                    } else {
                                        // Fallback image if no featured image
                                        echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/img/drone.jpg' ) . '" alt="' . esc_attr(get_the_title()) . '" />';
                                    }
                                    ?>
                                </a>
                            </div>

                            <div class="post-widget-body">
                                <h3 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="post-meta">
                                    <span class="date meta-item fa-before"><?php echo nepali_date(get_the_date('Y-m-d H:i:s')); ?></span>
                                </div>
                            </div>
                        </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <li><?php esc_html_e('No posts found in this category.', 'your-theme-textdomain'); ?></li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</aside>


      </div><!-- .main-content-row -->
    </div><!-- .container -->
  </div><!-- .section-item -->
</div><!-- #tiepost-1020-section-8869 -->
