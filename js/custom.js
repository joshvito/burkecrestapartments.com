
/* ==============================================
Back To Top Button
=============================================== */  
 $(document).ready(function(){

  $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
      // scroll body to 0px on click
      $('#back-top').click(function () {
          $('#back-top a').tooltip('hide');
          $('body,html').animate({
              scrollTop: 0
          }, 800);
          return false;
      });
      
      $('#back-top').tooltip('hide');


/*  Carousel Functions */


  $('.carousel').carousel({
    interval: 9000 //changes the speed
  })

});