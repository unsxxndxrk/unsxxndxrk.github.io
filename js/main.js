$(document).ready(function() {
	/* Smooth Scrolling */
	$('.go_to').click( function(){ 
	var scroll_el = $(this).attr('href'); 
        if ($(scroll_el).length != 0) { 
	    $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); 
        }
	    return false; 
    });

	/* Activate wow.min.js */
	new WOW().init();

	/* Init Parallax */
	$(document).ready(function(){
    	$('.parallax').parallax();
  	});

	/* Init Sidebar */
    $(document).ready(function(){
    	$('.sidenav').sidenav();
  	});

  	/* About Carousel */
  	$('.about__carousel').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  dots: false,
	  arrows: true,
	  autoplay: true,
	  responsive: [
    {
      breakpoint: 1024,
      settings: {
        arrows: false
      }
    }
  ]
	});

	/* Portfolio Gallery */
	$(function() {
  	$('.portfolio__menu-item').click(function () {
      var get_id = this.id;
      var get_current = $('.portfolio .row:nth-child(3) .' + get_id);
      $('.portfolio .row:nth-child(3) .col').not(get_current).hide(500);
      get_current.show(500);

      var menu_item = $('.portfolio__menu #' + get_id);
      $('.portfolio__menu .portfolio__menu-item').not(menu_item).removeClass('p-menu_active');
      menu_item.addClass('p-menu_active');
  	});

    $('#all').click(function () {
      $('.portfolio .row:nth-child(3) .col').show(500);
    });
  });

  /* Testimonials Carousel */
	$('.test__carousel').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  dots: true,
	  arrows: false,
	  autoplay: true
	});
});