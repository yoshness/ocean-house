import 'slick-carousel';

export default function initSliders() {

	let $heroEnTagline = $('#js-hero-tagline-en');
	let $heroJaTagline = $('#js-hero-tagline-ja');

	let time = 2;
  	let $bar = $('.js-hero-progress span'),
    isPause,
    tick,
    percentTime;

    let pointSliderInitialized = false;

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

	function setHeroTagline(index) {
		switch(index) {
			case 1:
				$heroEnTagline.text('LIVE WITH THE FOREST');
				$heroJaTagline.text('杜と住む');
				break;
			case 2:
				$heroEnTagline.text('LIVE WITH THE HOBBY');
				$heroJaTagline.text('趣味と住む');
				break;
			default:
				$heroEnTagline.text('LIVE WITH THE SEA');
				$heroJaTagline.text('海と住む');
				break;
		}

		$heroEnTagline.fadeIn(1000);
		$heroJaTagline.fadeIn(1000);
	}

	$('#js-hero-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
		$heroEnTagline.hide();
		$heroJaTagline.hide();

	    setHeroTagline(nextSlide);
	});

	$('#js-works-slider').slick({
		arrows: false,
		dots: false,
		autoplay: true,
		autoplaySpeed: 3000,
		pauseOnHover: false,
		infinite: true,
		speed: 1500,
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

	$('#js-people-slider').slick({
		mobileFirst: true,
		arrows: false,
		dots: false,
		autoplay: true,
		autoplaySpeed: 3000,
		pauseOnHover: false,
		infinite: true,
		speed: 1500,
		cssEase: 'ease-out',
    	centerMode: true,
  		centerPadding: '20%',
  		responsive: [
	    	{
	            breakpoint: 767,
	            settings: 'unslick'
	    	}
	    ]
	});

	$('#js-flow-slider').slick({
		mobileFirst: true,
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 2000,
		pauseOnHover: false,
		infinite: true,
		speed: 1000,
		cssEase: 'ease-out',
    	centerMode: true,
  		centerPadding: '10%',
  		responsive: [
	    	{
	            breakpoint: 767,
	            settings: 'unslick'
	    	}
	    ]
	});

	function startPointSlider() {
        pointSliderInitialized = true;
        let time = 2;
        let $bar = $('.js-point-progress div'),
        isPause,
        tick,
        percentTime;

        $('#js-point-slider').slick({
            arrows: false,
            dots: false,
            fade: true,
            autoplay: true,
            autoplaySpeed: 10000,
            pauseOnHover: false,
            infinite: true,
            speed: 1000,
            cssEase: 'ease-out',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        centerMode: false,
                    }
                }
            ]
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
                    $('#js-point-slider').slick('slickNext');
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

        function setPointTitle(index) {
            let $pointJaTitle = $('#js-point-title-ja'),
            	$pointDesc = $('.js-point-description'),
            	$pointDesc1 = $('#js-point-description-1'),
            	$pointDesc2 = $('#js-point-description-2'),
            	$pointDesc3 = $('#js-point-description-3'),
            	$pointDesc4 = $('#js-point-description-4');

            $pointDesc.hide();

            switch(index) {
                case 1:
                    $pointJaTitle.text('理想を叶える、自由設計');
                    $pointDesc2.fadeIn(1000);
                    break;
                case 2:
                    $pointJaTitle.text('災害に備えた、耐震設計');
                    $pointDesc3.fadeIn(1000);
                    break;
                case 3:
                    $pointJaTitle.text('良心的な、価格設定');
                    $pointDesc4.fadeIn(1000);
                    break;
                default:
                    $pointJaTitle.text('好きな場所で、家を建てる');
                    $pointDesc1.fadeIn(1000);
                    break;
            }

            $pointJaTitle.fadeIn(1000);
        }

        $('#js-point-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            $('#js-point-title-ja').empty();
            $('#js-point-title-ja').hide();

            setPointTitle(nextSlide);

            $('#js-point-current').text(nextSlide + 1);
        });
    }

    startPointSlider();
}