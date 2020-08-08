import 'slick-carousel';

export default function scrollActivate() {
    const $el = $('.js-scroll-activate'),
          BREAKPOINT_MOBILE = 768,
          IS_ACTIVE = 'is-active',
          IS_SHOWN = 'is-shown',
          IS_COLORED = 'is-colored';

    let pointSliderInitialized = false;

    // fade-in-up on scroll
    $(window).on('load, scroll', () => {
        $el.each((i, e) => {
            let target = e, offset = 0;

            if($(window).width() > BREAKPOINT_MOBILE){
                if($(target).data('offset') != undefined) {
                    offset = $(target).data('offset');
                }
                else {
                    offset = 300;
                }
            }
            else {
                offset = 150;
            }

            let top_of_object = $(target).offset().top + offset;
            let bottom_of_window = $(window).scrollTop() + $(window).height();

            if( bottom_of_window > top_of_object ){
                $(target).addClass(IS_ACTIVE);
                $(target).find('.blur-text').addClass(IS_SHOWN);
                $(target).find('.blur-image').addClass(IS_COLORED);
                $(target).find('.activate-text').addClass(IS_SHOWN);
                $(target).find('.activate-box').addClass(IS_SHOWN);

                if($(target).attr('id') == 'js-point-section' && !pointSliderInitialized) {
                    startPointSlider();
                }
            }
        }); 
    });

    // unless Index or Concept Page, activate on page load
    if(!$('#js-index-page').length && !$('#js-concept-page').length) {
        setTimeout(() => {
            $el.addClass(IS_ACTIVE);
            $el.find('.blur-text').addClass(IS_SHOWN);
            $el.find('.blur-image').addClass(IS_COLORED);
            $el.find('.activate-text').addClass(IS_SHOWN);
            $el.find('.activate-box').addClass(IS_SHOWN);
        }, 100);
    }

    function startPointSlider() {
        pointSliderInitialized = true;

        $('#js-point-slider').slick({
            arrows: false,
            dots: false,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            infinite: true,
            speed: 1500,
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

        function setPointTitle(index) {
            let $pointJaTitle = $('#js-point-title-ja');

            switch(index) {
                case 1:
                    $pointJaTitle.text('理想を叶える、自由設計');
                    break;
                case 2:
                    $pointJaTitle.text('災害に備えた、耐震設計');
                    break;
                case 3:
                    $pointJaTitle.text('良心的な、価格設定');
                    break;
                default:
                    $pointJaTitle.text('好きな場所で、家を建てる');
                    break;
            }

            $pointJaTitle.fadeIn(1000);
        }

        $('#js-point-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            $('#js-point-title-ja').empty();
            $('#js-point-title-ja').hide();

            setPointTitle(nextSlide);
        });
    }
}