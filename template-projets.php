<?php

/**
 * Template name: Projets
 */
?>
<?php get_header(); ?>

<main>
    <div class='projet__3d'>
        <h1>3d</h1>
        <?php
          $category = get_queried_object();
          $args = array(
              'category_name' => '3D',
              'orderby' => 'title',
              'order' => 'ASC'
            );
            
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                
                
                <?php the_content() ?>
    
            
    
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
    </div>

    <div class='projet__jeux'>
        <h1>Jeux Vidéo</h1>
        <?php
          $category = get_queried_object();
          $args = array(
              'category_name' => 'Jeux',
              'orderby' => 'title',
              'order' => 'ASC'
            );
            
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                
                
                <?php the_content() ?>
    
            
    
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
    </div>
   
        
      
</main>
<?php get_footer(); ?>