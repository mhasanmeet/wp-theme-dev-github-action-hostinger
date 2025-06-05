<?php 
/**
 * Post loop content template
 */
?>

<article id="post-<?php the_ID(); ?>" class="codegnet-post-article">

    <!-- Post Thumbnail -->
    <?php
        printf(
            '<figure class="codegnet-post-thumbnail"> <img src="%1$s" alt="%2$s"/> </figure>',
            esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ),
            esc_attr( get_post_field( 'post_name' ) ),
        )
    ?>

    <div class="codegnet-post-content">
        <!-- post title -->
        <?php
            printf(
                '<h4 class="codegnet-post-title"> <a href="%1$s">%2$s</a> </h4>',
                esc_url( get_the_permalink() ),
                esc_html( get_the_title(), 'codegnet-yt' )
            );
        ?>
    
        <!-- Post meta -->
        <div class="codegnet-post-meta">
            <?php
                // get post meta from inc/template-functions.php
                codegnet_post_meta();
            ?>
        </div>

        <!-- Post Excerpt -->
        <?php 
            printf(
                '<div class="codegnet-post-excerpt my-3"> %1$s </div>',
                wp_kses_post( get_the_excerpt() )
            );
        ?>
        
        <!-- Read More link -->
        <?php 
            printf(
                ' <a href="%1$s" class="codegnet-post-readmore"> %2$s </a>',
                esc_url( get_the_permalink() ),
                esc_html( 'Read More' )
            );
        ?>
    </div>
   
</article>
