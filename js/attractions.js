(function($, undefined) {

  $(function() {
    $("#workshop-dropdown").on('change', function() {
    	window.location.href = $(this).val();
    });

  });

}(window.jQuery));