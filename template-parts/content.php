<?php
/**
 * Template part para exibir posts
 *
 * @package Cartas_ao_Vento
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php cartas_post_thumbnail(); ?>
    
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
        ?>
        
        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php
                cartas_posted_on();
                cartas_posted_by();
                ?>
            </div>
        <?php endif; ?>
    </header>
    
    <div class="entry-content">
        <?php
        if ( is_singular() ) :
            the_content(
                sprintf(
                    wp_kses(
                        __( 'Continue lendo<span class="screen-reader-text"> "%s"</span>', 'cartas-ao-vento' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );
            
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'cartas-ao-vento' ),
                    'after'  => '</div>',
                )
            );
        else :
            the_excerpt();
        endif;
        ?>
    </div>
    
    <footer class="entry-footer">
        <?php cartas_entry_footer(); ?>
    </footer>
    
</article>

