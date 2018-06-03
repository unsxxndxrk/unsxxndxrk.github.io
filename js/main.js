$(document).ready(function() {
	/* Initialize Wow js */
	new WOW().init();

	/* Smooth Scrolling */
    $('.go_to').click( function(){ 
	var scroll_el = $(this).attr('href'); 
        if ($(scroll_el).length != 0) {
	    $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); 
        }
	    return false;
    });

	/* Sale Menu */
	$('#new').click(function(){ $('.new').show(500); $('.popular, .top').hide(500); });

	$('#top').click(function(){ $('.top').show(500); $('.popular, .new').hide(500); });

	$('#popular').click(function(){ $('.sale__gallery').show(500); });

	/* Testimonials Carousel */
	$(function() {
        $('.test__item').click(function () {
            var get_id = this.id;
            var get_current = $('.test__desc .' + get_id);
            $('.test__desc-inner').not(get_current).addClass('test-desc__hide');
            get_current.removeClass('test-desc__hide');

            var current_test = $('.col-lg-2 #' + get_id);
            $('.test__item').not(current_test).removeClass('test_active');
            current_test.addClass('test_active');
        });
    });
});

$('#test-1').click(function() { $('.test__shape i').removeClass('shape_middle').removeClass('shape_right').addClass('shape_left'); });

$('#test-2').click(function() { $('.test__shape i').removeClass('shape_left').removeClass('shape_right').addClass('shape_middle'); });

$('#test-3').click(function() { $('.test__shape i').removeClass('shape_middle').removeClass('shape_left').addClass('shape_right'); });