<header class="entry-header-outer">

        <!-- Breadcrumbs -->
        <nav id="breadcrumb">
            <a href="<?php echo home_url(); ?>"><span class="fa fa-home" aria-hidden="true"></span> गृह पृष्ठ</a><em class="delimiter">/</em>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<span id="breadcrumbs">','</span>');
            }
            ?>
        </nav>

        <div class="entry-header">
            <!-- Post Title -->
            <h1 class="post-title entry-title"><?php the_title(); ?></h1>

            <!-- Post Meta -->
            <div class="post-meta clearfix">
                <span class="single-author with-avatars">
                    <span class="meta-item meta-author-wrapper">
                        <span class="meta-author-avatar">
                            <?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
                        </span>
                        <span class="meta-author">
                            <b class="author-name"><?php the_author(); ?></b>
                        </span>
                    </span>
                </span>
                <span class="date meta-item fa-before"><?php echo get_the_date('j F, H:i'); ?></span>
            </div>

            <!-- Share Buttons (optional: replace with your preferred plugin) -->
            <div class="sharethis-inline-share-buttons st-right st-inline-share-buttons st-animated"></div>
        </div>

    </header>