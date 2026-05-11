<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <a href="#main-content" class="skip-link">Pular para o conteúdo principal</a>

  <nav role="navigation" aria-label="Menu principal">
    <div class="nav-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">🌸 Sakura Matsuri<span>29ª Edição · 2026</span></a>
      <button class="nav-toggle" aria-controls="nav-menu" aria-expanded="false" aria-label="Abrir menu">
        <span></span><span></span><span></span>
      </button>
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'nav-links',
        'menu_id'        => 'nav-menu',
        'items_wrap'     => '<ul id="%1$s" class="%2$s" role="list">%3$s</ul>',
        'fallback_cb'    => '__return_false',
      ]);
      ?>
    </div>
  </nav>

  <main id="main-content">
