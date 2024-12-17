<?php

/**
 * index.php - Le modèle par défaut de WordPress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h2>Liste des catégories</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
          
          <article class="principal__article">
            <!-- Afficher une image à la une -->
            <?php if (has_post_thumbnail()) : ?>
              <div class="thumbnail">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('custom-wide'); ?>
                </a>
              </div>
            <?php endif; ?>

            <!-- Titre et extrait -->
            <h5><?php the_title(); ?></h5>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20, "suite..."); ?></p>
          </article>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer() ?>