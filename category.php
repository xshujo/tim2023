<?php

/**
 * category.php est le modèle par défaut pour 
 * afficher une archive d'articles de catégorie spécifique 
 */
?>

<?php get_header(); ?>
<main class="site__main">

   <?php
   $category = get_queried_object();
   // Permet de définir la nouvelle requête
   $args = array(
      'category_name' => $category->slug,
      'orderby' => 'title',
      'order' => 'ASC'
   );
   // Création d'une nouvelle requête
   $query = new WP_Query($args);
   // Tout le reste de l'extraction de données est basée 
   // sur la nouvelle requête contenu dans $query
   if ($query->have_posts()) : $query->the_post();
      get_template_part("template-parts/categorie", $category->slug);
   ?>

   <?php endif;
   wp_reset_postdata(); ?>

</main>
<?php get_footer(); ?>