<?php
/**
 * Modular template for the Inscrições page
 */

get_header();
?>

<main id="main-content">

  <div class="page-hero">
    <div class="page-hero-inner">
      <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Início</a> › Inscrições</p>
      <span class="tag">Fique ligado!</span>
      <h1>Inscreva-se nas atrações do Espaço Pop</h1>
    </div>
  </div>

  <!-- ESPAÇO POP -->
  <section class="pop-section" aria-labelledby="pop-title">
    <div class="container">
      <span class="tag">Espaço Pop</span>
      <h2 id="pop-title">Concurso Cosplay e Artist Alley</h2>
      <p>Participe das atrações do nosso Espaço Pop! Escolha a modalidade abaixo e garanta sua vaga.</p>

      <div class="form-cards">

        <div class="form-card" aria-labelledby="cosplay-title">
          <span class="form-card-kicker">Competição oficial do festival</span>
          <h3 id="cosplay-title">Concurso Cosplay</h3>
          <p>Monte o melhor cosplay e suba ao palco principal! Aberto para todos os estilos e categorias.</p>
          <ul>
            <li>Categorias: Solo, Dupla e Grupo</li>
            <li>Premiação para os melhores colocados</li>
            <li>Inscrições abertas em breve</li>
            <li>Local: Palco Central</li>
          </ul>
          <span class="price-tag">Gratuito</span>
          <a href="#" class="btn-p" aria-label="Inscrever-se no Concurso Cosplay">Inscrever no Cosplay</a>
        </div>

        <div class="form-card" aria-labelledby="alley-title">
          <span class="form-card-kicker">Espaço para artistas independentes</span>
          <h3 id="alley-title">Artist Alley</h3>
          <p>Exponha e venda suas criações: fanarts, artesanatos e produtos autorais.</p>
          <ul>
            <li>Mesa: 2,20m x 0,80m</li>
            <li>2 cadeiras incluídas</li>
            <li>Pranchão e cavalete</li>
            <li>Isenção de estacionamento</li>
            <li>Internet para máquina de cartão</li>
            <li>Água incluída</li>
          </ul>
          <span class="price-tag">R$ 350,00 / mesa</span>
          <a href="#" class="btn-p" aria-label="Inscrever-se no Artist Alley">Inscrever no Artist Alley</a>
        </div>

      </div>
    </div>
  </section>

  <hr class="form-divider">

  <!-- TRANSPORTE -->
  <section class="transport-section" aria-labelledby="transport-title">
    <div class="container">
      <span class="tag">Como chegar</span>
      <h2 id="transport-title">Ônibus e caravanas</h2>
      <p>Vai de ônibus ou tem uma caravana para levar ao evento? Veja como organizar o seu grupo.</p>

      <div class="transport-grid">

        <!-- Ônibus oficial -->
        <div class="transport-box" aria-labelledby="onibus-box-title">
          <h3 id="onibus-box-title">🚌 Ônibus Oficial do Evento</h3>
          <div class="transport-notice">
            <p><strong>Valor:</strong> R$ 60,00 + taxa de conveniência (via Sympla)</p>
          </div>
          <div>
            <p style="font-size:.95rem"><strong>Venda presencial</strong> (para quem tem dificuldade online):</p>
            <p style="font-size:.92rem;margin-top:.4rem">Secretaria do Bunkyo<br>Seg–sex, das 9h às 18h<br>Rua São Joaquim, 381 – Liberdade, SP<br><a href="tel:+551132081755" style="color:var(--azul)">(11) 3208-1755</a></p>
          </div>
          <ul class="transport-rules" aria-label="Regras do ônibus oficial">
            <li>🚫 Pets não são permitidos no ônibus</li>
            <li>🧒 Crianças com cinto de segurança obrigatório</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/onibus')); ?>" class="btn-p" aria-label="Garantir ingresso do ônibus oficial">Garantir meu ingresso</a>
        </div>

        <!-- Caravanas -->
        <div class="transport-box" aria-labelledby="caravana-box-title">
          <h3 id="caravana-box-title">🚍 Caravanas para o Festival</h3>
          <p style="font-size:.95rem">Organize um grupo e venha de ônibus fretado! Escolha o veículo pelo tamanho da sua turma.</p>
          <div style="overflow-x:auto;border-radius:10px;border:1.5px solid var(--rosa-claro)">
            <table class="caravana-table" aria-label="Preços de caravana por tipo de veículo">
              <thead>
                <tr>
                  <th scope="col">Veículo</th>
                  <th scope="col">Passageiros</th>
                  <th scope="col">Valor</th>
                </tr>
              </thead>
              <tbody>
                <tr><td>🚐 Van</td><td>8 a 15</td><td><strong>R$ 200</strong></td></tr>
                <tr><td>🚌 Micro-ônibus</td><td>15 a 30</td><td><strong>R$ 300</strong></td></tr>
                <tr><td>🚍 Ônibus</td><td>42 a 50</td><td><strong>R$ 400</strong></td></tr>
              </tbody>
            </table>
          </div>
          <a href="#" class="btn-s" aria-label="Inscrever caravana para o festival">Inscreva sua caravana</a>
        </div>

      </div>
    </div>
  </section>

</main>

<?php
get_footer();
