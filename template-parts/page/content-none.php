<?php 
/**
 * Content none template
 */
?>

<div class="codegnet-no-results">
    <?php
        // if post home page can current user can publish post
       if ( is_home() && current_user_can( 'publish_posts' ) ) {
            printf(
                '<p>' . wp_kses(

                    // translators 1: link to wp admin new post page
                    __( 'Ready to publish your post? <a href="%1$s"> Get started here </a>', 'codegnet-yt' ),
                    array(
                        'a'=> array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url( admin_url( 'post-new.php' ) ),
            );
       } else {
    ?>
            <p>
                <?php
                    esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for?', '' );
                ?>
            </p>
            
            <?php
                get_search_form();
        }
            ?>
</div>