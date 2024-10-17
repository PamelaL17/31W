<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>31W</title>
    <?php wp_head(); ?>
</head>
    
<body>
  <header class="entete">
    <section class="global">
      <div class="header-content">
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
      </div>

      <!-- <nav>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">À propos</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav> -->
      <div class="menu-recherche">
          <?php wp_nav_menu(array(
            "menu" => "principal",
            "container" => "nav"
          )); ?>
        <form class="recherche">
          <input type="search" name="" id="" />
          <img
              src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000"
              width="20"
              height="20" />
        </form>
      </div>
    </section>
  </header>