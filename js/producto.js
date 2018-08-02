$(document).ready(function() {

  $('.color-eleccion input').on('click', function() {
      var Color = $(this).attr('data-image');

      $('.active').removeClass('active');
      $('.imagenes img[data-image = ' + Color + ']').addClass('active');
      $(this).addClass('active');
  });

});
