<?php
/**
 * Template part para exibir resultados de busca
 *
 * @package Cartas_ao_Vento
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php cartas_post_thumbnail(); ?>
    
    <header class="entry-header">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        
        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php
                cartas_posted_on();
                cartas_posted_by();
                ?>
            </div>
        <?php endif; ?>
    </header>
    
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
    
    <footer class="entry-footer">
        <?php cartas_entry_footer(); ?>
    </footer>
    
</article>

