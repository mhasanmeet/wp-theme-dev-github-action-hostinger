<?php

/**
 * Single post template
 */

get_header();
?>

<div id="primary" class="codegnet-content-area">
    <main id="main" class="codegnet-site-main">
        <div class="container">
            <div class="row">
                <?php
                
                    if ( have_posts() ) { 
                        while ( have_posts() ) {
                            the_post();
                            get_template_part("template-parts/post/content", 'single' );
                        }
                    } else {
                        get_template_part('','');
                    }
                ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="codegnet-post-comments mt-5">
                        <?php
                            // If comments are open then we can show the comments template
                            if ( comments_open() || get_comments_number() ) {
                                comments_template();
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php
get_footer();