(function($, undefined) {

  $(function() {
    $('.tickets-link').on('mouseenter', function() {
      $(this).find('img').attr('src', '/wp-content/themes/geekykinktheme/images/tickets-button-hover.png');
    });

    $('.tickets-link').on('mouseleave', function() {
      $(this).find('img').attr('src', '/wp-content/themes/geekykinktheme/images/tickets-button.png');
    });

  });

}(window.jQuery));