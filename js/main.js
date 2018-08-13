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

    /* Menu */
    var
        firsts     = $('#firsts'),
        seconds    = $('#seconds'),
        btnFirsts  = $('#first_b'),
        btnSeconds = $('#second_b');

    btnFirsts.click(function() {
        firsts.removeClass('d-none').addClass('animated');
        seconds.addClass('d-none').removeClass('animated');
        btnFirsts.addClass('menu__control_active');
        btnSeconds.removeClass('menu__control_active');
    });

    btnSeconds.click(function() {
        firsts.addClass('d-none').removeClass('animated');
        seconds.removeClass('d-none').addClass('animated');
        btnSeconds.addClass('menu__control_active');
        btnFirsts.removeClass('menu__control_active');
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

    //E-mail Ajax Send
    $("form").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function() {
            // alert("Thank you!");
            setTimeout(function() {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });
});