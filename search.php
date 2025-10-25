<?php
/**
 * Template para resultados de busca
 *
 * @package Cartas_ao_Vento
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        
        <?php if ( have_posts() ) : ?>
            
            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    printf(
                        esc_html__( 'Resultados da busca por: %s', 'cartas-ao-vento' ),
                        '<span>' . get_search_query() . '</span>'
                    );
                    ?>
                </h1>
            </header>
            
            <div class="posts-grid">
                <?php
                while ( have_posts() ) :
                    the_post();
                    
                    get_template_part( 'template-parts/content', 'search' );
                    
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

