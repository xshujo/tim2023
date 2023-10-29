<?php
/**
 * Template name: Vie etudiante
 */
?>
<?php get_header(); ?>
<main>
    <h1>Vie étudiante</h1>
    <!-- Affichage de la galerie Vie étudiante sur la page -->
    <div class="zone_galerie">
        <?php
            $category = get_queried_object();
            $args = array(
                'category_name' => 'GalerieVieEtudiante'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="article_galerie_vie_etudiante">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif;
        wp_reset_postdata();?>   
    </div>

    <!-- Affichage des événements sur la page -->
    <div class="zone_evenements">
        <?php 
        $category = get_queried_object();
        $args = array(
            'category_name' => 'Evenements'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="article_vie_etudiante">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('thumbnail');
                    } ?>
                    <?php get_the_title(); ?>
                    <div class="informations_evenements">
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata();?>
        <div class="texte_a_venir">
            <h3 class="texte_1">Encore plus</h3>
            <h3 class="texte_2">À venir</h3>
        </div>
    </div>
</main>
<?php get_footer(); ?>