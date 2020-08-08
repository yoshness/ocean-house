<?php
/* 
Template Name: Contact Confirm
*/
get_header();

?>

<main class="l-contact">
	<div class="banner u-flex">
		<div class="logo">
			<a href="<?php echo HOME_URL; ?>">
				<img class="logo__img" src="<?php echo IMAGE_URL; ?>logo.png">
			</a>
			<a class="logo__scroll" href="#">SCROLL</a>
		</div>
		<div class="banner__img" style="background-image: url(<?php echo IMAGE_URL; ?>contact/banner.jpg);"></div>
	</div>
	<div class="l-contact__content js-scroll-activate">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__en blur-text js-separate-letters">CONFIRM</span>
				<span class="section-title__ja blur-text js-separate-letters">お問い合わせ確認</span>
			</h2>
			<div class="activate-text">
				<div class="l-contact__content-description">
					入力内容をご確認の上、<br class="u-show-sp">「送信する」ボタンを押してください。<br>修正がある場合は、「修正する」ボタンを押してください。
				</div>
				<div class="l-contact__content-form">
					<div class="form">
						<?php echo do_shortcode('[mwform_formkey key="20"]'); ?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</main>


<?php
get_footer();