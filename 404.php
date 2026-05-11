<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Sakura_Matsuri_Theme
 */

$template = locate_template("pages/404/index.php");

if ($template) {
  include $template;
  exit;
}

// Fallback if the modular template is missing
get_header();
?>

<main id="primary" class="site-main container" style="padding: 100px 20px; text-align: center;">
  <section class="error-404 not-found">
    <header class="page-header">
      <h1 class="page-title">404 - Página não encontrada</h1>
    </header>

    <div class="page-content">
      <p>Desculpe, mas a página que você está procurando não existe ou foi movida.</p>
      <div style="margin-top: 2rem;">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="social-btn">Voltar para o Início</a>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
