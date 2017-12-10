var scroll = new SmoothScroll('a[href*="#"]', {
	// Selectors
	ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
	header: null, // Selector for fixed headers (must be a valid CSS selector)

	// Speed & Easing
	speed: 1000, // Integer. How fast to complete the scroll in milliseconds
	offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
	easing: 'easeInOutCubic', // Easing pattern to use
	customEasing: function (time) {}, // Function. Custom easing pattern

	// Callback API
	before: function () {}, // Callback to run before scroll
	after: function () {} // Callback to run after scroll
});

$(document).ready(function(){
	$('.ir-arriba').click(function(){
		$('body,html').animate({
			scrollTop:'0px'
		}, 300);
	});

	$(window).scroll(function(){
		if($(this).scrollTop()>0){
			$('.ir-arriba').slideDown(300);
		}
		else
		{
			$('.ir-arriba').slideUp(300);	
		}
	});
});
