$(function() {
	$('.offer__carousel').slick({
		autoplay: true,
		adaptiveHeight: true,
		infinite: true,
		pauseOnHover: true,
		prevArrow: $('.offer__carousel-prev'),
		nextArrow: $('.offer__carousel-next'),
		dots: true
	});
});

$(function() {
	$('.brands__carousel').slick({
		autoplay: true,
		adaptiveHeight: true,
		infinite: true,
		dots: false,
		arrows: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		pauseOnHover: false,
		responsive: [
	    {
	      breakpoint: 1220,
	      settings: {
	        slidesToShow: 4,
			slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 901,
	      settings: {
	        slidesToShow: 3,
			slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 756,
	      settings: {
	        slidesToShow: 2,
			slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 501,
	      settings: {
	        slidesToShow: 1,
			slidesToScroll: 1
	      }
	    }
	  ]
	});
});