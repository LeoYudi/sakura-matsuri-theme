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
              <div class="park-item">🚐 Van<strong>R$ 200,00</strong></div>
              <div class="park-item">🚌 Micro-ônibus<strong>R$ 300,00</strong></div>
              <div class="park-item">🚍 Ônibus<strong>R$ 400,00</strong></div>
            </div>
          </div>
        </div>
        <!-- Mapa Google Maps Embed -->
        <div class="img-block tall">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8723.892623633841!2d-47.07022982562568!3d-23.631043354714283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0a3b488bd44d%3A0x380b29031bab023e!2sParque%20Kokushikan%20Daigaku!5e0!3m2!1sen!2sbr!4v1782870253577!5m2!1sen!2sbr" width="100%" height="100%" style="border:0; display:block; border-radius: 16px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
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
          <div class="faq-a" id="faq1" role="region">Sim, a entrada do festival é gratuita. Pedimos apenas a contribuição com o estacionamento do local.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq2">Quanto custa o estacionamento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq2" role="region">O valor depende do veículo:<br>Carros: R$ 60,00<br>Motos: Gratuito<br>Caravanas: Neste ano, optamos por cobrar o valor da entrada de caravanas para melhor controle do fluxo de veículos. As reservas serão feitas pela Ticket360.<br>Van: R$ 200,00<br>Micro-ônibus: 300,00<br>Ônibus: R$ 400,00</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq3">Posso levar meu pet?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq3" role="region">Sim, o evento é Pet Friendly. No entanto, recomendamos não levar animais que não estejam acostumados com grandes aglomerações, pois o público do festival pode chegar a 60 mil pessoas. Vale ressaltar que os tutores são integralmente responsáveis pela segurança, bem-estar e pelo recolhimento dos dejetos dos animais.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq4">O evento tem acessibilidade?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq4" role="region">O evento conta com infraestrutura voltada para toda a família, oferecendo inclusive espaços dedicados à melhor idade. Como o parque possui amplas áreas de natureza e chão arenoso, algumas áreas podem exigir cuidado redobrado na locomoção.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq5">Como comprar o ingresso do ônibus sem internet?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq5" role="region">As vendas de passagens de ônibus também ocorrem de forma presencial diretamente na secretaria do Bunkyo, localizada na Rua São Joaquim, no bairro da Liberdade em São Paulo.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq6">O parque abre durante a semana?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq6" role="region">Além dos dias do evento, o parque está aberto para visitação e contemplação das cerejeiras durante esse curto período.<br>Período de visitação na semana: 06 à 10 de Julho e 13 à 17 de Julho.<br>Atenção: nesses dias o funcionamento é reduzido, não havendo ônibus oficial do evento, nem as atrações culturais e gastronômicas dos finais de semana.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq7">O que é o Hanami?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq7" role="region">O Hanami é um costume ancestral japonês que significa "contemplar as flores", celebrando a beleza da natureza, a transitoriedade e a renovação da vida. Convidamos o público a praticar o hanami durante os dias da semana devido o fluxo reduzido, possibilitando fazer piqueniques, fotos únicas e maior tranquilidade pelo parque.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq8">O que é o Tooro Nagashi?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq8" role="region">É uma belíssima e tradicional cerimônia budista. Nela, pequenas lanternas de papel iluminadas são lançadas no lago, criando um espetáculo visual que serve como homenagem aos espíritos ancestrais.<br>A cerimônia acontece no segundo sábado do evento (11/07) e o público pode escrever suas preces nas lanternas unicamente na tenda localizada próximo ao lago do parque.<br>Atenção: A atração é paga, confira o valor no local!</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq9">O que é o trenzinho do evento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq9" role="region">É um passeio guiado por dentro do parque, permitindo que os visitantes percorram as trilhas para observar as cerejeiras e se locomoverem mais facilmente nos polos do parque.<br>Atenção: A atração é paga, confira o valor no local!</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq10">Posso levar alimento próprio ao evento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq10" role="region">R: Sim, os visitantes podem trazer suas próprias comidas e bebidas.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq11">Posso fazer piquenique no evento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq11" role="region">Recomendamos a realização de piqueniques especialmente durante a semana, pelo fluxo menor do parque e evitar a monopolização das árvores que as pessoas queiram tirar foto por muito tempo.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq12">Posso fazer ensaio fotográfico no evento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq12" role="region">Sim, os visitantes têm liberdade para realizar ensaios fotográficos aproveitando o cenário. O festival acolhe muitos entusiastas e cosplayers, e ainda realiza o tradicional Concurso de Fotografia Fujifilm, que premia os autores dos melhores cliques do evento.<br>Atenção: Não permitimos a venda de fotos no parque!</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq13">Como funciona o sorteio do evento?<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq13" role="region">O ticket da contribuição de estacionamento inclui um cupom para que o visitante concorra ao sorteio de um aparelho de TV, realizado no último dia do evento. Caso o ganhador não esteja presente no momento do sorteio, o evento entrará em contato com o ganhador por telefone.</div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-q" aria-expanded="false" aria-controls="faq14">Achados e perdidos<span class="faq-icon" aria-hidden="true">+</span></button>
          <div class="faq-a" id="faq14" role="region">Sim! Todos os itens encontrados durante os dias de festival (04, 05, 11 e 12 de julho) são direcionados para a rádio chamada do parque. Se você perder algo, procure algum dos voluntários do evento para maiores orientações. E se encontrar algum objeto perdido, agradecemos muito se puder entregá-lo por lá para ajudar outro visitante!</div>
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
