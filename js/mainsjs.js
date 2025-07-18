(function ($) {
"use strict";
// TOP Menu Sticky
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 400) {
    $("#sticky-header").removeClass("sticky");
    $('#back-top').fadeIn(500);
	} else {
    $("#sticky-header").addClass("sticky");
    $('#back-top').fadeIn(500);
	}
});

$(document).ready(function(){

// Product Gallery Popup
// Example with single object
$('.products-gallery').magnificPopup({
    // child items selector, by clicking on it popup will open
    type: 'image',
     delegate: 'a',
     gallery:{enabled:true}
})


// mobile_menu
var menu = $('ul#navigation');
if(menu.length){
	menu.slicknav({
		prependTo: ".mobile_menu",
		closedSymbol: '+',
		openedSymbol:'-'
	});
};
// blog-menu
  // $('ul#blog-menu').slicknav({
  //   prependTo: ".blog_menu"
  // });

// Product Slider
$('.products-category').owlCarousel({

  loop:false,
  margin:20,
  nav:true,
  autoplay:false,
  dots:true,
  autoplayHoverPause: true,
  autoplaySpeed: 800,
  responsive:{
      0:{
          items:2,
          dots:false,
      },
      767:{
          items:3,
          dots:false,
      },
      992:{
          items:3,
      },
      1200:{
          items:6,
      },
      1500:{
          items:6
      }
  }

});

// About Slider
$('.about-slider').owlCarousel({

  loop:true,
  margin:20,
  nav:true,
  autoplay:true,
  autoplayTimeout: 3000,
  dots:false,
  autoplayHoverPause: true,
  autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          dots:false,
      },
      767:{
          items:1,
          dots:false,
      },
      992:{
          items:1,
      },
      1200:{
          items:1,
      },
      1500:{
          items:1
      }
  }

});

// About product type Slider
$('.about-product-type-slider').owlCarousel({

  loop:false,
  margin:30,
  nav:false,
  autoplay:false,
  autoplayTimeout: 3000,
  dots:false,
  autoplayHoverPause: true,
  autoplaySpeed: 800,
  responsive:{
      0:{
          items:4,
          dots:false,
          margin:20
      },
      767:{
          items:5,
          dots:false,
      },
      992:{
          items:6,
      },
      1200:{
          items:7,
      },
      1500:{
          items:7
      }
  }

});

// review-active
$('.testmonial_active').owlCarousel({
  loop:true,
  margin:0,
items:1,
autoplay:true,
autoplayTimeout: 5000,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
  nav:false,
dots:true,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          dots:false,
      },
      767:{
          items:1,
          dots:false,
      },
      992:{
          items:1,
      },
      1200:{
          items:1,
      },
      1500:{
          items:1
      }
  }
});

// review-active
$('.home_details_active').owlCarousel({
  loop:true,
  margin:0,
items:1,
autoplay:true,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
  nav:true,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,

  responsive:{
      0:{
          items:1,
          nav:false
      },
      767:{
          items:1,
          nav:false
      },
      992:{
          items:1,
          nav:false
      },
      1200:{
          items:1,
          nav:false
      },
      1500:{
          items:1,
          nav:true
      }
  }
});

// review-active
$('.case_active').owlCarousel({
  loop:true,
  margin:30,
items:1,
autoplay:false,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
  nav:true,
dots:true,
autoplayHoverPause: true,
autoplaySpeed: 800,
// dotsData: true,
center: false,
  responsive:{
      0:{
          items:1,
          nav:false
      },
      767:{
          items:3,
          nav:false
      },
      992:{
          items:3,
          nav:false
      },
      1200:{
          items:3,
          nav:false
      },
      1500:{
          items:3,
          nav:true
      }
  }
});

// review-active
$('.property_banner_active').owlCarousel({
  loop:true,
  margin:30,
items:1,
autoplay:false,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
  nav:true,
dots:true,
autoplayHoverPause: true,
autoplaySpeed: 800,
// dotsData: true,
center: false,
  responsive:{
      0:{
          items:1,
          nav:false
      },
      767:{
          items:1,
          nav:false
      },
      992:{
          items:1
      },
      1200:{
          items:1
      },
      1500:{
          items:1,
          nav:true
      }
  }
});

// for filter
  // init Isotope
  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      // use outer width of grid-sizer for columnWidth
      columnWidth: 1
    }
  });

  // filter items on button click
  $('.portfolio-menu').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });

  //for menu active class
  $('.portfolio-menu button').on('click', function (event) {
    $(this).siblings('.active').removeClass('active');
    $(this).addClass('active');
    event.preventDefault();
	});
  
  // wow js
  new WOW().init();

  // counter 
  $('.counter').counterUp({
    delay: 10,
    time: 10000
  });

/* magnificPopup img view */
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
	  enabled: true
	}
});

/* magnificPopup img view */
$('.img-pop-up').magnificPopup({
	type: 'image',
	gallery: {
	  enabled: true
	}
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});


  // scrollIt for smoth scroll
  $.scrollIt({
    upKey: 38,             // key code to navigate to the next section
    downKey: 40,           // key code to navigate to the previous section
    easing: 'linear',      // the easing function for animation
    scrollTime: 600,       // how long (in ms) the animation takes
    activeClass: 'active', // class given to the active nav element
    onPageChange: null,    // function(pageIndex) that is called when page is changed
    topOffset: 0           // offste (in px) for fixed top navigation
  });

  // scrollup bottom to top
  $.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '4500', // Distance from top before showing element (px)
    topSpeed: 300, // Speed back to top (ms)
    animation: 'fade', // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '<i class="fa fa-angle-double-up"></i>', // Text for element
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });


  // blog-page

  //brand-active
$('.brand-active').owlCarousel({
  loop:true,
  margin:30,
items:1,
autoplay:true,
  nav:false,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          nav:false

      },
      767:{
          items:4
      },
      992:{
          items:7
      }
  }
});

// blog-dtails-page

  //project-active
$('.project-active').owlCarousel({
  loop:true,
  margin:30,
items:1,
// autoplay:true,
navText:['<i class="Flaticon flaticon-left-arrow"></i>','<i class="Flaticon flaticon-right-arrow"></i>'],
nav:true,
dots:false,
// autoplayHoverPause: true,
// autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          nav:false

      },
      767:{
          items:1,
          nav:false
      },
      992:{
          items:2,
          nav:false
      },
      1200:{
          items:1,
      },
      1501:{
          items:2,
      }
  }
});

if (document.getElementById('default-select')) {
  $('select').niceSelect();
}

  //about-pro-active
$('.details_active').owlCarousel({
  loop:true,
  margin:0,
items:1,
// autoplay:true,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
nav:true,
dots:false,
// autoplayHoverPause: true,
// autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          nav:false

      },
      767:{
          items:1,
          nav:false
      },
      992:{
          items:1,
          nav:false
      },
      1200:{
          items:1,
      }
  }
});

});

// resitration_Form
$(document).ready(function() {
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});



//------- Mailchimp js --------//  
function mailChimp() {
  $('#mc_embed_signup').find('form').ajaxChimp();
}
mailChimp();



        // Search Toggle
        $("#search_input_box").hide();
        $("#search").on("click", function () {
            $("#search_input_box").slideToggle();
            $("#search_input").focus();
        });
        $("#close_search").on("click", function () {
            $('#search_input_box').slideUp(500);
        });
        // Search Toggle
        $("#search_input_box").hide();
        $("#search_1").on("click", function () {
            $("#search_input_box").slideToggle();
            $("#search_input").focus();
        });
        $(document).ready(function() {
          $('select').niceSelect();
        });

        // prise slider 
        







})(jQuery);	