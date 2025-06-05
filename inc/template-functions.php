<?php
/**
 * Template functions
 */

if ( ! function_exists( 'codegnet_post_meta' ) ) {

    /**
     * Generate post meat in a loop
     */
    function codegnet_post_meta(){
        //post terms,
        $terms = get_the_term_list( get_the_ID(), 'category', '', '', '' );

        // get category
        printf(
            '<span class="codegnet-post-terms"> %2$s </span>',
            esc_html('codegnet-yt' ),
            wp_kses_post( $terms )
        );
        
        // get author 
        printf(
            '<span class="codegnet-post-terms"> %2$s </span>',
            esc_html( 'codegnet-yt' ),
            wp_kses_post( get_the_author_posts_link() )
        );

        // get date
        printf(
            '<span class="codegnet-post-terms"> %2$s </span>',
            esc_html( 'codegnet-yt' ),
            esc_html( get_the_date(), 'codegnet-yt' )
        );
    }
}

if ( ! function_exists( 'codegnet_header_image' ) ) {
    // Get header image
    function codegnet_header_image() {
        $header_image_src = '';

        if( is_home() || is_front_page() || is_page() || is_singular() || is_404() ) {
            $page_id = get_queried_object_id();
            // populate image url
            $header_image_src = get_the_post_thumbnail_url( $page_id, 'full' );
        }

        if ( function_exists( 'is_shop' ) && is_shop() ) {
            $page_id = get_option( 'woocommerce_shop_page_id' );
            //populate image url
            $header_image_src = get_the_post_thumbnail_url( $page_id, 'full' );
        }

        return $header_image_src;
    }
}
