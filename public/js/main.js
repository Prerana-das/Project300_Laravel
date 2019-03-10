(function ($) {
	"use strict";
	
	jQuery(document).ready(function( $ ) {
	
		
		//isotope portfolio
		$('.gallery').isotope({
			itemSelector:'.grid-item'
		});

			//Magnific popup 
		$('.portfolio-list').each(function() {
			$(this).magnificPopup({
				delegate: 'a', // 
				type: 'image',
				gallery: {
				  enabled:true
				}
			});
		});
		
		$('#iconified').on('keyup', function() {
			var input = $(this);
			if(input.val().length === 0) {
				input.addClass('empty');
			} else {
				input.removeClass('empty');
			}
		});
		
		
		
		
		//mobile menu
		var ulNav= "#nav", openNav= "activeNav";
		
		$('.toggle-menu').on('click', function(e){
			if($(ulNav).hasClass(openNav)){
				$(ulNav).removeClass(openNav);
			}else{
				$(ulNav).addClass(openNav);
			}
			e.preventDefault();
		});
		
		
		
		//wow js
		new WOW().init();	

});

$(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
			$('.scroll-top').fadeIn();
		} else {
			$('.scroll-top').fadeOut();
		}
	});
	$('.scroll-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	// Preloder
	$(window).on('load', function() {
		$('#status').fadeOut();
		$('#preloader').delay(100).fadeOut('fast');
		$('body').delay(100).css({'overflow':'visible'});
	});
	
	
}(jQuery));		
	
	