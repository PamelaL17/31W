<?php

/**
 * index.php - Le modèle par défaut de WordPress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h2>Single.php</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
            <!-- Afficher une image à la une -->
            <?php if (has_post_thumbnail()) : ?>
              <div class="thumbnail">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('custom-wide'); ?>
                </a>
              </div>
            <?php endif; ?>

            <h2><?php the_title() ?></h2>
            <?php the_content() ?>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer() ?>