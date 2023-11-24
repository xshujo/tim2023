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
    <div class="bulle_modele_3 bulle_m3_position_1"></div>
    <div class="bulle_modele_3 bulle_m3_position_2"></div>
    <div class="bulle_modele_4 bulle_m4_position_1"></div>
    <div class="bulle_modele_4 bulle_m4_position_2"></div>
    <button id="scroll-to-top" class="scroll-to-top-button" title="Scroll to Top">↑</button>

    <script>
        // Get a reference to the button
        const scrollToTopButton = document.getElementById('scroll-to-top');

        // Show the button when the page is scrolled down
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
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

      function toggleItem1() {
      // Get all list items
      var listItems = document.querySelectorAll(".liste_cours");
      var list1 = document.getElementById("list1");
      var list2 = document.getElementById("list2");
      var list3 = document.getElementById("list3");
      var list4 = document.getElementById("list4");
      var list5 = document.getElementById("list5");
      var list6 = document.getElementById("list6");

      // Toggle the display property for each list item
      
        if (list1.style.display = 'none') {
          list1.style.display = 'flex'; // or 'list-item'
          list2.style.display = 'none';
          list3.style.display = 'none';
          list4.style.display = 'none';
          list5.style.display = 'none';
          list6.style.display = 'none';

        } 

        
      
    }

    function toggleItem2() {
      // Get all list items
      var listItems = document.querySelectorAll(".liste_cours");
      var list1 = document.getElementById("list1");
      var list2 = document.getElementById("list2");
      var list3 = document.getElementById("list3");
      var list4 = document.getElementById("list4");
      var list5 = document.getElementById("list5");
      var list6 = document.getElementById("list6");

      // Toggle the display property for each list item
      listItems.forEach(function(item) {
       if (list2.style.display = 'none') {
          item.style.display = 'none';
          list2.style.display = 'flex';
          list3.style.display = 'none';
          list4.style.display = 'none';
          list5.style.display = 'none';
          list6.style.display = 'none';
        }
      });
    }

    function toggleItem3() {
      // Get all list items
      var listItems = document.querySelectorAll(".liste_cours");
      var list1 = document.getElementById("list1");
      var list2 = document.getElementById("list2");
      var list3 = document.getElementById("list3");
      var list4 = document.getElementById("list4");
      var list5 = document.getElementById("list5");
      var list6 = document.getElementById("list6");

      // Toggle the display property for each list item
      listItems.forEach(function(item) {
      
        if (list3.style.display = 'none') {
          list1.style.display = 'none'; // or 'list-item'
          list3.style.display = 'flex'; // or 'list-item'
          list2.style.display = 'none';
          list4.style.display = 'none';
          list5.style.display = 'none';
          list6.style.display = 'none';

        } 
      });
    }

    function toggleItem4() {
      // Get all list items
      var listItems = document.querySelectorAll(".liste_cours");
      var list1 = document.getElementById("list1");
      var list2 = document.getElementById("list2");
      var list3 = document.getElementById("list3");
      var list4 = document.getElementById("list4");
      var list5 = document.getElementById("list5");
      var list6 = document.getElementById("list6");

      // Toggle the display property for each list item
      listItems.forEach(function(item) {
      
        if (list4.style.display = 'none') {
          list1.style.display = 'none'; // or 'list-item'
          list2.style.display = 'none';
          list3.style.display = 'none';
          list4.style.display = 'flex';
          list5.style.display = 'none';
          list6.style.display = 'none';

        } 
      });
    }

    function toggleItem5() {
      // Get all list items
      var listItems = document.querySelectorAll(".liste_cours");
      var list1 = document.getElementById("list1");
      var list2 = document.getElementById("list2");
      var list3 = document.getElementById("list3");
      var list4 = document.getElementById("list4");
      var list5 = document.getElementById("list5");
      var list6 = document.getElementById("list6");

      // Toggle the display property for each list item
      listItems.forEach(function(item) {
      
        if (list5.style.display = 'none') {
          list1.style.display = 'none'; // or 'list-item'
          list2.style.display = 'none';
          list3.style.display = 'none';
          list4.style.display = 'none';
          list5.style.display = 'flex';
          list6.style.display = 'none';

        } 
      });
    }

    function toggleItem6() {
      // Get all list items
      var listItems = document.querySelectorAll(".liste_cours");
      var list1 = document.getElementById("list1");
      var list2 = document.getElementById("list2");
      var list3 = document.getElementById("list3");
      var list4 = document.getElementById("list4");
      var list5 = document.getElementById("list5");
      var list6 = document.getElementById("list6");

      // Toggle the display property for each list item
      listItems.forEach(function(item) {
      
        if (list5.style.display = 'none') {
          list1.style.display = 'none'; // or 'list-item'
          list2.style.display = 'none';
          list3.style.display = 'none';
          list4.style.display = 'none';
          list5.style.display = 'none';
          list6.style.display = 'flex';

        } 
      });
    }


    </script>



</main>

<?php get_footer(); ?>