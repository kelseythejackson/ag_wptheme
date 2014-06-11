jQuery(document).ready(function($) {
$(window).scroll(function () {
	    if ($(document).scrollTop() == 0) {
	        $('a img').removeClass('smaller');
	    } else {
	        $('a img').addClass('smaller');
	    }
	});
}); 
