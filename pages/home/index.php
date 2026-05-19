<?php
/**
 * Modular template for the Home page
 */

get_header();
?>

<main id="main-content">

  <!-- BANNER HERO -->
  <section class="hero" aria-labelledby="hero-title">
    <div class="hero-inner">
      <div>
        <p class="hero-edition">29ª Edição · Festival das Cerejeiras Bunkyos</p>
        <h1 id="hero-title" class="hero-title">As cerejeiras florescem apenas uma vez ao ano! Não perca esse evento!</h1>
        <p class="hero-desc">
          O Sakura Matsuri é um dos maiores e mais tradicionais festivais japoneses do Brasil, reunindo
          arte, gastronomia, natureza e convivência em meio às cerejeiras em flor.
          <strong>Entrada gratuita para todos os públicos.</strong>
        </p>
        <div class="date-box" aria-label="Datas e horários">
          <p><strong>📅 04, 05, 11 e 12 de julho de 2026</strong></p>
          <p><strong>⏰ Sábados:</strong> 10h às 19h &nbsp;·&nbsp; <strong>Domingos:</strong> 10h às 17h</p>
          <p><strong>📍</strong> Parque Bunkyo Kokushikan – São Roque, SP</p>
        </div>
        <div class="stats" aria-label="Números do evento">
          <div class="stat-card">
            <span class="stat-num">29ª</span>
            <span class="stat-label">Edição</span>
          </div>
          <div class="stat-card">
            <span class="stat-num">+1.000</span>
            <span class="stat-label">Pés de cerejeiras</span>
          </div>
          <div class="stat-card">
            <span class="stat-num">+60 mil</span>
            <span class="stat-label">Visitas esperadas</span>
          </div>
        </div>
        <div class="btn-row">
          <a href="<?php echo esc_url(home_url('/faq')); ?>" class="btn-p">Saiba mais sobre o evento</a>
          <a href="<?php echo esc_url(home_url('/onibus')); ?>" class="btn-s">Ônibus oficial</a>
        </div>
      </div>
      <!-- Banner image -->
      <div class="img-block tall" role="img" aria-label="Imagem principal do festival – cerejeiras em flor no Parque Bunkyo">
        <svg class="img-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" stroke="#fc7386" stroke-width="1.5" aria-hidden="true">
          <rect x="4" y="10" width="40" height="30" rx="4" />
          <circle cx="17" cy="22" r="4" />
          <polyline points="4,32 15,22 23,30 30,22 44,36" />
        </svg>
        Banner principal do evento
      </div>
    </div>
  </section>

  <!-- PRINCIPAIS ATRAÇÕES -->
  <section class="atracoes-section" aria-labelledby="atracoes-title">
    <div class="container">
      <span class="tag">O que você vai encontrar</span>
      <h2 id="atracoes-title">Principais atrações</h2>
      <p>Uma programação completa para toda a família — da criança ao Espaço Melhor Idade.</p>
      <div class="atracoes-grid" role="list">
        <div class="atracao-card" role="listitem"><span class="atracao-icon" aria-hidden="true">🎤</span><span class="atracao-name">Shows Artísticos</span></div>
        <div class="atracao-card" role="listitem"><span class="atracao-icon" aria-hidden="true">🎨</span><span class="atracao-name">Oficinas Culturais</span></div>
        <div class="atracao-card" role="listitem"><span class="atracao-icon" aria-hidden="true">🌸</span><span class="atracao-name">Espaço Melhor Idade</span></div>
        <div class="atracao-card" role="listitem"><span class="atracao-icon" aria-hidden="true">🧒</span><span class="atracao-name">Espaço Kids</span></div>
        <div class="atracao-card" role="listitem"><span class="atracao-icon" aria-hidden="true">🎮</span><span class="atracao-name">Espaço Pop</span></div>
        <div class="atracao-card" role="listitem"><span class="atracao-icon" aria-hidden="true">🐾</span><span class="atracao-name">Espaço Pets</span></div>
        <div class="atracao-card" role="listitem"><span class="atracao-icon" aria-hidden="true">🏮</span><span class="atracao-name">Tooro Nagashi</span></div>
        <div class="atracao-card" role="listitem"><span class="atracao-icon" aria-hidden="true">🛍️</span><span class="atracao-name">Bazar</span></div>
        <div class="atracao-card" role="listitem"><span class="atracao-icon" aria-hidden="true">🌾</span><span class="atracao-name">4° Expo Bunkyo Agro</span></div>
        <div class="atracao-card" role="listitem"><span class="atracao-icon" aria-hidden="true">🍱</span><span class="atracao-name">Gastronomia</span></div>
      </div>
      <div class="img-row">
        <div class="img-block medium" role="img" aria-label="Foto dos shows artísticos do festival">
          <svg class="img-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" stroke="#fc7386" stroke-width="1.5" aria-hidden="true">
            <rect x="4" y="10" width="40" height="30" rx="4" />
            <circle cx="17" cy="22" r="4" />
            <polyline points="4,32 15,22 23,30 30,22 44,36" />
          </svg>
          Shows artísticos
        </div>
        <div class="img-block medium" role="img" aria-label="Foto das oficinas culturais">
          <svg class="img-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" stroke="#fc7386" stroke-width="1.5" aria-hidden="true">
            <rect x="4" y="10" width="40" height="30" rx="4" />
            <circle cx="17" cy="22" r="4" />
            <polyline points="4,32 15,22 23,30 30,22 44,36" />
          </svg>
          Oficinas culturais
        </div>
        <div class="img-block medium" role="img" aria-label="Foto da gastronomia e bazar">
          <svg class="img-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" stroke="#fc7386" stroke-width="1.5" aria-hidden="true">
            <rect x="4" y="10" width="40" height="30" rx="4" />
            <circle cx="17" cy="22" r="4" />
            <polyline points="4,32 15,22 23,30 30,22 44,36" />
          </svg>
          Gastronomia e bazar
        </div>
      </div>
    </div>
  </section>

  <!-- ACESSO RÁPIDO -->
  <section class="quick-section" aria-labelledby="quick-title">
    <div class="container">
      <span class="tag">Acesso rápido</span>
      <h2 id="quick-title">O que você precisa saber</h2>
      <div class="quick-grid">
        <a href="<?php echo esc_url(home_url('/faq')); ?>" class="quick-card">
          <span class="quick-icon" aria-hidden="true">❓</span>
          <h3>Dúvidas Frequentes</h3>
          <p>Principais perguntas sobre o Sakura Matsuri — gratuidade, pets, acessibilidade e mais.</p>
        </a>
        <a href="<?php echo esc_url(home_url('/inscricoes')); ?>" class="quick-card">
          <span class="quick-icon" aria-hidden="true">📝</span>
          <h3>Inscrições</h3>
          <p>Cosplay, Artist Alley e Caravanas. Participe das atrações do Espaço Pop.</p>
        </a>
        <a href="<?php echo esc_url(home_url('/onibus')); ?>" class="quick-card">
          <span class="quick-icon" aria-hidden="true">🚌</span>
          <h3>Ingressos Ônibus</h3>
          <p>Acesse informações e venda para o transporte oficial ao parque.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- PATROCINADORES -->
  <section class="pat-section" aria-labelledby="pat-title">
    <div class="container">
      <h2 id="pat-title" style="margin-bottom:2rem;">Apoio e realização</h2>
      <span class="pat-label">Patrocinadores — Lei Rouanet | Vale Cultura</span>
      <div class="logos-row">
        <div class="logo-ph">Logo Yanmar</div>
      </div>
      <span class="pat-label">Apoio</span>
      <div class="logos-row">
        <div class="logo-ph">Logo Bradesco</div>
        <div class="logo-ph">Sakura Alimentos</div>
      </div>
      <span class="pat-label">Realização</span>
      <div class="logos-row">
        <div class="logo-ph">Logo Bunkyo</div>
        <div class="logo-ph">Parque Bunkyo</div>
        <div class="logo-ph">Ministério da Cultura</div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
