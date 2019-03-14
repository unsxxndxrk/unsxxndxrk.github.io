$(function() {
	$('.header__left-select').click(function() {
		$(this).find('.header__left-select-drop').toggleClass('header__left-select-drop_active');
		$(this).find('svg').toggleClass('header__left-select-svg_active');
		$('.header__left-select-drop').not($(this).find('.header__left-select-drop')).removeClass('header__left-select-drop_active');
		$('.header__left-select svg').not($(this).find('svg')).removeClass('header__left-select-svg_active');
	});
});

$(function() {
	$('.header__left-select-drop a').click(function() {
		$(this).parent().parent().find('.header__left-select-inner-lang').html($(this).html());
	});
});

$(function() {
	$(document).mouseup(function(e) {
		if (!$('.header__left-select-inner, .header__left-select-drop, .header__left-select-drop a, .header__left-select-inner svg, .header__left-select-inner span').is(e.target)) {
			$('.header__left-select-drop').removeClass('header__left-select-drop_active');
			$('.header__left-select-drop a').removeClass('header__left-select-link_active');
			$('.header__left-select-inner svg').removeClass('header__left-select-svg_active');
		}
	});
});