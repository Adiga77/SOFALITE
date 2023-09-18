$(document).ready(function(){
	"use strict";
    

    // 1. Scroll To Top 
		$(window).on('scroll',function () {
			if ($(this).scrollTop() > 600) {
				$('.return-to-top').fadeIn();
			} else {
				$('.return-to-top').fadeOut();
			}
		});
		$('.return-to-top').on('click',function(){
				$('html, body').animate({
				scrollTop: 0
			}, 1500);
			return false;
		});
	
	
	// 2. owl carousel
	
		// i. client (carousel)
		
			$('#client').owlCarousel({
				items:5,
				loop:true,
				smartSpeed: 1000,
				autoplay:true,
				dots:false,
				autoplayHoverPause:true,
				responsive:{
						0:{
							items:2
						},
						415:{
							items:3
						},
						600:{
							items:3

						},
						1200:{
							items:5
						}
					}
				});
				
				
				$('.play').on('click',function(){
					owl.trigger('play.owl.autoplay',[1000])
				})
				$('.stop').on('click',function(){
					owl.trigger('stop.owl.autoplay')
				})

		// ii.  testimonial-carousel
		
			$("#collection-carousel").owlCarousel({
				items: 1,
				autoplay: true,
				loop: true,
				dots:false,
				mouseDrag:true,
				nav:false,
				smartSpeed:1000,
				transitionStyle:"fade",
				animateIn: 'fadeIn',
				animateOut: 'fadeOutLeft'
				// navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
			});


    // 3. welcome animation support

        $(window).load(function(){
        	$(".welcome-hero-txt h4,.welcome-hero-txt h2,.welcome-hero-txt p").removeClass("animated fadeInUp").css({'opacity':'0'});
            $(".welcome-hero-txt button").removeClass("animated fadeInDown").css({'opacity':'0'});
        });

        $(window).load(function(){
        	$(".welcome-hero-txt h4,.welcome-hero-txt h2,.welcome-hero-txt p").addClass("animated fadeInUp").css({'opacity':'0'});
            $(".welcome-hero-txt button").addClass("animated fadeInDown").css({'opacity':'0'});
        });


	// 4. cart-close
		$(".cart-close").click(function(){
			$(this).parents(".single-cart-list").fadeOut();
		});

});

var sitePlusMinus = function() {

	var value,
		quantity = document.getElementsByClassName('quantity-container');

	function createBindings(quantityContainer) {
	  var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
	  var increase = quantityContainer.getElementsByClassName('increase')[0];
	  var decrease = quantityContainer.getElementsByClassName('decrease')[0];
	  increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
	  decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
	}

	function init() {
		for (var i = 0; i < quantity.length; i++ ) {
					createBindings(quantity[i]);
		}
	};

	function increaseValue(event, quantityAmount) {
		value = parseInt(quantityAmount.value, 10);

		console.log(quantityAmount, quantityAmount.value);

		value = isNaN(value) ? 0 : value;
		value++;
		quantityAmount.value = value;
	}

	function decreaseValue(event, quantityAmount) {
		value = parseInt(quantityAmount.value, 10);

		value = isNaN(value) ? 0 : value;
		if (value > 0) value--;

		quantityAmount.value = value;
	}
	
	init();
	
};
sitePlusMinus();
