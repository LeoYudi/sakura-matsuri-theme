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
        <p class="hero-edition">Sobre o evento</p>
        <h1 id="hero-title" class="hero-title">As cerejeiras florescem apenas uma vez ao ano! Não perca esse evento!</h1>
        <p class="hero-desc">
          O Sakura Matsuri é um dos maiores e mais tradicionais festivais japoneses do Brasil, reunindo arte, gastronomia e a prática do hanami (contemplação das flores). Com atrações para crianças, jovens e um exclusivo Espaço Melhor Idade, o evento garante diversão para toda a família. Entrada gratuita para todos os públicos.
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
            <span class="stat-num">+ de 1.000</span>
            <span class="stat-label">Pés de cerejeiras</span>
          </div>
          <div class="stat-card">
            <span class="stat-num">+ de 60 mil</span>
            <span class="stat-label">Visitas</span>
          </div>
        </div>
        <div class="btn-row">
          <a href="<?php echo esc_url(home_url('/faq')); ?>" class="btn-p">Saiba mais sobre o evento</a>
          <a href="<?php echo esc_url(home_url('/onibus')); ?>" class="btn-s">Ônibus oficial</a>
        </div>
      </div>
      <!-- Banner image -->
      <div class="img-block tall">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/home/home.png' ); ?>" alt="Imagem principal do festival – cerejeiras em flor no Parque Bunkyo">
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
        <div class="img-block medium">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/home/1%20-%20shows%20artisticos.png' ); ?>" alt="Foto dos shows artísticos do festival">
        </div>
        <div class="img-block medium">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/home/2%20-%20Oficinas%20culturais.png' ); ?>" alt="Foto das oficinas culturais">
        </div>
        <div class="img-block medium">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/home/10%20-%20Gastronomia.png' ); ?>" alt="Foto da gastronomia e bazar">
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
          <p>Principais perguntas sobre o Sakura Matsuri</p>
        </a>
        <a href="<?php echo esc_url(home_url('/inscricoes')); ?>" class="quick-card">
          <span class="quick-icon" aria-hidden="true">📝</span>
          <h3>Inscrições</h3>
          <p>Cosplay, Artist Alley e Caravanas.</p>
        </a>
        <a href="<?php echo esc_url(home_url('/onibus')); ?>" class="quick-card">
          <span class="quick-icon" aria-hidden="true">🚌</span>
          <h3>Ingressos Ônibus</h3>
          <p>Acesse informações e venda para o transporte ao parque.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- PATROCINADORES -->
  <section class="pat-section" aria-labelledby="pat-title">
    <div class="container">
      <h2 id="pat-title" style="margin-bottom:2rem;">Apoio e realização</h2>
      
      <span class="pat-label">Lei Rouanet | Vale Cultura</span>
      <div class="logos-row">
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/1%20-%202026%20LogoLeiRouanet_colorida.png' ); ?>" alt="Lei Rouanet">
        </div>
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/2%20-%20MARCAvaleculturaPREFERENCIAL.png' ); ?>" alt="Vale Cultura">
        </div>
      </div>

      <span class="pat-label">Patrocinadores</span>
      <div class="logos-row">
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/3-%20YANMAR%20Horizontal%20Red%20RBG.png' ); ?>" alt="Yanmar">
        </div>
      </div>

      <span class="pat-label">Apoio</span>
      <div class="logos-row">
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/4%20-%20Bradesco.png' ); ?>" alt="Bradesco">
        </div>
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/5-%20Sakura%202026.png' ); ?>" alt="Sakura Alimentos">
        </div>
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/6%20-%20FUJIFILM_Slogan.png' ); ?>" alt="Fujifilm">
        </div>
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/pilot.png' ); ?>" alt="Pilot">
        </div>
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/7%20-%20kaika.png' ); ?>" alt="KAIKA">
        </div>
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/8%20-%20PERKON.png' ); ?>" alt="Perkon">
        </div>
      </div>

      <span class="pat-label">Apoio Institucional</span>
      <div class="logos-row">
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/10%20-%20Brasa%CC%83o%20Sa%CC%83o%20Roque.jpeg' ); ?>" alt="Prefeitura de São Roque">
        </div>
      </div>

      <span class="pat-label">Realização</span>
      <div class="logos-row">
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/bunkyo.png' ); ?>" alt="Bunkyo">
        </div>
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/12%20-%20BUNKYO%20MARCA%20HORIZONTAL%20AF01.png' ); ?>" alt="Parque Bunkyo">
        </div>
        <div class="logo-box">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/sponsors/13%20-%20minc-govbr_horizontal-1.png' ); ?>" alt="Ministério da Cultura">
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
