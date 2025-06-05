<?php 
/**
 * Page template, blog page
 */

get_header(); 
?>

<div id="primary" class="codegnet-content-area">
    <main id="main" class="codegnet-site-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        while ( have_posts() ) :
                        the_post();
                        the_content();
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php
get_footer();