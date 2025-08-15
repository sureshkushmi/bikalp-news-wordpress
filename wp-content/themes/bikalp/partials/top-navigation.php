<nav id="top-nav" class="has-breaking top-nav header-nav has-breaking-news" aria-label="Secondary Navigation">
  <div class="container">
    <div class="topbar-wrapper">

      <!-- Nepali Date -->
      <div class="topbar-today-date fa-before">
        <?php echo nepali_date(current_time('Y-m-d H:i:s')); ?>
      </div>

      <div class="tie-alignleft">
        <div class="breaking">
          <span class="breaking-title">
            <span class="fa fa-bolt" aria-hidden="true"></span>
            <span class="breaking-title-text">टप स्टोरिज</span>
          </span>

          <ul id="breaking-news-in-header" class="breaking-news" data-type="slideLeft">
            <?php
            $breaking_news = new WP_Query(array(
              'posts_per_page' => 5, // Number of headlines
              'orderby'        => 'date',
              'order'          => 'DESC',
              'ignore_sticky_posts' => 1
            ));

            if ($breaking_news->have_posts()) :
              while ($breaking_news->have_posts()) : $breaking_news->the_post(); ?>
                <li class="news-item">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
              <?php endwhile;
              wp_reset_postdata();
            else :
              echo '<li class="news-item">कुनै समाचार उपलब्ध छैन</li>';
            endif;
            ?>
          </ul>
        </div><!-- #breaking /-->
      </div><!-- .tie-alignleft /-->

      <div class="tie-alignright">
        <!-- Optional right-side content like social icons or secondary menu -->
      </div><!-- .tie-alignright /-->

    </div><!-- .topbar-wrapper /-->
  </div><!-- .container /-->
</nav><!-- #top-nav /-->
