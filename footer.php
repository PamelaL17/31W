<footer class="pied">
    <section class="global pied__global">
      <div class="pied__colonne">
        <h4>31W</h4>
        <h5>TP2 Club de voyage</h5>
        <p>Auteur: Pamela Limoges</p>
        <p><a href="https://github.com/PamelaL17/31W/tree/master" target="_blank">GitHub 31W</a></p>
        <p><a href="https://github.com/PamelaL17/31W_Carrousel" target="_blank">GitHub 31W_Carrousel</a></p>
        <p><a href="https://github.com/PamelaL17/31W_FiltrePost" target="_blank">GitHub 31W_FiltrePost</a></p>
        <p><a href="https://gftnth00.mywhc.ca/31w07/" target="_blank">WHC</a></p>
    </div>
    <div class="pied__colonne">
      <?php wp_nav_menu(array('menu' => 'principal', 'container' => 'nav', 'container_class' => 'menu-principal')); ?>
      <?php get_search_form(); ?>
    </div>
    <div class="pied__colonne">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="logo">
    </div>
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>