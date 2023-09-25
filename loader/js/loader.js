jQuery(document).ready(function($) {
    // Show the loading screen when the page starts loading
    $('.loader-tim').show();
  
    // Hide the loading screen when the page is fully loaded
    $(window).on('load', function() {
      $('.loader-tim').fadeOut('slow');
    });
  });