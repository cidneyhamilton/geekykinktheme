(function($, undefined) {

  $(function() {
    $("#workshop-dropdown").on('change', function() {
    	window.location.href = $(this).val();
    });

    $("#presenter-dropdown").on('change', function() {
    	window.location.href = "/presenter/" + $(this).val();
    });

  });

}(window.jQuery));