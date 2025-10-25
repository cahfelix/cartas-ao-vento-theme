# Cartas ao Vento - Tema WordPress

Tema personalizado para WordPress com suporte completo ao WooCommerce.

## 📋 Características

- ✅ Tema WordPress moderno e responsivo
- ✅ Suporte completo ao WooCommerce
- ✅ Galeria de produtos com zoom, lightbox e slider
- ✅ Sistema de widgets personalizável
- ✅ Menus de navegação (principal e rodapé)
- ✅ Suporte a logo customizado
- ✅ Imagens destacadas
- ✅ HTML5 semântico
- ✅ Otimizado para SEO

## 🚀 Instalação

1. Faça upload da pasta do tema para `/wp-content/themes/`
2. Ative o tema através do painel do WordPress em **Aparência > Temas**
3. Configure os menus em **Aparência > Menus**
4. Personalize o logo em **Aparência > Personalizar**

## 📦 Requisitos

- WordPress 5.0 ou superior
- PHP 7.4 ou superior
- WooCommerce 3.0 ou superior (opcional, mas recomendado)

## 🎨 Estrutura do Tema

```
cartas-ao-vento-theme/
├── assets/
│   ├── css/          # Estilos adicionais
│   ├── js/           # Scripts JavaScript
│   └── images/       # Imagens do tema
├── inc/
│   ├── template-tags.php      # Tags de template personalizadas
│   ├── template-functions.php # Funções auxiliares
│   └── woocommerce.php        # Customizações do WooCommerce
├── template-parts/
│   ├── content.php            # Template para posts
│   ├── content-single.php     # Template para post individual
│   ├── content-page.php       # Template para páginas
│   ├── content-search.php     # Template para busca
│   └── content-none.php       # Template quando não há conteúdo
├── woocommerce/
│   ├── archive-product.php    # Página da loja
│   ├── single-product.php     # Página do produto
│   └── cart/
│       └── cart.php           # Página do carrinho
├── functions.php              # Funções do tema
├── style.css                  # Estilo principal
├── header.php                 # Cabeçalho
├── footer.php                 # Rodapé
├── sidebar.php                # Sidebar
├── index.php                  # Template principal
├── single.php                 # Post individual
├── page.php                   # Página
├── archive.php                # Arquivo
├── search.php                 # Busca
└── 404.php                    # Página não encontrada
```

## 🎯 Áreas de Widgets

O tema possui 4 áreas de widgets:

1. **Sidebar Principal** - Aparece na lateral das páginas
2. **Rodapé 1** - Primeira coluna do rodapé
3. **Rodapé 2** - Segunda coluna do rodapé
4. **Rodapé 3** - Terceira coluna do rodapé

## 🔧 Customização

### Cores

As cores principais podem ser alteradas no arquivo `style.css` através das variáveis CSS:

```css
:root {
    --primary-color: #2c3e50;
    --secondary-color: #3498db;
    --accent-color: #e74c3c;
}
```

### Menus

O tema suporta dois menus:

- **Menu Principal** - Aparece no cabeçalho
- **Menu Rodapé** - Aparece no rodapé

Configure em **Aparência > Menus**.

### WooCommerce

O tema inclui customizações específicas para o WooCommerce:

- 12 produtos por página
- Grade de 3 colunas
- 4 produtos relacionados
- Contador de carrinho dinâmico
- Templates personalizados

## 👨‍💻 Desenvolvimento

### Estrutura de Código

- Segue os padrões de codificação do WordPress
- Código comentado e documentado
- Funções prefixadas com `cartas_`
- Text domain: `cartas-ao-vento`

### Hooks Disponíveis

O tema utiliza os hooks padrão do WordPress e WooCommerce, permitindo fácil extensão através de plugins.

## 📝 Licença

GNU General Public License v2 or later

## 👤 Autor

**Cah Felix**
- Website: [cahfelix.tech](https://cahfelix.tech)

## 🆘 Suporte

Para suporte e dúvidas, entre em contato através do site do autor.

---

Desenvolvido com ❤️ por Cah Felix

# cartas-ao-vento-theme
