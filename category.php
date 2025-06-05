<?php
/**
 * Category Page template
 */
get_header();
?>

<div id="primary" class="codegnet-content-area">
    <div id="main" class="codegnet-site-main">
        <div class="container">
            <div class="row gy-4">
                <!-- If we have post exist then load "content.php" file -->
                <?php
                    if ( have_posts() ) { 
                        while ( have_posts() ) {
                            the_post();
                            get_template_part("template-parts/post/content", get_post_format() );
                        }
                ?>

                <!-- Pagination -->
                <div class="codegnet-pagination">
                    <?php
                        // Pagination
                        echo paginate_links( [
                            'prev_text' => __('previous', 'codegnet-yt'),
                            'next_text' => __('next','codegnet-yt'),
                        ]);
                    ?>
                </div>

                <!-- If there is no post then load "content-none.php" file -->
                <?php
                    } else {
                        get_template_part( 'template-parts/page/content', 'none' );
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();