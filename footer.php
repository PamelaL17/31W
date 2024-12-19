<footer class="pied">
    <section class="global pied__global">
      <div class="pied__colonne">
          <img class="logo" src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="logo">
      </div>

      <div id="info" class="pied__colonne">
        <h4>31W</h4>
        <h5>TP2 Club de voyage</h5>
        <p>Auteur: Pamela Limoges</p>
        <p><a href="https://github.com/PamelaL17/31W/tree/TP2" target="_blank">GitHub 31W/TP2</a></p>
        <p><a href="https://github.com/PamelaL17/31W_Carrousel/tree/TP2_carrousel" target="_blank">GitHub 31W_Carrousel/TP2_carrousel</a></p>
        <p><a href="https://github.com/PamelaL17/31W_FiltrePost/tree/TP2_filtrepost" target="_blank">GitHub 31W_FiltrePost/TP2_filtrepost</a></p>
        <p><a href="https://gftnth00.mywhc.ca/31w07/" target="_blank">WHC</a></p>
    </div>

    <div class="pied__colonne">
      <?php wp_nav_menu(array('menu' => 'principal', 'container' => 'nav', 'container_class' => 'menu-principal')); ?>
      <?php get_search_form(); ?>
    </div>

    <div class="pied__colonne">
            <h4>Contact</h4>
            <p><strong>Adresse :</strong> 3800 R. Sherbrooke E, Montréal, QC H1X 2A2</p>
            <p><strong>Téléphone :</strong> (514) 254-7131</p>
            <p><strong>Email :</strong> <a href="mailto:contact@college-imaginaire.fr"> contact@college-maisonneuve.ca</a></p>

            <!-- Liens vers des sites de tourisme -->
            <h4>Tourisme</h4>
            <ul>
                <li><a href="https://www.vacationraces.com/global-adventures/?gad_source=1&gclid=CjwKCAiAgoq7BhBxEiwAVcW0LCWZoQPCobXT_1dYWEo3f6Jn-jHuuUARsDNUY-UVRyOBoxdFEgjhcRoCMzEQAvD_BwE" target="_blank">Vacation Races</a></li>
                <li><a href="https://www.destinationcanada.com/fr" target="_blank">Destination Canada</a></li>
                <li><a href="https://www.bonjourquebec.com/fr-ca" target="_blank">Bonjour Québec</a></li>
            </ul>

            <!-- Icônes des sites sociaux -->
            <h4>Suivez-nous</h4>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-icon.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/instagram-icon.png" alt="Instagram">
                </a>
                <a href="https://www.twitter.com" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" alt="Twitter">
                </a>
            </div>
        </div> 
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>