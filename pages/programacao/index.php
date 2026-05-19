<?php
/**
 * Modular template for the Programação page
 */

get_header();
?>

<main id="main-content">

  <div class="page-hero">
    <div class="page-hero-inner">
      <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Início</a> › Programação</p>
      <span class="tag">Grade do evento</span>
      <h1>Programação</h1>
      <p style="max-width:620px;font-size:1rem;margin-top:.5rem">A grade completa do festival será divulgada em breve. Selecione o dia para ver as atrações de cada data.</p>
    </div>
  </div>

  <section class="prog-section" aria-labelledby="prog-title">
    <div class="container">

      <div class="date-strip" aria-label="Datas e horários do festival">
        <p><strong>📅 Datas:</strong> 04, 05, 11 e 12 de julho de 2026</p>
        <p><strong>⏰ Sábados:</strong> 10h às 19h &nbsp;·&nbsp; <strong>Domingos:</strong> 10h às 17h</p>
      </div>

      <p class="tabs-label" id="tabs-label">Selecione o dia:</p>
      <div class="prog-tabs" role="tablist" aria-labelledby="tabs-label">
        <button class="prog-tab active" role="tab" aria-selected="true" aria-controls="tab-content" data-day="Sábado, 04 de julho">Sábado 04/07</button>
        <button class="prog-tab" role="tab" aria-selected="false" aria-controls="tab-content" data-day="Domingo, 05 de julho">Domingo 05/07</button>
        <button class="prog-tab" role="tab" aria-selected="false" aria-controls="tab-content" data-day="Sábado, 11 de julho">Sábado 11/07</button>
        <button class="prog-tab" role="tab" aria-selected="false" aria-controls="tab-content" data-day="Domingo, 12 de julho">Domingo 12/07</button>
      </div>

      <div id="tab-content" role="tabpanel" aria-live="polite">
        <div class="prog-notice">
          🌸 <strong>Programação em breve.</strong> A grade completa do <span id="day-name">Sábado, 04 de julho</span> será divulgada em breve. Fique de olho nas nossas redes sociais!
        </div>
        <div class="prog-table-wrap">
          <table class="prog-table" aria-label="Tabela de programação do dia">
            <thead>
              <tr>
                <th scope="col">Horário</th>
                <th scope="col">Atração / Atividade</th>
                <th scope="col">Local</th>
              </tr>
            </thead>
            <tbody>
              <tr><td colspan="3" class="prog-empty">— Programação em atualização —</td></tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>

</main>

<?php
get_footer();
