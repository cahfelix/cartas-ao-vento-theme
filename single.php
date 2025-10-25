<?php
/**
 * Template para posts individuais
 *
 * @package Cartas_ao_Vento
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        
        <?php
        while ( have_posts() ) :
            the_post();
            
            get_template_part( 'template-parts/content', 'single' );
            
            // Navegação entre posts
            the_post_navigation( array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Anterior:', 'cartas-ao-vento' ) . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Próximo:', 'cartas-ao-vento' ) . '</span> <span class="nav-title">%title</span>',
            ) );
            
            // Comentários
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            
        endwhile;
        ?>
        
    </div>
</main>

<?php
get_sidebar();
get_footer();

