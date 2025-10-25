<?php
/**
 * Template para páginas
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
            
            get_template_part( 'template-parts/content', 'page' );
            
            // Comentários (se habilitados para páginas)
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

