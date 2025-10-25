<?php
/**
 * Template para página 404
 *
 * @package Cartas_ao_Vento
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! Página não encontrada', 'cartas-ao-vento' ); ?></h1>
            </header>
            
            <div class="page-content">
                <p><?php esc_html_e( 'Parece que nada foi encontrado neste local. Que tal tentar uma busca?', 'cartas-ao-vento' ); ?></p>
                
                <?php get_search_form(); ?>
                
                <div class="widget-area">
                    <h2><?php esc_html_e( 'Categorias', 'cartas-ao-vento' ); ?></h2>
                    <ul>
                        <?php
                        wp_list_categories( array(
                            'orderby'    => 'count',
                            'order'      => 'DESC',
                            'show_count' => 1,
                            'title_li'   => '',
                            'number'     => 10,
                        ) );
                        ?>
                    </ul>
                </div>
                
                <div class="widget-area">
                    <h2><?php esc_html_e( 'Posts Recentes', 'cartas-ao-vento' ); ?></h2>
                    <ul>
                        <?php
                        wp_get_archives( array(
                            'type'  => 'postbypost',
                            'limit' => 10,
                        ) );
                        ?>
                    </ul>
                </div>
            </div>
        </section>
        
    </div>
</main>

<?php
get_footer();

