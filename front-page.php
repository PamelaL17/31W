<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <?php
  // Récupérer les données du Customizer
  $hero_title = get_theme_mod('hero_title', 'Bienvenue sur mon site');
  $hero_subtitle = get_theme_mod('hero_subtitle', 'Your success starts here.');
  $hero_background = get_theme_mod('hero_background', '');
  $hero_cta_text = get_theme_mod('hero_cta_text', 'Learn More');
  $hero_cta_link = get_theme_mod('hero_cta_link', '#'); ?>

  <section class="global hero" style="background-image: url('<?php echo esc_url($hero_background); ?>');">
    <div class="hero__contenu">
      <h1><?php echo esc_html($hero_title); ?></h1>
      <p><?php echo esc_html($hero_subtitle); ?></p>
      <?php if (!empty($hero_cta_text) && !empty($hero_cta_link)) : ?>
        <a href="<?php echo esc_url($hero_cta_link); ?>" class="hero__cta">
          <?php echo esc_html($hero_cta_text); ?>
        </a>
      <?php endif; ?>
    </div>
  </section>

  <section class="global nouveau">
    <h2>Les destinations favorite</h2>
    <div class="principal__conteneur">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="article-summary">
        <!-- Afficher une image dans une taille personnalisée -->
        <?php if (has_post_thumbnail()) : ?>
          <div class="thumbnail">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('custom-wide'); ?>
            </a>
          </div>
        <?php endif; ?>
        <!-- Titre et extrait -->
        <h2><?php the_title(); ?></h2>
        <p><?php echo wp_trim_words(get_the_excerpt(), 20, "suite.."); ?></p> <!-- ajouter lien -->
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
  </section>

  <section id="inscription" class="global inscription">
    <div class="inscription__contenu">
      <h2>Inscrivez-vous à notre newsletter</h2>
      <p>Recevez nos dernières nouvelles et offres directement dans votre boîte mail.</p>
      <form action="#" method="post" class="inscription__form">
        <input type="email" name="email" placeholder="Votre email" required class="inscription__input">
        <button type="submit" class="inscription__btn">S'inscrire</button>
      </form>
    </div>
  </section>

  <section id="galerie_destination" class="global galerie_destination">
          
  </section>

  <section id="filtre" class="global filtre">

  </section>

  <section></section>

</main>
<?php get_footer() ?>