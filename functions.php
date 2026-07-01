<?php

/* =====================================================
 * Setup básico do tema
 * ===================================================== */
function setup_theme() {

  // Título automático <title>
  add_theme_support('title-tag');

  // Imagem destacada
  add_theme_support('post-thumbnails');

  // HTML5 markup
  add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script'
  ]);

  // Menus
  register_nav_menus([
    'primary' => 'Menu Principal',
    'footer'  => 'Menu Rodapé'
  ]);
}
add_action('after_setup_theme', 'setup_theme');


/* =====================================================
 * CSS e JS do tema
 * ===================================================== */
function theme_version() {
  static $version = null;

  if ($version === null) {
    $version = wp_get_theme()->get('Version');
  }

  return $version;
}

function theme_assets() {
  $version = theme_version();

  // CSS principal
  wp_enqueue_style(
    'theme_style',
    get_stylesheet_uri(),
    [],
    $version,
    'all'
  );

  // JS opcional
  wp_enqueue_script(
    'theme_script',
    get_template_directory_uri() . '/static/js/script.js',
    [],
    $version,
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_assets');

function import_css_by_page() {
  $slug = '';

  if (is_page()) {
    global $post;
    $slug = $post->post_name;
  } elseif (is_404()) {
    $slug = '404';
  }

  if ($slug) {
    $path = "/pages/{$slug}/style.css";
    $file = get_template_directory() . $path;

    if (file_exists($file)) {
      wp_enqueue_style(
        "css-page-{$slug}",
        get_template_directory_uri() . $path,
        [],
        theme_version(),
        'all'
      );
    }
  }
}
add_action('wp_enqueue_scripts', 'import_css_by_page');

function import_js_by_page() {
  $slug = '';

  if (is_page()) {
    global $post;
    $slug = $post->post_name;
  } elseif (is_404()) {
    $slug = '404';
  }

  if ($slug) {
    $path = "/pages/{$slug}/script.js";
    $file = get_template_directory() . $path;

    if (file_exists($file)) {
      wp_enqueue_script(
        "js-page-{$slug}",
        get_template_directory_uri() . $path,
        [],
        theme_version(),
        true
      );
    }
  }
}
add_action('wp_enqueue_scripts', 'import_js_by_page');

/* =====================================================
 * SEO Tags Customization
 * ===================================================== */
function add_seo_meta_tags() {
  if (is_front_page() || is_home()) {
    echo '<meta name="description" content="Venha viver o evento mais florido do ano! Viva a gastronomia oriental, shows, Tooro Nagashi e mais de 1000 pés de cerejeiras no Parque Bunkyo Kokushikan.">' . "\n";
    echo '<meta name="keywords" content="Sakura Matsuri 2026, Festival das Cerejeiras, Parque Bunkyo Kokushikan, Artist\'s Alley, Tooro Nagashi">' . "\n";
  }
}
add_action('wp_head', 'add_seo_meta_tags');

function custom_front_page_title($title) {
  if (is_front_page()) {
    $title['title'] = '29° Sakura Matsuri 2026 | Festival das Cerejeiras Bunkyos';
    unset($title['site']);
    unset($title['tagline']);
  }
  return $title;
}
add_filter('document_title_parts', 'custom_front_page_title');
?>