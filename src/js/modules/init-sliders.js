import 'slick-carousel';

export default function initSliders() {

	let time = 2;
  	let $bar = $('.js-slider-progress span'),
    isPause,
    tick,
    percentTime;

    $('#js-hero-slider').slick({
		arrows: false,
		dots: false,
		fade: true,
		autoplay: true,
		autoplaySpeed: 10000,
		pauseOnHover: false,
		infinite: true,
		speed: 1000,
		cssEase: 'ease-out',
	});

    function startProgressbar() {
		resetProgressbar();
	    percentTime = 0;
	    isPause = false;
	    tick = setInterval(interval, 30);
	}
	function interval() {
	    if (isPause === false) {
	    	percentTime += 1 / (time + 0.1);
	    	$bar.css({
	    		width: percentTime + '%'
	    	});
	    	if (percentTime >= 100) {
	    		$('#js-hero-slider').slick('slickNext');
	    		startProgressbar();
	    	}
	     	
	    }
	}
	function resetProgressbar() {
	    $bar.css({
	    	width: 0 + '%'
	    });
	    clearTimeout(tick);
	}
	startProgressbar();

	$('#js-works-slider').slick({
		arrows: false,
		dots: false,
		autoplay: true,
		autoplaySpeed: 2000,
		pauseOnHover: false,
		infinite: true,
		speed: 1000,
		cssEase: 'ease-out',
    	centerMode: true,
  		centerPadding: '20%',
  		responsive: [
	    	{
	            breakpoint: 768,
	            settings: {
	            	centerMode: false,
	            }
	    	}
	    ]
	});
}