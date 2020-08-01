import 'slick-carousel';

export default function initSliders() {
	$('#js-works-slider').slick({
		arrows: false,
		dots: false,
		autoplay: true,
		autoplaySpeed: 2000,
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