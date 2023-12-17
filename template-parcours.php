<?php

/**
 * Template name: Parcours
 */
?>
<?php get_header(); ?>

<main class="contenu_parcours">
  <?php get_the_title(); ?>
  <?php the_content(); ?>
  
 

  <div class="bubbles-container" id="bubbles-container">
    <!-- Bubbles will be added dynamically using JavaScript -->
  </div>

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

    // Boîte Modale Session 1

    document.getElementById('openModal1').addEventListener('click', function() {
      document.getElementById('myModal1').style.display = 'flex';
    });

    document.getElementById('openModal2').addEventListener('click', function() {
      document.getElementById('myModal2').style.display = 'flex';
    });

    document.getElementById('openModal3').addEventListener('click', function() {
      document.getElementById('myModal3').style.display = 'flex';
    });

    document.getElementById('openModal4').addEventListener('click', function() {
      document.getElementById('myModal4').style.display = 'flex';
    });

    document.getElementById('openModal5').addEventListener('click', function() {
      document.getElementById('myModal5').style.display = 'flex';
    });

    document.getElementById('openModal6').addEventListener('click', function() {
      document.getElementById('myModal6').style.display = 'flex';
    });

    document.getElementById('openModal7').addEventListener('click', function() {
      document.getElementById('myModal7').style.display = 'flex';
    });

    document.getElementById('openModal8').addEventListener('click', function() {
      document.getElementById('myModal8').style.display = 'flex';
    });

    document.getElementById('openModal9').addEventListener('click', function() {
      document.getElementById('myModal9').style.display = 'flex';
    });

    document.getElementById('openModal10').addEventListener('click', function() {
      document.getElementById('myModal10').style.display = 'flex';
    });

    document.getElementById('openModal11').addEventListener('click', function() {
      document.getElementById('myModal11').style.display = 'flex';
    });

    document.getElementById('openModal12').addEventListener('click', function() {
      document.getElementById('myModal12').style.display = 'flex';
    });

    document.getElementById('openModal13').addEventListener('click', function() {
      document.getElementById('myModal13').style.display = 'flex';
    });

    document.getElementById('openModal14').addEventListener('click', function() {
      document.getElementById('myModal14').style.display = 'flex';
    });

    document.getElementById('openModal15').addEventListener('click', function() {
      document.getElementById('myModal15').style.display = 'flex';
    });

    document.getElementById('openModal16').addEventListener('click', function() {
      document.getElementById('myModal16').style.display = 'flex';
    });

    document.getElementById('openModal17').addEventListener('click', function() {
      document.getElementById('myModal17').style.display = 'flex';
    });

    document.getElementById('openModal18').addEventListener('click', function() {
      document.getElementById('myModal18').style.display = 'flex';
    });

    document.getElementById('openModal19').addEventListener('click', function() {
      document.getElementById('myModal19').style.display = 'flex';
    });

    document.getElementById('openModal20').addEventListener('click', function() {
      document.getElementById('myModal20').style.display = 'flex';
    });

    document.getElementById('openModal21').addEventListener('click', function() {
      document.getElementById('myModal21').style.display = 'flex';
    });

    document.getElementById('openModal22').addEventListener('click', function() {
      document.getElementById('myModal22').style.display = 'flex';
    });

    document.getElementById('openModal23').addEventListener('click', function() {
      document.getElementById('myModal23').style.display = 'flex';
    });

    document.getElementById('openModal24').addEventListener('click', function() {
      document.getElementById('myModal24').style.display = 'flex';
    });

    document.getElementById('openModal25').addEventListener('click', function() {
      document.getElementById('myModal25').style.display = 'flex';
    });

    document.getElementById('openModal26').addEventListener('click', function() {
      document.getElementById('myModal26').style.display = 'flex';
    });



    document.getElementById('closeModal1').addEventListener('click', function() {
      document.getElementById('myModal1').style.display = 'none';
    });

    document.getElementById('closeModal2').addEventListener('click', function() {
      document.getElementById('myModal2').style.display = 'none';
    });

    document.getElementById('closeModal3').addEventListener('click', function() {
      document.getElementById('myModal3').style.display = 'none';
    });

    document.getElementById('closeModal4').addEventListener('click', function() {
      document.getElementById('myModal4').style.display = 'none';
    });

    document.getElementById('closeModal5').addEventListener('click', function() {
      document.getElementById('myModal5').style.display = 'none';
    });

    document.getElementById('closeModal6').addEventListener('click', function() {
      document.getElementById('myModal6').style.display = 'none';
    });

    document.getElementById('closeModal7').addEventListener('click', function() {
      document.getElementById('myModal7').style.display = 'none';
    });

    document.getElementById('closeModal8').addEventListener('click', function() {
      document.getElementById('myModal8').style.display = 'none';
    });

    document.getElementById('closeModal9').addEventListener('click', function() {
      document.getElementById('myModal8').style.display = 'none';
    });

    document.getElementById('closeModal9').addEventListener('click', function() {
      document.getElementById('myModal9').style.display = 'none';
    });
    document.getElementById('closeModal10').addEventListener('click', function() {
      document.getElementById('myModal10').style.display = 'none';
    });

    document.getElementById('closeModal11').addEventListener('click', function() {
      document.getElementById('myModal11').style.display = 'none';
    });

    document.getElementById('closeModal12').addEventListener('click', function() {
      document.getElementById('myModal12').style.display = 'none';
    });
    document.getElementById('closeModal13').addEventListener('click', function() {
      document.getElementById('myModal13').style.display = 'none';
    });

    document.getElementById('closeModal14').addEventListener('click', function() {
      document.getElementById('myModal14').style.display = 'none';
    });

    document.getElementById('closeModal15').addEventListener('click', function() {
      document.getElementById('myModal15').style.display = 'none';
    });

    document.getElementById('closeModal16').addEventListener('click', function() {
      document.getElementById('myModal16').style.display = 'none';
    });

    document.getElementById('closeModal17').addEventListener('click', function() {
      document.getElementById('myModal17').style.display = 'none';
    });

    document.getElementById('closeModal18').addEventListener('click', function() {
      document.getElementById('myModal18').style.display = 'none';
    });

    document.getElementById('closeModal19').addEventListener('click', function() {
      document.getElementById('myModal19').style.display = 'none';
    });

    document.getElementById('closeModal20').addEventListener('click', function() {
      document.getElementById('myModal20').style.display = 'none';
    });

    document.getElementById('closeModal21').addEventListener('click', function() {
      document.getElementById('myModal21').style.display = 'none';
    });

    document.getElementById('closeModal22').addEventListener('click', function() {
      document.getElementById('myModal22').style.display = 'none';
    });

    document.getElementById('closeModal23').addEventListener('click', function() {
      document.getElementById('myModal23').style.display = 'none';
    });

    document.getElementById('closeModal24').addEventListener('click', function() {
      document.getElementById('myModal24').style.display = 'none';
    });

    document.getElementById('closeModal25').addEventListener('click', function() {
      document.getElementById('myModal25').style.display = 'none';
    });

    document.getElementById('closeModal26').addEventListener('click', function() {
      document.getElementById('myModal26').style.display = 'none';
    });


    window.addEventListener('click', function(event) {
      if (event.target == document.getElementById('myModal')) {
        document.getElementById('myModal').style.display = 'none';
      }
    });


    document.addEventListener("DOMContentLoaded", function() {
      const numBubbles = 10;
      const bubblesContainer = document.getElementById("bubbles-container");

      const colors = ["#774eba", "#33488e","#3498db"]; // Two colors of your choice

      for (let i = 0; i < numBubbles; i++) {
        createBubble();
      }

      function createBubble() {
        const bubble = document.createElement("div");
        bubble.classList.add("bubble");

        // Set random size
        const size = Math.floor(Math.random() * 200) + 10; // Random size between 10 and 40 pixels
        bubble.style.width = `${size}px`;
        bubble.style.height = `${size}px`;

        // Set random position
        const top = Math.random() * 100;
        const left = Math.random() * 100;
        bubble.style.top = `${top}%`;
        bubble.style.left = `${left}%`;

        // Set random animation delay to create a staggered effect
        const delay = Math.random() * 10;
        bubble.style.animationDelay = `-${delay}s`;

        // Assign one of the two colors randomly
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        bubble.style.backgroundColor = randomColor;

        bubblesContainer.appendChild(bubble);
      }
    });
    
  </script>



</main>

<?php get_footer(); ?>