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
    'primary' => 'Menu Principal'
  ]);
}
add_action('after_setup_theme', 'setup_theme');


/* =====================================================
 * CSS e JS do tema
 * ===================================================== */
function theme_assets() {

  // CSS principal
  wp_enqueue_style(
    'theme_style',
    get_stylesheet_uri(),
    [],
    time()
  );

  // JS opcional
  wp_enqueue_script(
    'theme_script',
    get_template_directory_uri() . '/assets/script.js',
    [],
    time(),
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_assets');

function import_css_by_page() {

  if (is_page()) {
    global $post;

    $slug = $post->post_name;
    $path = "/pages/{$slug}/style.css";
    $file = get_template_directory() . $path;

    if (file_exists($file)) {
      wp_enqueue_style(
        "css-page-{$slug}",
        get_template_directory_uri() . $path,
        [],
        time()
      );
    }
  }
}
add_action('wp_enqueue_scripts', 'import_css_by_page');
