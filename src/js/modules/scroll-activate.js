export default function scrollActivate() {
    const $el = $('.js-scroll-activate'),
          BREAKPOINT_MOBILE = 768,
          IS_ACTIVE = 'is-active',
          IS_SHOWN = 'is-shown',
          IS_COLORED = 'is-colored';

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
}