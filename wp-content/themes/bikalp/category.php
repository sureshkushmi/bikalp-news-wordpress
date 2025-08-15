<?php get_header(); ?>
<?php get_template_part('partials/header-container'); ?>
<?php get_template_part('partials/main-nav-wrapper'); ?>
<?php get_template_part('partials/top-navigation'); ?>

<div id="content" class="site-content container">
    <div class="tie-row main-content-row">

        <div class="main-content tie-col-md-8 tie-col-xs-12" role="main">
            <?php 
                get_template_part('single_partial/content-category');               
            ?>
        </div>

        <?php get_template_part('single_partial/sidebar-content'); ?>

    </div>
</div>

<?php get_footer(); ?>
