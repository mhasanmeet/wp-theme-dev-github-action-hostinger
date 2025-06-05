<?php
/**
 * Header Template file
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- get featured images -->
    <header class='codegnet-header d-flex flex-column justify-content-between' 
        style="background-image: url( <?php echo esc_url( codegnet_header_image() ); ?> );">
        <div class="container">
            <div class="row navbar">
                <div class="col-md-6">

                    <!-- For logo code -->
                    <?php 
                        $codegnet_logo_id = get_theme_mod( 'custom_logo' );
                        $codegnet_logo = wp_get_attachment_image_src( $codegnet_logo_id, 'full');

                        if ( $codegnet_logo ) {
                            printf(
                                '<a href="%1$s" class="codegnet-logo"><img src="%2$s" alt=""/></a>',
                                esc_url(home_url()),
                                esc_url( $codegnet_logo[0] )
                            );
                        } else {
                            // if logo is not available then show the site default name
                            printf(
                                '<a href="%1$s" class="codegnet-logo">%2$s</a>',
                                esc_url( home_url() ),
                                esc_html__( get_bloginfo('name'), 'codegnet-yt' )
                            );
                        }
                    ?>
                </div>

                <div class="col-md-6 d-flex justify-content-end align-items-center">
                    <!-- Menu Code -->
                    <?php 
                        if ( has_nav_menu('primary') ){
                            wp_nav_menu(
                                [
                                    'theme_location' => 'primary',
                                    'container' => 'nav',
                                    'container_class' => 'codegnet-header-nav',
                                    'menu_class' => 'codegnet-header-menu',
                                    'menu_id' => '',
                                    'depth' => 2
                                ]
                            );
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                
                <!-- If page is home, blog home or front page then show related info  -->
                <?php
                    if ( is_home() || is_front_page() || is_page() ) :
                ?>

                    <div class="col-xs-12">
                        <!-- Show Page title -->
                        <h1 class="codegnet-page-title text-center"><?php echo esc_html__( single_post_title() ) ?></h1>
                    </div>


                <!-- If page is category, tag and author then show related info  -->
                <?php
                    elseif( is_category() || is_author() || is_tag() ) :
                ?>

                    <div class="col-xs-12">
                        <h1 class="codegnet-page-title text-center">
                            <?php echo wp_kses( get_the_archive_title(), [ 'span' => [] ] ); ?>
                        </h1>
                    </div>


                <!-- If page is singular post content then show page content  -->
                <?php
                    elseif ( is_singular() ) :
                ?>

                    <div class="col-xs-12">
                        <!-- Show Page title -->
                        <h1 class="codegnet-page-title"><?php echo esc_html__( single_post_title() ) ?></h1>
                    </div>

                    <!-- Post meta -->
                    <div class="codegnet-post-details-meta">
                        <?php
                            //post terms,
                            $terms = get_the_term_list( get_the_ID(), 'category', '', '', '' );

                            // get category
                            printf(
                                '<span class="codegnet-post-terms"> %2$s </span>',
                                esc_html( 'codegnet-yt' ),
                                wp_kses_post( $terms )
                            );

                            // get author
                            printf(
                                '<span class="codegnet-post-terms"> <a href="%2$s"> %3$s </a> </span>',
                                esc_html( 'codegnet-yt' ),
                                esc_url( get_author_posts_url( $post->post_author ) ),
                                wp_kses_post( get_the_author_meta( 'user_nicename', $post->post_author ) )
                            );

                            // get date
                            printf(
                                '<span class="codegnet-post-terms"> %2$s </span>',
                                esc_html( 'codegnet-yt' ),
                                esc_html( get_the_date(), 'codegnet-yt' )
                            );
                        ?>
                    </div>


                <!-- If page is not exist then show 404 title -->
                <?php
                    elseif( is_404() ) : 
                ?>
                    <h1 class="codegnet-page-title"><?php esc_html_e( "Not found anything!" ); ?></h1>


                <!-- If page is search page then show search title -->
                <?php  
                    elseif( is_search() ) :
                ?>
                    <h1 class="codegnet-page-title"><?php wp_title(); ?></h1>
                <?php
                    else :

                        //
                endif;
                ?>
            </div>
        </div>
    </header>
