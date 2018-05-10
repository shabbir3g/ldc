/*-----------------------------------------------------------------------------------*/
/* Our Team */
/*-----------------------------------------------------------------------------------*/

(function($) {
	"use strict";
	
		$(window).scroll(function() {
			if ($(window).scrollTop() > 150) {
				$(".slider-header").addClass("sticky");
			} 
			else {
				$(".slider-header").removeClass("sticky");
			}
		});
		

        // search box
				
				
		  $('a[href="#search"]').on("click", function(event) {
			event.preventDefault();
			$("#search").addClass("open");
			$('#search > form > input[type="search"]').focus();
		  });

		  $("#search, #search button.close").on("click keyup", function(event) {
			if (
			  event.target == this ||
			  event.target.className == "close" ||
			  event.keyCode == 27
			) {
			  $(this).removeClass("open");
			}
		  });

		 
		

				// search box

		/*-----------------------------------------------------------------------------------*/
		/* Appointment Tab  */
		/*-----------------------------------------------------------------------------------*/

        $('ul.tabs li').on('click',function() {
			var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
	    });
        
        $('.appointment-inner').on('click',function() {
			var tab_id = $(this).attr('data-tab');

			$('.appointment-inner').removeClass('current');
			$('.tab-content2').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
	    });

	    $('.mobile-ic').on('click',function() {
	    	$('.responsive-menu').slideToggle();
            $('.menu').slideToggle();
	    })


		/*-----------------------------------------------------------------------------------*/
		/* Navigation Scroll */
		/*-----------------------------------------------------------------------------------*/


	  
	  $('.header ul li a').on('click',function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			|| location.hostname == this.hostname) {

			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			   if (target.length) {
				 $('html,body').animate({
					 scrollTop: target.offset().top
				}, 1000);
				return false;
				   }
				 }
			   });
        
		 
         
		 
		
       
		/*-----------------------------------------------------------------------------------*/
		/* scroll to top js */
		/*-----------------------------------------------------------------------------------*/

        
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scroll-top').fadeIn();
            } else {
                $('.scroll-top').fadeOut();
            }
        });

        $('.scroll-top').on('click',function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
        $('.play-btn').on('click',function() {
	    	$('.video-popup').show();
	    })
        
        $('.close-btn').on('click',function() {
	    	$('.video-popup').hide();
	    })
		
		
		/*-----------------------------------------------------------------------------------*/
		/* Animate loader off screen */
		/*-----------------------------------------------------------------------------------*/
		
		
		
		
		

})(jQuery);