$(document).ready(function (){
$(window).resize(function() {
    if( ($(window).width()) < 545) {
      $('.header__logo').attr('src', 'img/L4M.png');
    } else {
      $('.header__logo').attr('src', 'img/l4m-logo.png');
    }
  });
  


  });
