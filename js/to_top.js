$(function() {
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) { $('#to_top').addClass('to-top_active'); } 
		else { $('#to_top').removeClass('to-top_active'); }
	});
});