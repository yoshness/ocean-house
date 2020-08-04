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
			<a class="logo__scroll" href="#">SCROLL</a>
		</div>
		<div class="banner__img" style="background-image: url(<?php echo IMAGE_URL; ?>contact/banner.jpg);"></div>
	</div>
	<div class="l-contact__content">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__en">CONTACT</span>
				<span class="section-title__ja">お問い合わせ</span>
			</h2>
			<div class="l-contact__content-description">
				オーシャンハウスは東京、神奈川、埼玉、千葉で対応可能です。<br>あなたの理想の暮らしを、お聞かせください。
			</div>
			<div class="l-contact__content-form">
				<form class="form" action="">
					<ul class="form__items">
						<li class="form__item form__item--required u-flex">
							<label for="">お名前</label>
							<input type="text" placeholder="例：オーシャン　太郎">
						</li>
						<li class="form__item form__item--required u-flex">
							<label for="">フリガナ</label>
							<input type="text" placeholder="例：オーシャン　タロウ">
						</li>
						<li class="form__item form__item--required u-flex">
							<label for="">メールアドレス</label>
							<input type="email" placeholder="例：info@oceanhouse.jp">
						</li>
						<li class="form__item u-flex">
							<label for="">電話番号</label>
							<input type="text" placeholder="例：03-0000-0000">
						</li>
						<li class="form__item u-flex">
							<label for="">郵便番号</label>
							<input type="text" placeholder="例：000-0000">
						</li>
						<li class="form__item u-flex">
							<label for="">住所</label>
							<input type="text" placeholder="お問い合わせ内容">
						</li>
						<li class="form__item form__item--required u-flex">
							<label for="">お問い合わせ内容</label>
							<textarea rows="10" placeholder="例：まだ未定なことが多いですが、理想の家を建てられるか一度相談したいです。"></textarea>
						</li>
					</ul>
					<p class="form__privacy">当社<a href="<?php echo HOME_URL; ?>privacy">の個人情報保護方</a>針について、ご同意の上、確認画面へお進みくださいませ。</p>
					<div class="form__checkbox">
						<input type="checkbox" id="privacy-check">
						<label for="privacy-check">同意する</label>
					</div>
					<div class="form__submit">
						<input type="submit" value="確認画面に進む">
					</div>
				</form>
			</div>
		</div>
		
	</div>
</main>


<?php
get_footer();