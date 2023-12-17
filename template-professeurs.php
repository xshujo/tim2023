<?php

/**
 * Template name: Professeurs
 */
?>
<?php
get_header();
?>
<!----- CONTENUE AFFICHER DANS LA PAGE PROFESSEURS ---->
<main class="contenuProf">
    <?php the_content(); ?>

  <button id="scroll-to-top" class="scroll-to-top-button" title="Scroll to Top">↑</button>

    <!-----  ZONE DESIGN EN ARRIERE-PLAN ---->
    <div class="barreBlanc"></div>
    <script>
    / Get a reference to the button
    const scrollToTopButton = document.getElementById('scroll-to-top');

    // Show the button when the page is scrolled down
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 30) {
        scrollToTopButton.style.display = 'block';
      } else {
        scrollToTopButton.style.display = 'none';
      }
    });

    // Scroll to the top when the button is clicked
    scrollToTopButton.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth', // Smooth scrolling animation
      });
    });
    </script>
</main>

<!----- ///////////////////////////////////////////////////////// ---->
<?php
get_footer();
?>
