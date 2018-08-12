$(document).ready(function() {
    
    var win_w = $('body').width();
    
    /* First banner slider */
	$('.first-banner__controls-item').click(function () {
        var get_id = this.id;
        var get_current = $('.first-banner__wrapper-inner .' + get_id);
        $('.first-banner__wrapper-inner .first-banner__slide').not(get_current).css('display', 'none').removeClass('animated');
        get_current.css('display', 'block').addClass('animated');

        var menu_item = $('.first-banner__controls #' + get_id);
        $('.first-banner__controls .first-banner__controls-item').not(menu_item).removeClass('active');
        menu_item.addClass('active');
    });

    $('#all').click(function () {
        $('.portfolio .row:nth-child(3) .col').show(500);
    });

    /* Menu */

    $('#menu_btn').click(function () {
        $('#menu-menu-1').toggleClass('drop-menu-1_active');
        $('.message').toggleClass('d-none');
        $('section, .offer, .footer').toggleClass('blur');
        $('#nav_menu_fixed').toggleClass('nav-fixed_active');
    	$('#menu_btn span:nth-child(1)').toggleClass('burger_1_active');
    	$('#menu_btn span:nth-child(2)').toggleClass('burger_2_active');
    });

    /* Testimonials Slider */

	$('.test__peoples img').mouseover(function () {
        var get_id = this.id;
        var get_current = $('.test__reviews .' + get_id);
        $('.test__reviews .test__reviews-item').not(get_current).css('display', 'none').removeClass('animated');
        get_current.css('display', 'block').addClass('animated');
    });

    /* Message btn */

    $('#message_btn').click(function() {        
	    if (win_w < 1280) {
	       $('#mes_mob_popup').toggleClass('mes-mob_active');
            $('.nav-fixed').removeClass('nav-fixed_active');
        } else if (win_w >= 1280) {
	       $('#mes_popup').toggleClass('animated').toggleClass('mes_p_active');
           $('.message__btn i:first-child').toggleClass('mes_non_active');
    	   $('.message__btn').toggleClass('mes_shadow');
	    }
    });
    
    $('#mes_mob_close').click(function() {
        $('#mes_mob_popup').removeClass('mes-mob_active');
    });

    /* Filter */

    $('#filter').click(function () {
    	$('.nav-fixed__filter i:first-child').toggleClass('f_nav_opac');
    	$('#filter_close').toggleClass('f_nav_opac');

    	$('#filter_bar').toggleClass('filter-bar_active');
    });

    /* Fixed menu */

    $(window).scroll(function(){
		var wScroll = $(this).scrollTop();
		
		if (wScroll > 20) {
			$('.nav-fixed').addClass('nav-fixed_active');
			$('#filter_bar').addClass('filter-bar_active_bot');
		}
		else {
			$('.nav-fixed').removeClass('nav-fixed_active');
			$('#filter_bar').removeClass('filter-bar_active');
			$('.nav-fixed__filter i:first-child').removeClass('f_nav_opac');
    		$('#filter_close').addClass('f_nav_opac');
		};
	});

	/* Filtering */

	$('.filter-bar__item-c').click(function () {
        var get_id = this.id;
        var get_current = $('.items__col .' + get_id);
        $('.items__col .items__col-item').not(get_current).hide(400);
        get_current.show(400);
    });

    $('#all, #random').click(function () {
        $('.items__col .items__col-item').show(400);
    });

    /*  */

    $('.first-banner__slide img').mouseover(function () {
    	$('#view_block').css('bottom', '0');
    }); 

    $('.first-banner__slide img').mouseleave(function () {
    	$('#view_block').css('bottom', '-80px');
    }); 

    /*  */

    $('.features__item-inner').click(function () {
    	var get_id 			 = this.id;
	    var height           = $('.features__item-drop-wrap').height();
	    var get_current      = $('.features__item-dropdown .' + get_id);
	    var get_current_open = $('.features__item-inner .' + get_id);
		get_current.toggleClass('feature_show');
		get_current_open.toggleClass('features__open_rotate');
    });

  $('#price_1').mouseover(function() {
  	$('#price_bg').addClass('onleft');
  });

  $('#price_1').mouseleave(function() {
  	$('#price_bg').removeClass('onleft');
  });

  $('#price_3').mouseover(function() {
  	$('#price_bg').addClass('onright');
  });

  $('#price_3').mouseleave(function() {
  	$('#price_bg').removeClass('onright');
  });
});