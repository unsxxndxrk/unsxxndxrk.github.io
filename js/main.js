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
    (function($){
        jQuery.fn.sendFormLP = function(options){
            options = $.extend({
                toEmail: 'obed53rus@gmail.com',
                fromEmail: 'denis@obed53.ru',
                interval : 5000
            }, options);

            var make = function(){
                $(this).submit(function(e){
                    e.preventDefault();

                    var $this = $(this);

                    var i = true;
                    var toEmail = options.toEmail;
                    var fromEmail = options.fromEmail;
                    var them = $this.data('them');
                    var $items = $this.find('[name]');
                    var $required = $this.find('[data-required]');
                    var objShow = $this.data('show')
                    var objHide = $this.data('hide')

                    $items.removeClass('error');

                    $required.each(function(){
                        if($(this).val() == ''){
                            i = false
                            $(this).addClass('error');
                        }
                    });

                    if(i == true){
                        var arr = [];
                        var m_action = $this.attr('action');

                        $items.each(function(){
                            var nam = $(this).data('name');
                            var val = $(this).val();
                            arr.push(nam+val);
                        });

                        var m_data = '';

                        for(q=0; q <= arr.length-1; q++){
                            m_data = m_data+arr[q]+'\n';
                        }
                        
                        $.ajax({
                            type: 'POST',
                            url: m_action,
                            data: {
                                m_data:m_data,
                                toEmail:toEmail,
                                fromEmail:fromEmail,
                                them:them
                            },
                            success: function(result){
                                $items.val('');
                                $(objShow).fadeIn();
                                $(objHide).hide();

                                setInterval(function(){
                                    $(objShow).fadeOut();
                                }, options.interval);
                            }
                        });
                    }
                });
            };
            return this.each(make); 
        };
    })(jQuery);

    $(function(){
        $('form').sendFormLP({
            toEmail: 'obed53rus@gmail.com',
            fromEmail: 'denis@obed53.ru',
            interval: 5000
        });
    });

    

    /* Choose menu */
    var
        chooseBtns  = document.getElementsByClassName('menu__btn'),
        foodArray   = [],
        namesOfFood = document.getElementById('number_of_dinner'),
        confirm     = document.getElementById('confirm');


    for (var i = 0; i < chooseBtns.length; i++) {
        chooseBtns[i].addEventListener('click', choose);
    }

    function choose() {
        var index = this.getAttribute('data-index');

        if (!this.classList.contains('choosed')) {
            var 
                food  = this.getAttribute('data-food');

            this.innerHTML = '<i class="fa fa-check absolute"></i>';
            this.classList.add('choosed');

            foodArray[index] = food;
        } else {
            delete foodArray[index];

            this.innerHTML = 'Выбрать';
            this.classList.remove('choosed');
        }
    }

    confirm.onclick = function() {
        var 
            endFoodArray = [];

        for (var j = 0; j < foodArray.length; j++) {
            if (typeof foodArray[j] !== 'undefined' && foodArray[j] !== null) {
                endFoodArray.push(foodArray[j]);
            } else {
                continue;
            }
        }

        var foodList = endFoodArray.join(', ');
        namesOfFood.value = foodList;
    }
});