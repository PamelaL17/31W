<footer class="pied">
    <section class="global pied__global">
      <div class="pied__colonne">
        <h4>31W</h4>
        <p>Auteur: Pamela Limoges</p>
        <p><a href="https://github.com/PamelaL17/31W/tree/master" target="_blank">GitHub</a></p>
        <p><a href="https://gftnth00.mywhc.ca/31w07/" target="_blank">WHC</a></p>
    </div>
    <div class="pied__colonne">
      <?php wp_nav_menu(array('menu' => 'principal', 'container' => 'nav', 'container_class' => 'menu-principal')); ?>
      <?php get_search_form(); ?>
    </div>
    <div class="pied__colonne">
      <img src="image.jpg" alt="Description de l'image">
    </div>
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>