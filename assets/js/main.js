function owlCarouselTrigger() {
	$('.slider-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    //dotsContainer: '#custom-dots',
	    items: 1,
	    animateOut: 'fadeOut'
	})
}

function entryCarouselTrigger() {
	$('.entry-carousel').owlCarousel({
	    nav:true,
	    navText: ["<i class='fa fa-fw fa-chevron-left' href='javascript:void(0)'></i>","<i class='fa fa-fw fa-chevron-right' href='javascript:void(0)'></i>"],
	    margin:10,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        
	        768:{
	            items:2
	        },

	        992:{
	            items:3
	        }
	    },
	    animateOut: 'fadeOut'
	})
}

function scrollOnClick() {
	$(document).on('click', 'a.page-scroll', function(e) {
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		},1500);

		if($('.nav_mobile').is(':visible')) {
			$('.nav_menu').slideUp(600);
		};
		e.preventDefault();
	});
};

function sideNavToggle() {
	$('.side-nav-btn').on('touchstart click', function(e) {
		$('.main-side-nav-overlay').fadeIn(300)
		$('.main-side-nav').css("margin-left", "0");
		e.preventDefault();
	});

	$('.main-side-nav-overlay').on('touchstart click', function(e) {
		$('.main-side-nav-overlay').fadeOut(400);
		$('.main-side-nav').css("margin-left", "-255px");
		e.preventDefault();
	});
}

	/*$('.side-nav-btn').on('click', function() {
		$('.main-side-nav-overlay').fadeIn(300)
		$('.main-side-nav').css("margin-left", "0");
		
	});*/

$(document).ready(owlCarouselTrigger);
$(document).ready(entryCarouselTrigger);
$(document).ready(sideNavToggle);
$(document).ready(scrollOnClick);