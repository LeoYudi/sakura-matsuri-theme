  </main>

  <footer role="contentinfo">
    <div class="container">
      <div class="footer-grid">
        <div>
          <h3>🌸 Sakura Matsuri 2026</h3>
          <p>29° Festival das Cerejeiras Bunkyos</p>
          <p style="margin-top:.5rem">04, 05, 11 e 12 de julho de 2026<br>Sábados: 10h às 19h · Domingos: 10h às 17h<br>Parque Bunkyo Kokushikan · Estrada Municipal do Carmo, 801 · São Roque – SP · CEP 18145-340</p>
          <div class="footer-social">
            <a href="https://www.instagram.com/parquebunkyo/" target="_blank" rel="noopener noreferrer" class="social-btn">
              <svg class="social-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="vertical-align: middle; margin-right: 4px; margin-top: -2px;">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
              </svg>Instagram
            </a>
            <a href="https://www.facebook.com/parquebunkyo" target="_blank" rel="noopener noreferrer" class="social-btn">
              <svg class="social-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="vertical-align: middle; margin-right: 4px; margin-top: -2px;">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
              </svg>Facebook
            </a>
            <a href="https://bunkyo.org.br/br/" target="_blank" rel="noopener noreferrer" class="social-btn">
              <svg class="social-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="vertical-align: middle; margin-right: 4px; margin-top: -2px;">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
              </svg>Site Bunkyo
            </a>
          </div>
        </div>
        <div>
          <h3>Páginas</h3>
          <?php
          wp_nav_menu([
            'theme_location' => 'footer',
            'container'      => false,
            'menu_class'     => 'footer-links',
            'fallback_cb'    => '__return_false',
          ]);
          ?>
        </div>
        <div>
          <h3>Contato</h3>
          <p>Bunkyo: Rua São Joaquim, 381 – Liberdade, SP</p>
          <p style="margin-top:.5rem"><a href="tel:+5511932501202">(11) 93250-1202</a></p>
          <p><a href="mailto:festivaldascerejeiras@bunkyo.org.br">festivaldascerejeiras@bunkyo.org.br</a></p>
        </div>
      </div>
      <div class="footer-bottom">© Direitos reservados a Sociedade Brasileira De Cultura Japonesa E De Assistência Social - Bunkyo | Festival das Cerejeiras Bunkyos 2026</div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>
