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

                <?php
                query_posts('category_name=professeurs'); // Utilisez le nom de la catégorie "professeurs"

                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <figure class="prof__figure" id="fig_<?php the_id() ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </figure>
                    <?php endwhile; ?>
                <?php endif; ?>
                <button class="precedent">
                    < </button>
                        <button class="suivant">></button>
            </div>

        </div>

        <!----- Zone textes des professeurs ---->
        <div class="description">
            <?php
            wp_reset_postdata();
            if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <section class="prof__section" id="des_<?php the_id(); ?>">
                        <?php the_title(); ?> <!----- titre profs ---->
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
</div>
<!----- ///////////////////////////////////////////////////////// ---->
<?php
get_footer();
?>