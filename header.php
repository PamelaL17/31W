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
    <section class="global entete__global">
      <div class="entete__titre">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
      </div>
      <div class="entete__nav">
        <?php wp_nav_menu(array(
          "menu" => "principal",
          "container" => "nav"
        )); 

        get_search_form();

        ?>

      </div>
    </section>
  </header>