jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
	});
});

function electo_store_menu_open() {
	jQuery(".menu-brand.primary-nav").addClass('show');
}
function electo_store_menu_close() {
	jQuery(".menu-brand.primary-nav").removeClass('show');
}

var electo_store_Keyboard_loop = function (elem) {
    var electo_store_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');

    var electo_store_firstTabbable = electo_store_tabbable.first();
    var electo_store_lastTabbable = electo_store_tabbable.last();
    /*set focus on first input*/
    electo_store_firstTabbable.focus();

    /*redirect last tab to first input*/
    electo_store_lastTabbable.on('keydown', function (e) {
        if ((e.which === 9 && !e.shiftKey)) {
            e.preventDefault();
            electo_store_firstTabbable.focus();
        }
    });

    /*redirect first shift+tab to last input*/
    electo_store_firstTabbable.on('keydown', function (e) {
        if ((e.which === 9 && e.shiftKey)) {
            e.preventDefault();
            electo_store_lastTabbable.focus();
        }
    });

    /* allow escape key to close insiders div */
    elem.on('keyup', function (e) {
        if (e.keyCode === 27) {
            elem.hide();
        }
        ;
    });
};

// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 0) {
	        jQuery('#scrollbutton').fadeIn();
	    } else {
	        jQuery('#scrollbutton').fadeOut();
	    }
	});
	jQuery(window).on("scroll", function () {
	   document.getElementById("scrollbutton").style.display = "block";
	});
	jQuery('#scrollbutton').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
});

jQuery(function($){
	$('.mobiletoggle').click(function () {
        electo_store_Keyboard_loop($('.menu-brand.primary-nav'));
    });
});

// preloader
jQuery(function($){
    setTimeout(function(){
        $(".frame").delay(1000).fadeOut("slow");
    });
});