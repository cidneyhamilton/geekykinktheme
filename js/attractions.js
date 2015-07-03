(function($, undefined) {

  $(function() {
    $("#workshop-dropdown").on('change', function() {
    	var value = $(this).val();
    	if (value == 0) {
    		window.location.href = "/workshops";
    	} else {
    		window.location.href = value;
    	}	
    });

    $("#vendor-dropdown").on('change', function() {
        var value = $(this).val();
        if (value == 0) {
            window.location.href = "/vendors";
        } else {
            window.location.href = value;
        }   
    });

    $("#presenter-dropdown").on('change', function() {
    	var value = $(this).val();
    	if (value == 0) {
    		window.location.href = "/workshops";
    	} else {
    		window.location.href = "/presenter/" + value;
    	}
    });

  });

}(window.jQuery));