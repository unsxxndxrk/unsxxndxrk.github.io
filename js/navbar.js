$(function() {
	$('#navbar_search, #navbar_search svg').click(function() {
		$('#navbar_search_input').toggleClass('navbar__search_active');
	});
});

$(function() {
	$(document).mouseup(function(e) {
		if (!$('#navbar_search, #navbar_search_input, #navbar_search svg').is(e.target)) {
			$('#navbar_search_input').removeClass('navbar__search_active');
		}
	});
});

$(function() {
	$(window).scroll(function(){
		if ($(this).scrollTop() > $('#header').innerHeight()) {
			$('#navbar').addClass('navbar_sticky');
			$('#path_block').addClass('scroll_active');
		} else {
			$('#navbar').removeClass('navbar_sticky');
			$('#path_block').removeClass('scroll_active');
		};
	});
});

$(function() {
	$('#burger_btn').click(function() {
		$('#navbar_menu').toggleClass('navbar__menu-mobile-active');
		$('.burger-animated-1').toggleClass('burger-a-1_active');
		$('.burger-animated-2').toggleClass('burger-a-2_active');
		$('.burger-hide').toggleClass('d-none');
	});
});

$(function() {
	$(document).mouseup(function(e) {
		if (!$('#burger_btn span, #burger_btn').is(e.target)) {
			$('#navbar_menu').removeClass('navbar__menu-mobile-active');
			$('.burger-animated-1').removeClass('burger-a-1_active');
			$('.burger-animated-2').removeClass('burger-a-2_active');
			$('.burger-hide').removeClass('d-none');
		}
	});
});