  </main>

  <footer role="contentinfo">
    <div class="container">
      <div class="footer-grid">
        <div>
          <h3>🌸 Sakura Matsuri 2026</h3>
          <p>29° Festival das Cerejeiras Bunkyos</p>
          <p style="margin-top:.5rem">04, 05, 11 e 12 de julho de 2026<br>Sábados: 10h às 19h · Domingos: 10h às 17h<br>Parque Bunkyo Kokushikan – São Roque, SP</p>
          <div class="footer-social">
            <a href="#" class="social-btn">Instagram</a>
            <a href="#" class="social-btn">Facebook</a>
            <a href="#" class="social-btn">Site Bunkyo</a>
          </div>
        </div>
        <div>
          <h3>Páginas</h3>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a></li>
            <?php
            wp_nav_menu([
              'theme_location' => 'footer',
              'container'      => false,
              'items_wrap'     => '%3$s',
              'fallback_cb'    => '__return_false',
            ]);
            ?>
          </ul>
        </div>
        <div>
          <h3>Contato</h3>
          <p>Rua São Joaquim, 381 – Liberdade, SP</p>
          <p style="margin-top:.5rem"><a href="tel:+551132081755">(11) 3208-1755</a></p>
          <p><a href="mailto:contato@bunkyo.org.br">contato@bunkyo.org.br</a></p>
        </div>
      </div>
      <div class="footer-bottom">© Direitos reservados à Sociedade Brasileira De Cultura Japonesa E De Assistência Social – Bunkyo</div>
    </div>
  </footer>

  <script>
    const toggle = document.querySelector('.nav-toggle'),
      menu = document.querySelector('.nav-links');
    if (toggle && menu) {
      toggle.addEventListener('click', () => {
        const isOpen = menu.classList.toggle('open');
        toggle.setAttribute('aria-expanded', isOpen);
      });
    }
  </script>

  <?php wp_footer(); ?>
</body>

</html>
