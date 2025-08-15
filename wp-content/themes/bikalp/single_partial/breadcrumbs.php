<nav class="breadcrumbs">
    <a href="<?php echo home_url(); ?>">Home</a> &raquo;
    <?php if (is_single()) : ?>
        <?php the_category(', '); ?> &raquo; <?php the_title(); ?>
    <?php elseif (is_page()) : ?>
        <?php the_title(); ?>
    <?php endif; ?>
</nav>
