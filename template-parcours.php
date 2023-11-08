<?php

/**
 * Template name: Parcours
 */
?>
<?php get_header(); ?>

<main class="contenu_parcours">
    <?php get_the_title(); ?>
    <?php the_content(); ?>
    <div class="encadre_page"></div>
    <div class="degrades degrade_1"></div>
    <div class="degrades degrade_2"></div>
    <div class="degrades degrade_3"></div>
    <div class="bulle_modele_1 bulle_m1_position_1"></div>
    <div class="bulle_modele_1 bulle_m1_position_2"></div>
    <div class="bulle_modele_2 bulle_m2_position_1"></div>
    <div class="bulle_modele_2 bulle_m2_position_2"></div>
   
</main>

<?php get_footer(); ?>