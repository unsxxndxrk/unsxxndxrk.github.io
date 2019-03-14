$(function() {
	$('.go_to').click(function() {
		var idtop = $($(this).attr('data-target')).offset().top;
		$('html,body').animate({scrollTop: idtop}, 500);
		return false;
	});
});