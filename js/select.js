$(function() {
	$('.select-drop-inner').click(function() {
		$(this).parent().find('.select-drop-options').toggleClass('select-drop-options_active');
		$(this).find('svg').toggleClass('select-arrow_active');
		$('.select-drop-options').not($(this).parent().find('.select-drop-options')).removeClass('select-drop-options_active');
		$('.select-drop svg').not($(this).find('svg')).removeClass('select-arrow_active');
	});
});

$(function() {
	$('.select-drop-option').click(function() {
		var selectedOption = $(this).parent().parent().find('.select-drop-selected');
		selectedOption.html($(this).html());
	});
});

$(function() {
	$(document).mouseup(function(e) {
		if (!$('.select-drop-inner, .select-drop-inner div, .select-drop-inner svg').is(e.target)) {
			$('.select-drop-icon svg').removeClass('select-arrow_active');
			$('.select-drop-options').removeClass('select-drop-options_active');
		}
	});
});