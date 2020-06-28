(function($) {
	/*----------------- WHOLE SCRIPT STRICT MODE SYNTAX -----------------*/
	"use strict";
	
	/*--------------- SMARTMENU ---------------*/
	$('#main-menu').smartmenus({
		mainMenuSubOffsetX: -1,
		mainMenuSubOffsetY: 4,
		subMenusSubOffsetX: 6,
		subMenusSubOffsetY: -6
	});
	
	/*--------------- SMARTMENUS MOBILE MENU TOGGLE BUTTON ---------------*/
	var $mainMenuState = $('#main-menu-state');
	if ($mainMenuState.length) {
		// animate mobile menu
		$mainMenuState.on('change', function() {
			var $menu = $('#main-menu');
			if (this.checked) {
				$menu.hide().slideDown(250, function() {
					$menu.css('display', '');
				});
			} else {
				$menu.show().slideUp(250, function() {
					$menu.css('display', '');
				});
			}
		});
		// hide mobile menu beforeunload
		$(window).on('bind', 'beforeunload unload', function() {
			if ($mainMenuState[0].checked) {
				$mainMenuState[0].click();
			}
		});
	}
	$(function() {
	// use the whole parent item as sub menu toggle button
	$('#main-menu').bind('click.smapi', function(e, item) {
		var obj = $(this).data('smartmenus');
		if (obj.isCollapsible()) {
			var $sub = $(item).dataSM('sub');
			if ($sub && $sub.is(':visible')) {
				obj.menuHide($sub);
				return false;
			}
		}
	});
});
	

	/*--------------- SCROLL TO TOP BUTTON ---------------*/
	var scrollToTop = document.querySelector(".scrollToTop");
	scrollToTop.addEventListener('click', function(e) {
		$("html, body").animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	var last_known_scroll_position = 0;
	var scrollToTop = document.querySelector(".scrollToTop");
	window.addEventListener('scroll', function(e) {
		last_known_scroll_position = window.scrollY;
		if(last_known_scroll_position > 100)
		{
			scrollToTop.classList.add("fadeInScroll");
			scrollToTop.classList.remove("fadeOutScroll");
		}
		else
		{
			scrollToTop.classList.remove("fadeInScroll");
			scrollToTop.classList.add("fadeOutScroll");
		}
	});

	/*---------------- BANNER SLIDER --------------*/
	$('#cascade-slider').cascadeSlider({});

	/*--------------- HEADER STICKY ---------------*/
	var last_known_scroll_position = 0;
	var navigation = document.querySelector("header");
	window.addEventListener('scroll', function(e) {
		last_known_scroll_position = window.scrollY;
		if (last_known_scroll_position > 50) {
			navigation.classList.add("sticky");
		} else {
			navigation.classList.remove("sticky");
		}
	});

	/*--------------- VIDEO POPUP ---------------*/
	$(".youtube-link").grtyoutube({
		autoPlay: true,
		theme: "dark"
	});
	
	/*--------------- LOADING SCREEN ---------------*/
	setTimeout(function() {
		$('body').addClass('loaded');
	}, 0);
	
	/*--------------- FAQ ACCORDION ---------------*/
	var action = 'click';
	var speed = "500";
	
	$(document).ready(function() {
	  // Question handler
	  $('li.q').on(action,function () {
		// Get next element
		  $(this).next()
			.slideToggle(speed)
			.siblings('li.a')
			.slideUp();
		// Get arrow for active question
		var arrow = $(this).children('.fa');
		// Remove the 'rotate' class for all images except the active.
		$('.fa').not(arrow).removeClass('rotate');
		// Toggle rotate class
		arrow.toggleClass('rotate');
	  });
	});
	/* ------------------ COUNTER WIDGETS -----------------*/
	var $myDiv = $('#counter');
	if ($myDiv.length) {
		$(window).on('scroll', function() {
			var a = 0;
			var oTop = $('#counter').offset().top - window.innerHeight;
			if (a == 0 && $(window).scrollTop() > oTop) {
				$('.counter-value').each(function() {
					var $this = $(this),
						countTo = $this.attr('data-count');
					$({
						countNum: $this.text()
					}).animate({
						countNum: countTo
					}, {
						duration: 2000,
						easing: 'swing',
						step: function() {
							$this.text(Math.floor(this.countNum));
						},
						complete: function() {
							$this.text(this.countNum);
						}
					});
				});
				a = 1;
			}
		});
	}
}(jQuery));



/*--------------- FAQ ACCORDION ---------------*/

$(".questions .accordion_detail").hide(); 
$(".questions:first-child > .accordion_detail").show(); 

/* Post-document load */ 
$(document).ready(function(){ 
	$(".questions .accordion_head").click(function(event){ 
		$(".questions .accordion_head").not(this).each(function(){
			$(this).parent( ".questions" ).removeClass("active"); 
			$(this).siblings(".accordion_detail").slideUp("fast"); 
		}); 
		$(this).parent( ".questions" ).toggleClass("active");
		$(this).siblings(".accordion_detail").slideToggle("fast"); 
	}); 
}); 


$(".questions_2 .accordion_detail_2").hide(); 
$(".questions_2:first-child > .accordion_detail_2").show(); 


/* Post-document load */ 
$(document).ready(function(){ 
	$(".questions_2 .accordion_head_2").click(function(event){ 
		$(".questions_2 .accordion_head_2").not(this).each(function(){
			$(this).parent( ".questions_2" ).removeClass("active_2"); 
			$(this).siblings(".accordion_detail_2").slideUp("fast"); 
		}); 
		$(this).parent( ".questions_2" ).toggleClass("active_2");
		$(this).siblings(".accordion_detail_2").slideToggle("fast"); 
	}); 
}); 


$(".questions_3 .accordion_detail_3").hide(); 
$(".questions_3:first-child > .accordion_detail_3").show(); 


/* Post-document load */ 
$(document).ready(function(){ 
	$(".questions_3 .accordion_head_3").click(function(event){ 
		$(".questions_3 .accordion_head_3").not(this).each(function(){
			$(this).parent( ".questions_3" ).removeClass("active_3"); 
			$(this).siblings(".accordion_detail_3").slideUp("fast"); 
		}); 
		$(this).parent( ".questions_3" ).toggleClass("active_3");
		$(this).siblings(".accordion_detail_3").slideToggle("fast"); 
	}); 
}); 


/*--------------- countups ---------------*/

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			render(value);
			function updateTimer() {
				value += increment;
				loopCount++;
				render(value);
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}


	$('.count-number').data('countToOptions', {
		formatter: function (value, options) {
	  		return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
		}
  	});

	$('.timer').each(count);  

	function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	}

	$(window).on('resize',function(){
		if ($(window).width() > 991) {
			location.reload();
		}
	});


/*--------------- slider ---------------*/
var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();
//Carousels
function carousels(){
  var carousel = $('.carouselslider'),
      options  = {
        itemsCustom : [
          [0, 1],
          [768, 2],
          [992, 3]
        ],
        navigation  : true
      };
  
  carousel.each(function(){
    var $this = $(this);

    if ($this.data('options')){
      options = $this.data('options');
    }

    $this.owlCarousel(options).addClass('loaded');
    
    $(window).on('resize', function(){
      delay(function(){
        bottomNavigation();
      }, 200);
    });

    function bottomNavigation(){
      if (
        ($this.hasClass('bottom-navigation')) && (!$this.find('.owl-pagination .owl-prev').length)
      ){
        $this.find('.owl-pagination').prepend('<a href="#" class="owl-prev"/>');
        $this.find('.owl-pagination').append('<a href="#" class="owl-next"/>');
        
        $this.find('.owl-next').on('click',function (e){
          e.preventDefault();
          
          $this.trigger('owl.next');
        });
        
        $this.find('.owl-prev').on('click',function (e){
          e.preventDefault();
          
          $this.trigger('owl.prev');
        });
      }
    }
    bottomNavigation();
  });
}
carousels();


}(jQuery));
