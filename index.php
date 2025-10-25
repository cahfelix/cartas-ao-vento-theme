<?php
/**
 * Template principal
 *
 * @package Cartas_ao_Vento
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        
        <?php if ( have_posts() ) : ?>
            
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header class="page-header">
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>
            
            <div class="posts-grid">
                <?php
                // Loop principal
                while ( have_posts() ) :
                    the_post();
                    
                    get_template_part( 'template-parts/content', get_post_type() );
                    
                endwhile;
                ?>
            </div>
            
            <?php
            // Paginação
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

