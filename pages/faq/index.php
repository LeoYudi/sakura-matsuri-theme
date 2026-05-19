<?php
/**
 * Modular template for the FAQ (Dúvidas) page
 */

get_header();
?>

<main id="main-content">

  <div class="page-hero">
    <div class="page-hero-inner">
      <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Início</a> › Dúvidas Frequentes</p>
      <span class="tag">Informações Úteis</span>
      <h1>Tudo o que você precisa saber!</h1>
    </div>
  </div>

  <!-- COMO CHEGAR -->
  <section class="chegar-section" aria-labelledby="chegar-title">
    <div class="container">
      <span class="tag">Localização</span>
      <h2 id="chegar-title">Como chegar</h2>
      <div class="chegar-grid">
        <div>
          <div class="info-box" style="margin-bottom:1.25rem">
            <h3>📍 Endereço</h3>
            <p><strong>Parque Bunkyo Kokushikan</strong><br>
              Estrada Municipal do Carmo, 801<br>
              Bairro do Carmo – São Roque, SP<br>
              CEP 18145-340</p>
            <p style="margin-top:.75rem"><strong>De carro:</strong> Pela Rodovia Raposo Tavares (SP-270), siga até São Roque pela Estrada Municipal do Carmo.</p>
            <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer" class="btn-s">📌 Abrir no Google Maps</a>
          </div>
          <div class="info-box">
            <h3>🅿️ Estacionamento</h3>
            <div class="parking-grid">
              <div class="park-item">🚗 Carro<strong>R$ 60,00</strong></div>
              <div class="park-item">🏍 Moto<strong>Grátis</strong></div>
              <div class="park-item">🚲 Bicicleta<strong>Grátis</strong></div>
              <div class="park-item">🚌 Ônibus<strong>R$ 60 + taxa</strong></div>
            </div>
          </div>
        </div>
        <!-- Mapa placeholder -->
        <div class="img-block tall" role="img" aria-label="Espaço para mapa de localização do Parque Bunkyo Kokushikan em São Roque, SP">
          <svg class="img-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" stroke="#fc7386" stroke-width="1.5" aria-hidden="true">
            <path d="M24 4C16 4 10 10.3 10 18c0 11 14 26 14 26s14-15 14-26c0-7.7-6-14-14-14z" />
            <circle cx="24" cy="18" r="4" />
          </svg>
          Mapa / Google Maps embed
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section" aria-labelledby="faq-title">
    <div class="container">
      <span class="tag">Perguntas frequentes</span>
      <h2 id="faq-title">Dúvidas frequentes</h2>
      <div class="faq-list" role="list">

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq1">O festival é gratuito?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq1" role="region">Sim! O festival é <strong>gratuito para todos os públicos</strong>. Não é necessário ingresso para entrar no evento. O único custo opcional é o estacionamento.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq2">Quanto custa o estacionamento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq2" role="region">Carro: R$ 60,00. Moto e bicicleta: gratuito. Ônibus de caravana: R$ 60,00 mais a taxa do site.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq3">Posso levar meu pet?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq3" role="region">Sim! Pets são bem-vindos, desde que com <strong>coleira e acompanhados de um responsável</strong>. Atenção: pets <strong>não são permitidos no ônibus oficial</strong> do evento.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq4">O evento tem acessibilidade?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq4" role="region">Sim! <strong>Cadeirantes têm acesso facilitado</strong> no parque. O evento também conta com um <strong>Espaço Melhor Idade exclusivo</strong> para visitantes da terceira idade.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq5">Como comprar o ingresso do ônibus sem internet?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq5" role="region">Compra presencial na <strong>Secretaria do Bunkyo</strong>, de segunda a sexta, das 9h às 18h.<br>Endereço: Rua São Joaquim, 381 – Liberdade, SP.<br>Telefone: <a href="tel:+551132081755" style="color:var(--azul)">(11) 3208-1755</a></div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq6">O parque abre durante a semana?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq6" role="region">O festival ocorre <strong>apenas nos finais de semana</strong>: 04, 05, 11 e 12 de julho de 2026. O parque não está aberto para visitação durante a semana.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq7">O que é o Hanami?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq7" role="region">Hanami (花見) é a tradicional prática japonesa de apreciar as flores das cerejeiras. A palavra significa literalmente "contemplar flores". <a href="<?php echo esc_url(home_url('/hanami')); ?>" style="color:var(--azul)">Saiba mais na página Hanami.</a></div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq8">O que é o Tooro Nagashi?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq8" role="region">O Tooro Nagashi (灯籠流し) é a cerimônia japonesa de soltar lanternas na água, como forma de homenagear os antepassados. Uma das atrações mais emocionantes do festival.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq9">O que é o trenzinho do evento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq9" role="region">O trenzinho percorre o parque, facilitando o deslocamento entre as atrações. É especialmente útil para visitantes idosos, crianças e pessoas com mobilidade reduzida. Mais informações serão divulgadas em breve.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq10">Posso levar alimento próprio ao evento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq10" role="region">Sim! É permitido levar alimentos próprios para aproveitar o evento, inclusive para o piquenique no Hanami.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq11">Posso fazer piquenique no evento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq11" role="region">Sim! Piqueniques são bem-vindos no parque, especialmente sob as cerejeiras. É uma das formas mais autênticas de praticar o Hanami.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq12">Posso fazer ensaio fotográfico no evento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq12" role="region">Mais informações sobre ensaios fotográficos serão divulgadas em breve. Fique de olho nas redes sociais do festival.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq13">Como funciona o sorteio do evento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq13" role="region">Detalhes sobre o sorteio do evento serão divulgados em breve. Acompanhe as redes sociais e o site oficial para mais informações.</div>
        </div>

      </div>
    </div>
  </section>

  <!-- NORMAS -->
  <section class="normas-section" aria-labelledby="normas-title">
    <div class="container">
      <span class="tag">Regras do parque</span>
      <h2 id="normas-title">Normas do parque</h2>
      <div class="normas-grid">
        <div class="norma-group">
          <p class="norma-title ok" aria-label="Itens permitidos">✅ Permitido e orientações</p>
          <ul class="norma-list" aria-label="Lista de itens permitidos e orientações">
            <li>Respeite o espaço e a natureza</li>
            <li>Descarte o lixo nas lixeiras</li>
            <li>Não arranque flores ou galhos das cerejeiras</li>
            <li>Pets permitidos com coleira e responsável</li>
            <li>Cadeirantes têm acesso facilitado</li>
          </ul>
        </div>
        <div class="norma-group proibido">
          <p class="norma-title no" aria-label="Itens proibidos">🚫 Proibido</p>
          <ul class="norma-list" aria-label="Lista de itens proibidos">
            <li>Entrar com bebidas alcoólicas externas</li>
            <li>Acampar ou pernoitar no parque</li>
            <li>Uso de drones sem autorização prévia</li>
            <li>Circular em áreas restritas</li>
            <li>Pets no ônibus do evento</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
