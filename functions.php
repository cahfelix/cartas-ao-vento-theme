<?php
/**
 * Cartas ao Vento Theme Functions
 *
 * @package Cartas_ao_Vento
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Define constantes do tema
 */
define( 'CARTAS_VERSION', '1.0.0' );
define( 'CARTAS_THEME_DIR', get_template_directory() );
define( 'CARTAS_THEME_URI', get_template_directory_uri() );

/**
 * Configuração do tema
 */
function cartas_theme_setup() {
    // Adicionar suporte a título dinâmico
    add_theme_support( 'title-tag' );
    
    // Adicionar suporte a imagens destacadas
    add_theme_support( 'post-thumbnails' );
    
    // Adicionar suporte a HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    
    // Adicionar suporte a logo customizado
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    
    // Adicionar suporte a feeds automáticos
    add_theme_support( 'automatic-feed-links' );
    
    // Registrar menus de navegação
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'cartas-ao-vento' ),
        'footer'  => __( 'Menu Rodapé', 'cartas-ao-vento' ),
    ) );
    
    // Adicionar suporte ao WooCommerce
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'cartas_theme_setup' );

/**
 * Definir tamanhos de imagem personalizados
 */
function cartas_image_sizes() {
    add_image_size( 'cartas-featured', 800, 600, true );
    add_image_size( 'cartas-thumbnail', 400, 300, true );
}
add_action( 'after_setup_theme', 'cartas_image_sizes' );

/**
 * Registrar áreas de widgets
 */
function cartas_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Principal', 'cartas-ao-vento' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Adicione widgets aqui para aparecer na sidebar.', 'cartas-ao-vento' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Rodapé 1', 'cartas-ao-vento' ),
        'id'            => 'footer-1',
        'description'   => __( 'Primeira coluna do rodapé.', 'cartas-ao-vento' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Rodapé 2', 'cartas-ao-vento' ),
        'id'            => 'footer-2',
        'description'   => __( 'Segunda coluna do rodapé.', 'cartas-ao-vento' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Rodapé 3', 'cartas-ao-vento' ),
        'id'            => 'footer-3',
        'description'   => __( 'Terceira coluna do rodapé.', 'cartas-ao-vento' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'cartas_widgets_init' );

/**
 * Enfileirar scripts e estilos
 */
function cartas_scripts() {
    // Estilo principal
    wp_enqueue_style( 'cartas-style', get_stylesheet_uri(), array(), CARTAS_VERSION );
    
    // Script principal
    wp_enqueue_script( 'cartas-script', CARTAS_THEME_URI . '/assets/js/main.js', array( 'jquery' ), CARTAS_VERSION, true );
    
    // Script de comentários (se necessário)
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'cartas_scripts' );

/**
 * Customizar excerpt length
 */
function cartas_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'cartas_excerpt_length' );

/**
 * Customizar excerpt more
 */
function cartas_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'cartas_excerpt_more' );

/**
 * Incluir arquivos adicionais
 */
require_once CARTAS_THEME_DIR . '/inc/template-tags.php';
require_once CARTAS_THEME_DIR . '/inc/template-functions.php';

// Incluir customizações do WooCommerce se estiver ativo
if ( class_exists( 'WooCommerce' ) ) {
    require_once CARTAS_THEME_DIR . '/inc/woocommerce.php';
}

