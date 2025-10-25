/**
 * Main JavaScript file
 *
 * @package Cartas_ao_Vento
 */

(function($) {
    'use strict';

    /**
     * Mobile menu toggle
     */
    function initMobileMenu() {
        const menuToggle = $('.menu-toggle');
        const navigation = $('.main-navigation');

        if (menuToggle.length) {
            menuToggle.on('click', function() {
                $(this).toggleClass('active');
                navigation.toggleClass('active');
            });
        }
    }

    /**
     * Smooth scroll para links âncora
     */
    function initSmoothScroll() {
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click', function(event) {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && 
                location.hostname === this.hostname) {
                
                let target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 800);
                }
            }
        });
    }

    /**
     * Sticky header
     */
    function initStickyHeader() {
        const header = $('.site-header');
        const headerOffset = header.offset().top;

        $(window).on('scroll', function() {
            if ($(window).scrollTop() > headerOffset) {
                header.addClass('sticky');
            } else {
                header.removeClass('sticky');
            }
        });
    }

    /**
     * Atualizar contador do carrinho (WooCommerce)
     */
    function updateCartCount() {
        $(document.body).on('added_to_cart removed_from_cart', function() {
            $.ajax({
                url: wc_add_to_cart_params.ajax_url,
                type: 'POST',
                data: {
                    action: 'get_cart_count'
                },
                success: function(response) {
                    $('.cart-count').text(response);
                }
            });
        });
    }

    /**
     * Inicialização quando o DOM estiver pronto
     */
    $(document).ready(function() {
        initMobileMenu();
        initSmoothScroll();
        initStickyHeader();
        
        // Inicializar funções do WooCommerce se estiver ativo
        if (typeof wc_add_to_cart_params !== 'undefined') {
            updateCartCount();
        }
    });

})(jQuery);

