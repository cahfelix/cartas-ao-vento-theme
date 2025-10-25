<?php
/**
 * Template para arquivos
 *
 * @package Cartas_ao_Vento
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        
        <?php if ( have_posts() ) : ?>
            
            <header class="page-header">
                <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
            </header>
            
            <div class="posts-grid">
                <?php
                while ( have_posts() ) :
                    the_post();
                    
                    get_template_part( 'template-parts/content', get_post_type() );
                    
                endwhile;
                ?>
            </div>
            
            <?php
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '&laquo; Anterior', 'cartas-ao-vento' ),
                'next_text' => __( 'Próximo &raquo;', 'cartas-ao-vento' ),
            ) );
            ?>
            
        <?php else : ?>
            
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
            
        <?php endif; ?>
        
    </div>
</main>

<?php
get_sidebar();
get_footer();

