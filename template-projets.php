<?php

/**
 * Template name: Projets
 */
?>
<?php get_header(); ?>

<main>
    
<div class='blockflex__projet'>
    <h1>Jeux Vidéo</h1>
    <div class='projet__general'>



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

                <div class='carte__categorie'>

                    <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail');
                        } ?>

                    <?php the_content() ?>

                </div>

             <?php endwhile; ?>
          <?php endif;
          wp_reset_postdata();?>
    </div>


    
 


    <h1>Vidéo</h1>
    <div class='projet__general'>
                        


                <?php
                  $category = get_queried_object();
                  $args = array(
                      'category_name' => 'Video',
                      'orderby' => 'title',
                      'order' => 'ASC'
                    );

                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class='carte__categorie'>

                            <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail');
                                } ?>
                            <?php the_content() ?>

                        </div>
                            
                            
                 <?php endwhile; ?>
              <?php endif;
              wp_reset_postdata();?>                        
    </div>   


      
    <h1>3D</h1>    
    <div class='projet__general'>
                                
                                
                                
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
                    <div class='carte__categorie'>

                        <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail');
                            } ?>
                        <?php the_content() ?>

                    </div>
             <?php endwhile; ?>
          <?php endif;
          wp_reset_postdata();?>
    </div>  

    <h1>Web</h1>    
    <div class='projet__general'>
                                
                                
                                
            <?php
              $category = get_queried_object();
              $args = array(
                  'category_name' => 'Web',
                  'orderby' => 'title',
                  'order' => 'ASC'
                );

                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class='carte__categorie'>

                        <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail');
                            } ?>
                        <?php the_content() ?>

                    </div>
             <?php endwhile; ?>
          <?php endif;
          wp_reset_postdata();?>
    </div>  

    <h1>Design</h1>    
    <div class='projet__general'>
                                
                                
                                
            <?php
              $category = get_queried_object();
              $args = array(
                  'category_name' => 'Design',
                  'orderby' => 'title',
                  'order' => 'ASC'
                );

                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class='carte__categorie'>

                        <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail');
                            } ?>
                        <?php the_content() ?>

                    </div>
             <?php endwhile; ?>
          <?php endif;
          wp_reset_postdata();?>
    </div>  

 </div>   
    

         
      
</main>
<?php get_footer(); ?>