export default function heroAnimation() {
	const IS_SHOWN = 'is-shown',
		  $logoWrapper = $('#js-logo'),
	      $heroWrapper = $('#js-hero'),
	      $heroTagline = $('#js-hero-tagline');

	$(window).on('load', () => {
	    $logoWrapper.addClass(IS_SHOWN).delay(500).queue((next) => {
	        $heroWrapper.addClass(IS_SHOWN).delay(0).queue((next) => {
	            $('#js-hero-title').find('.blur-text').addClass(IS_SHOWN).delay(700).queue((next) => {
	                $heroTagline.addClass(IS_SHOWN).delay(1000).queue((next) => {
	                	$('.js-hero-progress').addClass(IS_SHOWN);
	                });
	            });
	        });
	    });
	});
}