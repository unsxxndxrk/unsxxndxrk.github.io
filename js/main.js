$(document).ready(function() {
    /* Smooth Scroll */ 
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
	$(".menu__button").click(function () {   
        $(".slide-out-menu").toggleClass("menu-open");
    });

    $(".menu-close").click(function(){
    	$(".slide-out-menu").removeClass("menu-open");
    });

    $(document).click(function (event) {  
        if ($(event.target).closest(".menu__button").length) return;
        $(".slide-out-menu").removeClass("menu-open");
        event.stopPropagation();
    });

    /* Watch video window */
    $(function () {
        $('.offer__btn').click(function () {  
            $('#exampleModal').arcticmodal();
        });
    });

    /* Team Carousel */
   $('.team__carousel').slick({
       infinite: true,
       slidesToShow: 1,
       slidesToScroll: 1,
       dots: true,
       initialSlide: 1,
       autoplay: true,
       arrows: true,
       responsive: [
    {
      breakpoint: 1080,
      settings: {
        arrows: false
      }
    }
    ]
   });
    
    /* Plan Slider */
    $('.individual').click(function(){
        $('.company').removeClass('wrapper__left-text-active');
        $('.individual').addClass('wrapper__left-text-active');
        $('.wrapper__left-slider-control').removeClass('wrapper__left-slider-active');
        $('#individual-slide').addClass('plan__item-active');
        $('#company-slide').removeClass('plan__item-active');
    });
    
    $('.company').click(function(){
        $('.individual').removeClass('wrapper__left-text-active');
        $('.company').addClass('wrapper__left-text-active');
        $('.wrapper__left-slider-control').addClass('wrapper__left-slider-active');
        $('#company-slide').addClass('plan__item-active');
        $('#individual-slide').removeClass('plan__item-active');
    });
})