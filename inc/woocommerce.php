<?php
/**
 * Customizações do WooCommerce
 *
 * @package Cartas_ao_Vento
 */

/**
 * Remove os estilos padrão do WooCommerce
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Customiza o número de produtos por página
 */
function cartas_products_per_page() {
    return 12;
}
add_filter( 'loop_shop_per_page', 'cartas_products_per_page', 20 );

/**
 * Customiza o número de produtos relacionados
 */
function cartas_related_products_args( $args ) {
    $args['posts_per_page'] = 4;
    $args['columns'] = 4;
    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'cartas_related_products_args' );

/**
 * Customiza o número de colunas da grade de produtos
 */
function cartas_loop_columns() {
    return 3;
}
add_filter( 'loop_shop_columns', 'cartas_loop_columns' );

/**
 * Remove breadcrumbs padrão do WooCommerce
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

/**
 * Remove a sidebar padrão do WooCommerce
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/**
 * Customiza o wrapper do conteúdo do WooCommerce
 */
function cartas_woocommerce_wrapper_start() {
    echo '<main id="primary" class="site-main woocommerce-main">';
    echo '<div class="container">';
}
add_action( 'woocommerce_before_main_content', 'cartas_woocommerce_wrapper_start', 10 );

function cartas_woocommerce_wrapper_end() {
    echo '</div>';
    echo '</main>';
}
add_action( 'woocommerce_after_main_content', 'cartas_woocommerce_wrapper_end', 10 );

/**
 * AJAX para atualizar contador do carrinho
 */
function cartas_get_cart_count() {
    if ( class_exists( 'WooCommerce' ) ) {
        echo WC()->cart->get_cart_contents_count();
    }
    wp_die();
}
add_action( 'wp_ajax_get_cart_count', 'cartas_get_cart_count' );
add_action( 'wp_ajax_nopriv_get_cart_count', 'cartas_get_cart_count' );

/**
 * Atualiza fragmentos do carrinho
 */
function cartas_add_to_cart_fragments( $fragments ) {
    ob_start();
    ?>
    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    <?php
    $fragments['.cart-count'] = ob_get_clean();
    
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'cartas_add_to_cart_fragments' );

/**
 * Customiza o texto "Adicionar ao carrinho"
 */
function cartas_add_to_cart_text() {
    return __( 'Comprar', 'cartas-ao-vento' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'cartas_add_to_cart_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'cartas_add_to_cart_text' );

