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

if("geolocation" in navigator)
{
	navigator.geolocation.getCurrentPosition(function(position){
		loadWeather(position.coords.latitude+','+position.coords.longitude);
	});
}
else
{
	loadWeather("Peru, IN","");
}

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

	$('#list-tab a').on('click', function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})

	setInterval(loadWeather("Peru, IN",""),10000);
});

function loadWeather(location,woeid)
{
	$.simpleWeather({
		location: location,
		woeid: woeid,
		unit: 'c',
		success: function(weather)
		{
			city = weather.city;
			temp = weather.temp + '&deg;';
			wcode = '<img class="weathericon" src="img/weather/weathericons/'+weather.code+'.svg">';
			wind = '<p>'+weather.wind.speed+'</p><p>'+weather.units.speed+'</p>';
			humidity = weather.humidity + ' %';

			$('.location').text(city);
			$('.temperature').html(temp);
			$('.climate_bg').html(wcode);
			$('.windspeed').html(wind);
			$('.humidity').text(humidity);
		},
		error: function(error)
		{
			$('.error').html('<p>'+error+'</p>');
		}
	});
}






















