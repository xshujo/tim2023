<?php

/**
 * Template name: Professeurs
 */
?>
<?php
get_header();
?>
<!----- CONTENUE AFFICHER DANS LA PAGE PROFESSEURS ---->
<div class="contenuProf">
    <?php the_content(); ?> <!----- Titre principale page professeurs ---->

    <div class="contenuCarr">

        <!----- Zone carrousel d'images des professeurs ---->
        <div class="carousel">
            <div class="zoneProfs">
                <button class="precedent">
                    < </button>
                        <?php
                        query_posts('category_name=professeurs'); // Utilisez le nom de la catégorie "professeurs"

                        // Boucle Wordpress pour afficher les images miniatures des publications disponibles. 
                        if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                                <figure class="prof__figure" id="fig_<?php the_id() ?>">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </figure>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <button class="suivant">></button>
            </div>

        </div>

        <!----- Zone textes des professeurs ---->
        <div class="description">
            <?php
            wp_reset_postdata();
            /**Boucle WordPress qui verifie si des publications sont disponibles (avec have_posts()) 
            et commence à parcourir chaque publication avec while (have_posts()). À chaque itération de la boucle, 
            the_post() est appelé pour configurer les données de la publication en cours.*/
            if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <section class="prof__section" id="des_<?php the_id(); ?>">
                        <!----- images (thumbnails) profs ---->
                        <figure class="prof__figure" id="fig_<?php the_id() ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </figure>
                        <!----- descriptions profs ---->
                        <?php the_content(); ?>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


    <!-----  ZONE DEGRADE EN ARRIERE-PLAN ---->
    <div class="encadre_page"></div>
    <div class="degrades degrade_1"></div>
    <div class="degrades degrade_2"></div>
    <div class="degrades degrade_3"></div>
    <div class="bulle_modele_1 bulle_m1_position_1"></div>
    <div class="bulle_modele_2 bulle_m2_position_1"></div>
    <div class="bulle_modele_2 bulle_m2_position_2"></div>
</div>
<!----- ///////////////////////////////////////////////////////// ---->
<?php
get_footer();
?>