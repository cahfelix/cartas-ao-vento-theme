<?php
/**
 * Funções auxiliares para templates
 *
 * @package Cartas_ao_Vento
 */

/**
 * Adiciona classes personalizadas ao body
 */
function cartas_body_classes( $classes ) {
    // Adiciona classe se não houver sidebar
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    // Adiciona classe para páginas do WooCommerce
    if ( class_exists( 'WooCommerce' ) ) {
        if ( is_woocommerce() ) {
            $classes[] = 'woocommerce-page';
        }
    }

    return $classes;
}
add_filter( 'body_class', 'cartas_body_classes' );

/**
 * Adiciona um pingback url ao header
 */
function cartas_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'cartas_pingback_header' );

/**
 * Customiza o formulário de busca
 */
function cartas_search_form( $form ) {
    $form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
        <label>
            <span class="screen-reader-text">' . esc_html__( 'Buscar por:', 'cartas-ao-vento' ) . '</span>
            <input type="search" class="search-field" placeholder="' . esc_attr__( 'Buscar...', 'cartas-ao-vento' ) . '" value="' . get_search_query() . '" name="s" />
        </label>
        <button type="submit" class="search-submit">' . esc_html__( 'Buscar', 'cartas-ao-vento' ) . '</button>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'cartas_search_form' );

