<?php
/**
 * Footer do tema
 *
 * @package Cartas_ao_Vento
 */
?>

    <footer id="colophon" class="site-footer">
        <div class="container">
            <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="footer-widgets">
                    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                        <div class="footer-widget">
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                        <div class="footer-widget">
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                        <div class="footer-widget">
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="site-info">
                <nav class="footer-navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_id'        => 'footer-menu',
                        'depth'          => 1,
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </nav>

                <div class="copyright">
                    <p>
                        &copy; <?php echo date( 'Y' ); ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                        - <?php esc_html_e( 'Feito com', 'cartas-ao-vento' ); ?> 💛
                        <?php esc_html_e( 'em memória do Vento', 'cartas-ao-vento' ); ?>
                    </p>
                    <p style="margin-top: 0.5rem; font-size: 0.875rem;">
                        <?php esc_html_e( '100% da renda em doações para animais', 'cartas-ao-vento' ); ?> 🐾
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

