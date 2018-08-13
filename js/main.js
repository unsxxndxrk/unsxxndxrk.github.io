$(document).ready(function(){
    /* Smooth Scrolling */
    $('.go_to').click( function(){ 
	var scroll_el = $(this).attr('href'); 
        if ($(scroll_el).length != 0) { 
	       $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
        }
	    return false;
    });
    
    /* Scroll Menu */
	$(window).scroll(function(){
		var wScroll = $(this).scrollTop();
		// Activate menu
		if (wScroll > 20) {
			$('.header__navigation').addClass('nav-active');
		}
		else {
			$('.header__navigation').removeClass('nav-active');
		};
	});

	 /* Burger Menu */
	$(".header__menu-button").click(function() {   
        $(".slide-out-menu").toggleClass("menu-open");
    });

    $(".menu-close").click(function(){
    	$(".slide-out-menu").removeClass("menu-open");
    });

    $(document).click(function(event) {  
        if ($(event.target).closest(".header__menu-button").length) return;
        $(".slide-out-menu").removeClass("menu-open");
        event.stopPropagation();
    });
    
    /* Team Slider */
    $('#teammate-1').click(function(){
        $(this).toggleClass('mate-orange-box');
        $('#teammate-2').removeClass('mate-green-box');
        $('#teammate-3').removeClass('mate-purple-box');
        $('#teammate-4').removeClass('mate-yellow-box');
        $('#shape').animate({'left':'100px'}, 300);
        $('#team__mate-1').toggleClass('team-desc-active');
        $('#team__mate-2, #team__mate-3, #team__mate-4').removeClass('team-desc-active').removeClass('bounceInUp');
    });
    
    $('#teammate-2').click(function(){
        $(this).toggleClass('mate-green-box');
        $('#teammate-1').removeClass('mate-orange-box');
        $('#teammate-3').removeClass('mate-purple-box');
        $('#teammate-4').removeClass('mate-yellow-box');
        $('#shape').animate({'left':'400px'}, 300);
        $('#team__mate-2').toggleClass('team-desc-active');
        $('#team__mate-1, #team__mate-3, #team__mate-4').removeClass('team-desc-active');
    });
    
    $('#teammate-3').click(function(){
        $(this).toggleClass('mate-purple-box');
        $('#teammate-1').removeClass('mate-orange-box');
        $('#teammate-2').removeClass('mate-green-box');
        $('#teammate-4').removeClass('mate-yellow-box');
        $('#shape').animate({'left':'700px'}, 300);
        $('#team__mate-3').toggleClass('team-desc-active');
        $('#team__mate-1, #team__mate-2, #team__mate-4').removeClass('team-desc-active');
    });
    
    $('#teammate-4').click(function(){
        $(this).toggleClass('mate-yellow-box');
        $('#teammate-1').removeClass('mate-orange-box');
        $('#teammate-3').removeClass('mate-purple-box');
        $('#teammate-2').removeClass('mate-green-box');
        $('#shape').animate({'left':'1000px'}, 300);
        $('#team__mate-4').toggleClass('team-desc-active');
        $('#team__mate-1, #team__mate-3, #team__mate-2').removeClass('team-desc-active');
    });
    
    /* Testimonials Slider */
    $('.test__carousel').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true
    });
    
    /* Blog Auto-slider */
    $('.blog__inner-right').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true
    });
});