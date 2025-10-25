<?php
/**
 * Template para a Página Inicial
 * 
 * @package Cartas_ao_Vento
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section - Homenagem ao Vento -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    Cartas ao <span class="highlight">Vento</span>
                </h1>
                <p class="hero-subtitle">
                    Uma homenagem ao amor incondicional que nunca se apaga
                </p>
                <p class="hero-description">
                    Um livro que celebra a memória de Vento, transformando saudade em esperança 
                    e amor em ação. Toda a renda é revertida em doações para ajudar outros animais.
                </p>
                <div class="hero-cta">
                    <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="btn btn-primary">
                        Adquira o Livro
                    </a>
                    <a href="#sobre" class="btn btn-secondary">
                        Conheça a História
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <?php
                // Você pode substituir esta imagem pela foto do Vento
                // Adicione a imagem em: assets/images/vento-hero.jpg
                $hero_image = get_template_directory_uri() . '/assets/images/vento-hero.jpg';
                ?>
                <img src="<?php echo esc_url( $hero_image ); ?>" alt="Vento" />
            </div>
        </div>
    </section>

    <!-- Sobre o Livro -->
    <section id="sobre" class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Sobre o Livro</h2>
                    <p>
                        "Cartas ao Vento" é mais do que um livro - é uma celebração da vida, 
                        do amor e da conexão especial que compartilhamos com nossos companheiros de quatro patas.
                    </p>
                    <p>
                        Através de cartas sinceras e emocionantes, este livro conta a história de Vento, 
                        um cachorro que deixou marcas profundas no coração de todos que o conheceram.
                    </p>
                    <p>
                        Cada página é uma lembrança, cada palavra é um abraço, e cada venda é uma oportunidade 
                        de fazer a diferença na vida de outros animais que precisam de ajuda.
                    </p>
                </div>
                <div class="about-image">
                    <?php
                    $about_image = get_template_directory_uri() . '/assets/images/livro-capa.jpg';
                    ?>
                    <img src="<?php echo esc_url( $about_image ); ?>" alt="Capa do Livro Cartas ao Vento" />
                </div>
            </div>
        </div>
    </section>

    <!-- Impacto das Doações -->
    <section class="impact-section">
        <div class="container">
            <h2 class="section-title">Fazendo a Diferença</h2>
            <p class="section-subtitle">
                100% da renda das vendas é destinada a doações para instituições que cuidam de animais
            </p>
            <div class="impact-grid">
                <div class="impact-card">
                    <div class="impact-icon">🐾</div>
                    <h3>Amor Transformado</h3>
                    <p>Cada livro vendido é uma forma de transformar amor em ação concreta</p>
                </div>
                <div class="impact-card">
                    <div class="impact-icon">💛</div>
                    <h3>Doações Transparentes</h3>
                    <p>Pesquisamos e selecionamos cuidadosamente as instituições beneficiadas</p>
                </div>
                <div class="impact-card">
                    <div class="impact-icon">🌟</div>
                    <h3>Legado de Esperança</h3>
                    <p>A memória do Vento vive através de cada animal ajudado</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Produtos WooCommerce -->
    <?php if ( class_exists( 'WooCommerce' ) ) : ?>
    <section class="products-section">
        <div class="container">
            <h2 class="section-title">Adquira o Livro</h2>
            <p class="section-subtitle">
                Faça parte desta história de amor e solidariedade
            </p>
            <?php echo do_shortcode( '[products limit="4" columns="4"]' ); ?>
        </div>
    </section>
    <?php endif; ?>

</main>

<?php
get_footer();

