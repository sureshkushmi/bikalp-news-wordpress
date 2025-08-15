<aside class="sidebar tie-col-md-4 tie-col-xs-12">
    <?php
    if ( is_active_sidebar( 'main-sidebar' ) ) {
        dynamic_sidebar( 'main-sidebar' );
    } else {
        // Fallback: custom HTML if no widgets are added
        echo '<div class="widget"><h3>About This Site</h3><p>Customize your sidebar in Appearance → Widgets.</p></div>';
    }
    ?>
</aside>
