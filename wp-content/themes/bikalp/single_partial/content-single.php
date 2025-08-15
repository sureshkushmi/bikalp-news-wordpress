<article id="post-<?php the_ID(); ?>" <?php post_class('container-wrapper post-content tie-standard'); ?>>

            <?php 
                get_template_part('single_partial/navigation');
            ?>

    <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>
    <div class="featured-area">
        <div class="featured-area-inner">
            <figure class="single-featured-image">
                <?php the_post_thumbnail('full', ['class' => 'attachment-full size-full wp-post-image']); ?>
            </figure>
        </div>
    </div>
    <?php endif; ?>

    <!-- Post Content -->
    <div class="entry-content entry clearfix">
        <?php
            the_content();
        ?>
    </div>

    <!-- JSON-LD Schema for SEO -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "<?php echo get_the_title(); ?>",
        "datePublished": "<?php echo get_the_date('c'); ?>",
        "dateModified": "<?php echo get_the_modified_date('c'); ?>",
        "author": {
            "@type": "Person",
            "name": "<?php the_author(); ?>"
        },
        "publisher": {
            "@type": "Organization",
            "name": "<?php bloginfo('name'); ?>",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo get_theme_mod('custom_logo') ? wp_get_attachment_image_url(get_theme_mod('custom_logo'),'full') : ''; ?>"
            }
        },
        "image": {
            "@type": "ImageObject",
            "url": "<?php echo get_the_post_thumbnail_url(); ?>"
        }
    }
    </script>

</article>
