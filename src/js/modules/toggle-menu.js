export default function toggleMenu() {
	const $el = $('#js-toggle-menu'),
		  $header = $('#js-header'),
		  $menu = $('#js-menu'),
		  IS_OPEN = 'is-open',
		  IS_SHOWN = 'is-shown',
		  IS_LOCKED = 'is-locked';

	$el.on('click', () => {
		$('html, body').toggleClass(IS_LOCKED);

		$header.toggleClass(IS_OPEN);
		$el.toggleClass(IS_OPEN);
		$menu.toggleClass(IS_SHOWN);
	});
}