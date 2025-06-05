<?php

/**
 * Single content template
 */
?>

<article id="id-<?php the_ID(); ?>" class="codegnet-post-single col-sm-12 col-md-12">
    <div class="codegnet-post-content">
        <?php the_content(); 
        
        //generate post tags
        $tags = get_the_tags();
        $array_of_tags = [];
        if ( ! empty( $tags ) ) :
            foreach ( $tags as $tag ) : 
                $array_of_tags[] = '<a href="'.esc_url(get_tag_link($tag)).'"> '.esc_html($tag->name, 'codegnet').' </a>';
            endforeach;

            printf(
                '<span class="codegnet-post-tags"> %1$s: ' . wp_kses(
                    join(', ', $array_of_tags),
                    [
                        'a' => [
                            'href' => []
                        ]
                    ]
                ) . '</span>',
                esc_html( 'Tags', 'Codegnet')
            );
        endif;
        ?>
    </div>
</article>