<?php
/**
 * Template tags personalizadas
 *
 * @package Cartas_ao_Vento
 */

if ( ! function_exists( 'cartas_posted_on' ) ) :
    /**
     * Exibe a data de publicação do post
     */
    function cartas_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( DATE_W3C ) ),
            esc_html( get_the_modified_date() )
        );

        $posted_on = sprintf(
            esc_html_x( 'Publicado em %s', 'post date', 'cartas-ao-vento' ),
            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>';
    }
endif;

if ( ! function_exists( 'cartas_posted_by' ) ) :
    /**
     * Exibe o autor do post
     */
    function cartas_posted_by() {
        $byline = sprintf(
            esc_html_x( 'por %s', 'post author', 'cartas-ao-vento' ),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
        );

        echo '<span class="byline"> ' . $byline . '</span>';
    }
endif;

if ( ! function_exists( 'cartas_entry_footer' ) ) :
    /**
     * Exibe categorias, tags e comentários
     */
    function cartas_entry_footer() {
        // Categorias
        $categories_list = get_the_category_list( esc_html__( ', ', 'cartas-ao-vento' ) );
        if ( $categories_list ) {
            printf( '<span class="cat-links">' . esc_html__( 'Categorias: %1$s', 'cartas-ao-vento' ) . '</span>', $categories_list );
        }

        // Tags
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'cartas-ao-vento' ) );
        if ( $tags_list ) {
            printf( '<span class="tags-links">' . esc_html__( 'Tags: %1$s', 'cartas-ao-vento' ) . '</span>', $tags_list );
        }

        // Comentários
        if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
            echo '<span class="comments-link">';
            comments_popup_link(
                sprintf(
                    wp_kses(
                        __( 'Deixe um comentário<span class="screen-reader-text"> em %s</span>', 'cartas-ao-vento' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );
            echo '</span>';
        }
    }
endif;

if ( ! function_exists( 'cartas_post_thumbnail' ) ) :
    /**
     * Exibe a imagem destacada do post
     */
    function cartas_post_thumbnail() {
        if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
            return;
        }

        if ( is_singular() ) :
            ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail( 'cartas-featured' ); ?>
            </div>
        <?php else : ?>
            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail(
                    'cartas-thumbnail',
                    array(
                        'alt' => the_title_attribute(
                            array(
                                'echo' => false,
                            )
                        ),
                    )
                );
                ?>
            </a>
            <?php
        endif;
    }
endif;

