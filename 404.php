<?php
/**
 * 404 not found page
 */

get_header();
?>

<div id="primary" class="codegnet-content-area">
    <div id="main" class="codegnet-site-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 codegnet-not-found-page">

                    <p> <?php esc_html_e('Page not found'); ?> </p>
                    <?php get_search_form(); ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();