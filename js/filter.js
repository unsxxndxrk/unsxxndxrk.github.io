var 
	filterButtons   = $('.filter__settings-heading'),
	filterDropdowns = $('.filter__settings-drop'),
	selectDropdowns = $('.filter__products-heading-select-drop-options');

/* Filter Left Settings Dropdowns */

$(function() {
	filterButtons.click(function() {
		var 
			filterToggler    = $(this).find('.filter__settings-heading-toggler'),
			dropdown         = $(this).attr('data-drop'),
			filterDropOpened = filterToggler.hasClass('filter__settings-toggler_active');

		filterToggler.toggleClass('filter__settings-toggler_active');

		$.map(filterDropdowns, function(el) {
			filterDropOpened && $(el).hasClass(dropdown) ? $(el).css('marginTop', '-' + $(el).innerHeight() + 'px') :
			!filterDropOpened && $(el).hasClass(dropdown) ? $(el).css('marginTop', 0) : 0;
		});
	});
});

/* Filter Right Grid Choosing */

$(function() {
	$('.filter__products-heading-right-grid-view').click(function() {
		$('.filter__products-heading-right-grid-view').removeClass('filter__products-heading-right-grid_active');
		$(this).addClass('filter__products-heading-right-grid_active');

		$(this).attr('data-grid') === 'line-grid' ? $('.filter__products-items-inner').addClass('filter__products-line-grid') :
		$('.filter__products-items-inner').removeClass('filter__products-line-grid');
	});
});