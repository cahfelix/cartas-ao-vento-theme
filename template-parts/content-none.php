<?php
/**
 * Template part para quando não há conteúdo
 *
 * @package Cartas_ao_Vento
 */
?>

<section class="no-results not-found">
    
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'Nada Encontrado', 'cartas-ao-vento' ); ?></h1>
    </header>
    
    <div class="page-content">
        <?php
        if ( is_home() && current_user_can( 'publish_posts' ) ) :
            
            printf(
                '<p>' . wp_kses(
                    __( 'Pronto para publicar seu primeiro post? <a href="%1$s">Comece aqui</a>.', 'cartas-ao-vento' ),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url( admin_url( 'post-new.php' ) )
            );
            
        elseif ( is_search() ) :
            ?>
            
            <p><?php esc_html_e( 'Desculpe, mas nada corresponde aos seus termos de busca. Por favor, tente novamente com palavras-chave diferentes.', 'cartas-ao-vento' ); ?></p>
            <?php
            get_search_form();
            
        else :
            ?>
            
            <p><?php esc_html_e( 'Parece que não conseguimos encontrar o que você está procurando. Talvez a busca possa ajudar.', 'cartas-ao-vento' ); ?></p>
            <?php
            get_search_form();
            
        endif;
        ?>
    </div>
    
</section>

