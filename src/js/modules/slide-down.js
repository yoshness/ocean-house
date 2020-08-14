export default function slideDown() {
	const $target = $('.js-slide-down');

	if($(window).width() < 768) {
		$target.on('click', (e) => {
			let $el = $(e.currentTarget);

			$el.css('height', $el.data('height'));
			$el.removeClass('is-hidden');
		});

		$.each($target, (index, el) => {
			let elHeight = $(el).outerHeight();

			$(el).attr('data-height', elHeight); 
			$(el).addClass('is-hidden');
		});
	}
}