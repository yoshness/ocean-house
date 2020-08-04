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
	<div class="l-contact__content">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__en">CONFIRM</span>
				<span class="section-title__ja">お問い合わせ確認</span>
			</h2>
			<div class="l-contact__content-description">
				入力内容をご確認の上、「送信する」ボタンを押してください。<br>修正がある場合は、「修正する」ボタンを押してください。
			</div>
			<div class="l-contact__content-form">
				<form class="form" action="">
					<ul class="form__items">
						<li class="form__item u-flex">
							<label for="">お名前</label>
							<p>例：オーシャン　太郎</p>
						</li>
						<li class="form__item u-flex">
							<label for="">フリガナ</label>
							<p>例：オーシャン　タロウ</p>
						</li>
						<li class="form__item u-flex">
							<label for="">メールアドレス</label>
							<p>例：info@oceanhouse.jp</p>
						</li>
						<li class="form__item u-flex">
							<label for="">電話番号</label>
							<p>例：03-0000-0000</p>
						</li>
						<li class="form__item u-flex">
							<label for="">郵便番号</label>
							<p>例：000-0000</p>
						</li>
						<li class="form__item u-flex">
							<label for="">住所</label>
							<p>お問い合わせ内容</p>
						</li>
						<li class="form__item u-flex">
							<label for="">お問い合わせ内容</label>
							<p>例：まだ未定なことが多いですが、理想の家を建てられるか一度相談したいです。</p>
						</li>
					</ul>
					<div class="form__submit">
						<input type="submit" value="送信する">
					</div>
					<div class="form__back">
						<a class="link-arrow" href="<?php echo HOME_URL; ?>contact-form">修正する</a>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</main>


<?php
get_footer();