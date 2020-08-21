<?php
/* 
Template Name: Contact Form
*/
get_header();

?>

<main class="l-contact">
	<div class="banner u-flex">
		<div class="logo">
			<a href="<?php echo HOME_URL; ?>">
				<img class="logo__img" src="<?php echo IMAGE_URL; ?>logo.png">
			</a>
			<a class="logo__scroll js-scroll" href="#js-content">SCROLL</a>
		</div>
		<div class="banner__img" style="background-image: url(<?php echo IMAGE_URL; ?>contact/banner.jpg);"></div>
	</div>
	<div class="l-contact__content js-scroll-activate" id="js-content">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__en blur-text js-separate-letters">CONTACT</span>
				<span class="section-title__ja blur-text js-separate-letters">お問い合わせ</span>
			</h2>
			<div class="activate-text">
				<div class="l-contact__content-description">
					オーシャンハウスは<br class="u-show-sp">東京、神奈川、埼玉、千葉で対応可能です。<br>あなたの理想の暮らしを、お聞かせください。
				</div>
				<div class="l-contact__content-form">
					<div class="form">
						<?php echo do_shortcode('[mwform_formkey key="25"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


<?php
get_footer();