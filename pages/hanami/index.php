<?php
/**
 * Modular template for the Hanami page
 */

get_header();
?>

<main id="main-content">

  <div class="page-hero">
    <div class="page-hero-inner">
      <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Início</a> › Hanami</p>
      <span class="tag">Venha contemplar as cerejeiras</span>
      <h1>Participe do Hanami</h1>
      <p style="margin-top:.5rem;font-size:1.1rem;font-weight:500;color:var(--vinho)">📅 06 a 10/07 e 13 a 17/07 | Horário: 9h às 17h</p>
    </div>
  </div>

  <!-- SOBRE O HANAMI -->
  <section class="hanami-section" aria-labelledby="hanami-title">
    <div class="container">
      <div class="hanami-grid">
        <!-- Imagem principal -->
        <div class="img-block tall">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/hanami/capa%20hanami.png' ); ?>" alt="Foto de visitantes contemplando as cerejeiras em flor no Parque Bunkyo – prática do Hanami">
        </div>
        <!-- Texto -->
        <div class="hanami-body">
          <h2 id="hanami-title">O que é o Hanami?</h2>
          <p>
            O <span class="highlight-word">Hanami (花見)</span> é a tradicional prática japonesa de apreciar as flores das cerejeiras —
            as famosas <em>sakuras</em>. A palavra significa literalmente <strong>"contemplar flores"</strong>.
          </p>
          <p>
            Durante o festival, os visitantes são convidados a sentar embaixo das cerejeiras,
            apreciar a beleza das flores e compartilhar momentos especiais em família.
            Uma tradição que remonta ao <strong>século VIII no Japão</strong>.
          </p>
          <p>
            O Parque Bunkyo Kokushikan conta com mais de <strong>1.000 pés de cerejeiras</strong>,
            proporcionando um cenário único para este momento de paz e contemplação.
          </p>
          <div class="date-box" aria-label="Datas e horários do Hanami">
            <p><strong>📅 Datas do Hanami (visitação na semana):</strong></p>
            <p>06 a 10 de julho e 13 a 17 de julho de 2026</p>
            <p style="margin-top:.5rem"><strong>⏰ Horário de funcionamento:</strong> 9h às 17h</p>
            <p style="margin-top:.5rem"><strong>🚗 Estacionamento:</strong> R$ 60,00</p>
            <p style="margin-top:.5rem"><strong>📍</strong> Parque Bunkyo Kokushikan – São Roque, SP</p>
          </div>
        </div>
      </div>

      <!-- Galeria de imagens -->
      <div class="img-grid" style="margin-top:2.5rem;" aria-label="Galeria de fotos do Hanami">
        <div class="img-block medium">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/hanami/cerejeiras.png' ); ?>" alt="Foto das cerejeiras em flor no parque">
        </div>
        <div class="img-block medium">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/hanami/familias%20piquenique.png' ); ?>" alt="Foto de famílias no piquenique sob as cerejeiras">
        </div>
      </div>
    </div>
  </section>

  <!-- DICAS E INFORMAÇÕES -->
  <section class="info-section" aria-labelledby="dicas-title">
    <div class="container">
      <span class="tag">Dicas para aproveitar</span>
      <h2 id="dicas-title">Como aproveitar ao máximo</h2>
      <div class="info-cards">
        <div class="info-card">
          <span class="info-card-icon" aria-hidden="true">🧺</span>
          <h3>Traga seu piquenique</h3>
          <p>É permitido e bem-vindo! Estenda uma manta sob as cerejeiras e compartilhe comida em família — uma das formas mais autênticas de viver o Hanami.</p>
        </div>
        <div class="info-card">
          <span class="info-card-icon" aria-hidden="true">📸</span>
          <h3>Registre as memórias</h3>
          <p>O cenário com mais de 1.000 pés de cerejeiras é único no Brasil. Traga sua câmera ou celular para eternizar este momento especial.</p>
        </div>
        <div class="info-card">
          <span class="info-card-icon" aria-hidden="true">🌸</span>
          <h3>Respeite a natureza</h3>
          <p>Por favor, não arranque flores ou galhos das cerejeiras. A beleza do Hanami está em contemplar, não em colher.</p>
        </div>
        <div class="info-card">
          <span class="info-card-icon" aria-hidden="true">👨‍👩‍👧</span>
          <h3>Para toda a família</h3>
          <p>O Hanami é uma tradição para todas as idades. Cadeirantes têm acesso facilitado e há Espaço Melhor Idade exclusivo para visitantes da terceira idade.</p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
