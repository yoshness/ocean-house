export default function separateLetters() {
	$('.js-separate-letters').each((index, val) => {
		init($(val));
	});

	function init($el) {
		let $div = $el.clone().html('');

		$el.contents().each((i, value) => {
			let $textArray = $(value).text().split('');
			for (let i = 0; i < $textArray.length; i++) {
				let delay = .7 + (i / 20);
				let ifSpace = $textArray[i] == ' ' ? 'width: 5px;' : '';
				
				$(`<span class="blur-text__letter" style="${ifSpace} transition-delay: ${delay}s">`).text($textArray[i]).appendTo($div);
			}
		});

		$el.replaceWith($div);
	}
}