<?php
/**
 * Modular template for the Ônibus page
 */

get_header();
?>

<main id="main-content">

  <div class="page-hero">
    <div class="page-hero-inner">
      <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Início</a> › Ônibus Oficial</p>
      <span class="tag">Transporte oficial</span>
      <h1>Ônibus para o Sakura Matsuri</h1>
    </div>
  </div>

  <!-- REDIRECT CARD -->
  <section class="redirect-section" aria-labelledby="redirect-title">
    <div class="container">
      <div class="redirect-card" aria-labelledby="redirect-title">
        <span class="redirect-icon" aria-hidden="true">🚌</span>
        <h2 id="redirect-title">Garanta seu lugar no ônibus oficial!</h2>
        <p>A compra do ingresso do ônibus é feita pelo site da Sympla. Clique no botão abaixo para ser direcionado à página de venda.</p>

        <div class="redirect-price" aria-label="Informações de preço e regras">
          <p><strong>Valor:</strong> R$ 60,00 + taxa de conveniência</p>
          <p><strong>Plataforma:</strong> Sympla</p>
          <p style="margin-top:.5rem;font-size:.88rem;color:var(--cinza)">🚫 Pets não são permitidos no ônibus &nbsp;·&nbsp; 🧒 Crianças com cinto obrigatório</p>
        </div>

        <div class="btn-row">
          <a href="#" class="btn-p" aria-label="Comprar ingresso do ônibus oficial na Sympla" rel="noopener noreferrer">Comprar ingresso na Sympla</a>
        </div>

        <p style="font-size:.88rem;color:var(--cinza);margin:0">Ao clicar, você será redirecionado ao site da Sympla para finalizar a compra.</p>
      </div>
    </div>
  </section>

  <!-- INFO STRIP -->
  <section class="info-strip" aria-labelledby="info-title">
    <div class="container">
      <h2 id="info-title" style="text-align:center;margin-bottom:2rem">O que você precisa saber</h2>
      <div class="strip-grid">
        <div class="strip-card">
          <span class="strip-icon" aria-hidden="true">💳</span>
          <h3>Pagamento online</h3>
          <p>A compra é feita pelo site da Sympla com cartão de crédito, débito, Pix ou boleto bancário.</p>
        </div>
        <div class="strip-card">
          <span class="strip-icon" aria-hidden="true">📱</span>
          <h3>Ingresso digital</h3>
          <p>Após a compra, você recebe o ingresso por e-mail. Apresente no embarque pelo celular ou impresso.</p>
        </div>
        <div class="strip-card">
          <span class="strip-icon" aria-hidden="true">🐾</span>
          <h3>Sem pets</h3>
          <p>Animais de estimação não são permitidos no ônibus oficial do evento.</p>
        </div>
        <div class="strip-card">
          <span class="strip-icon" aria-hidden="true">🧒</span>
          <h3>Crianças</h3>
          <p>Crianças devem utilizar cinto de segurança durante todo o trajeto.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- VENDA PRESENCIAL -->
  <section class="presencial-section" aria-labelledby="presencial-title">
    <div class="container">
      <span class="tag">Sem internet?</span>
      <h2 id="presencial-title" style="margin-bottom:1.5rem">Compra presencial disponível</h2>
      <div class="presencial-box">
        <h3>🏢 Secretaria do Bunkyo</h3>
        <p>Para quem tem dificuldade em comprar pela internet, os ingressos também estão disponíveis presencialmente:</p>
        <p><strong>Endereço:</strong> Rua São Joaquim, 381 – Liberdade, São Paulo – SP</p>
        <p><strong>Horário:</strong> Segunda a sexta, das 9h às 18h</p>
        <p><strong>Telefone:</strong> <a href="tel:+551132081755" style="color:var(--azul)">(11) 3208-1755</a></p>
        <p style="margin-top:.75rem;font-size:.92rem;color:var(--cinza)">Leve o valor exato em dinheiro ou cartão. O ingresso será entregue no ato da compra.</p>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
