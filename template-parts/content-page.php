<?php
/**
 * Template part para exibir páginas
 *
 * @package Cartas_ao_Vento
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    
    <?php cartas_post_thumbnail(); ?>
    
    <div class="entry-content">
        <?php
        the_content();
        
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'cartas-ao-vento' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div>
    
</article>

