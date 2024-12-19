<?php
/**
 * Template Name: Pays
 * Description: Un modèle pour afficher les destinations par pays.
 */
get_header();
?>
<div class="page-pays">
    <section class="entete">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        
        <section id="galerie_destination" class="global galerie_destination">
            <div class="galerie" id="galerie-preview">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4, // Affiche seulement 10 images
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        if (has_post_thumbnail()) : ?>
                            <div class="galerie__item">
                                <a href="javascript:void(0);" class="open-carrousel" data-index="<?php echo $post->ID; ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div id="carrousel-container">
                <?php echo do_shortcode('[carrousel]'); ?>
            </div>
        </section>
    </section>

    <section class="details-voyage">
        <?php
        $participants = get_post_meta(get_the_ID(), 'nombre_participants', true);
        $date_depart = get_post_meta(get_the_ID(), 'date_depart', true);
        $date_retour = get_post_meta(get_the_ID(), 'date_retour', true);
        ?>
        <h3>Détails du voyage</h3>
        <p><strong>Participants :</strong> <?php echo esc_html($participants); ?></p>
        <p><strong>Date de départ :</strong> <?php echo esc_html($date_depart); ?></p>
        <p><strong>Date de retour :</strong> <?php echo esc_html($date_retour); ?></p>
    </section>

    <section class="filtre-destinations">
        <h2>Filtrer par pays</h2>
        <?php echo do_shortcode('[filtre_pays]'); ?>
    </section>
</div>
<?php get_footer(); ?>