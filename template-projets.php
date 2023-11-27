<?php

/**
 * Template name: Projets
 */
?>
<!-- Ajouter le header -->
<?php get_header(); ?>

<main>
  <!-- Création de bulles pour le style -->
  <div class='bulle_1 bulle_1_position'></div>
  <div class='bulle_1_1 bulle_1_1_position'></div>
  <div class='bulle_2 bulle_2_position'></div>
  <div class='degrades degrade_1'></div>
  <div class='degrades degrade_2'></div>
  <div class='degrades degrade_3'></div>

  <h1 class="text__page__projet">Projet</h1>

  <!-- Encadrer tous les sections à l'aide d'une div générale -->
  <div class='blockflex__projet'>

    <h1 class='jeux'>Jeux Vidéo</h1>
    <div class='projet__general div1'>


      <!-- Intégration de la catégorie Jeux -->
      <?php
      $category = get_queried_object();
      $args = array(
        // Trouver la catégorie jeux et mettre en ordre de titre
        'category_name' => 'Jeux',
        'orderby' => 'title',
        'order' => 'ASC'
      );

      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>

          <div class='carte__categorie'>

            <!-- Si la page a une catégorie, la rajouter -->
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('thumbnail');
            } ?>
            <!-- Ajouter le contenu des post -->
            <?php the_content() ?>

          </div>

        <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>
    </div>






    <h1 class='video'>Vidéo</h1>
    <div class='projet__general'>


      <!-- Intégration de la catégorie Video -->
      <?php
      $category = get_queried_object();
      $args = array(
        // Trouver la catégorie video et mettre en ordre de titre
        'category_name' => 'Video',
        'orderby' => 'title',
        'order' => 'ASC'
      );

      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
          <div class='carte__categorie'>

            <!-- Si la page a une catégorie, la rajouter -->
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('thumbnail');
            } ?>
            <!-- Ajouter le contenu des post -->
            <?php the_content() ?>

          </div>


        <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>
    </div>



    <h1 class='troisd'>3D</h1>
    <div class='projet__general'>


      <!-- Intégration de la catégorie 3D -->
      <?php
      $category = get_queried_object();
      $args = array(
        // Trouver la catégorie 3D et mettre en ordre de titre
        'category_name' => '3D',
        'orderby' => 'title',
        'order' => 'ASC'
      );

      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
          <div class='carte__categorie'>

            <!-- Si la page a une catégorie, la rajouter -->
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('thumbnail');
            } ?>
            <!-- Ajouter le contenu des post -->
            <?php the_content() ?>

          </div>
        <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>
    </div>

    <h1 class='web'>Web</h1>
    <div class='projet__general'>


      <!-- Intégration de la catégorie Web -->
      <?php
      $category = get_queried_object();
      $args = array(
        // Trouver la catégorie Web et mettre en ordre de titre
        'category_name' => 'Web',
        'orderby' => 'title',
        'order' => 'ASC'
      );

      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
          <div class='carte__categorie'>

            <!-- Si la page a une catégorie, la rajouter -->
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('thumbnail');
            } ?>
            <!-- Ajouter le contenu des post -->
            <?php the_content() ?>

          </div>
        <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>
    </div>

    <h1 class='design'>Design</h1>
    <div class='projet__general'>


      <!-- Intégration de la catégorie Design -->
      <?php
      $category = get_queried_object();
      $args = array(
        // Trouver la catégorie Design et mettre en ordre de titre
        'category_name' => 'Design',
        'orderby' => 'title',
        'order' => 'ASC'
      );

      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
          <div class='carte__categorie'>

            <!-- Si la page a une catégorie, la rajouter -->
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('thumbnail');
            } ?>
            <!-- Ajouter le contenu des post -->
            <?php the_content() ?>

          </div>
        <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>
    </div>

  </div>




</main>



<!-- Ajouter le footer -->
<?php get_footer(); ?>