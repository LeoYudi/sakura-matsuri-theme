<?php
/**
 * Modular template for the 404 Not Found page
 */

get_header();
?>

<main class="error-page container">
  <div class="error-content">
    <div class="error-icon">🌸</div>
    <h1>404</h1>
    <h2>Oops! Página não encontrada</h2>
    <p>A página que você procura pode ter sido removida, mudado de nome ou está temporariamente indisponível.</p>
    
    <div class="error-actions">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
        Voltar para a Home
      </a>
    </div>
  </div>
</main>

<?php
get_footer();
