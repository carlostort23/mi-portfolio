$(document).ready(function(){
    $('.nav-item').hover(function() {
      $(this).find('.underline').stop().animate({
        width: '100%' 
      }, 100);
    }, function() {
      $(this).find('.underline').stop().animate({
        width: '0%' 
      }, 200);
    });
  });
  
  $(document).ready(function() {
    $('.icon').hover(
        function() {
            $(this).find('.skill-name').fadeIn();
        },
        function() {
            $(this).find('.skill-name').fadeOut();
        }
    );
});

// script.js
$(document).ready(function(){
    $('a.nav-link').on('click', function(event) {
      event.preventDefault();
      var target = $(this).attr('href');

      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 300); 
    });
  });
  