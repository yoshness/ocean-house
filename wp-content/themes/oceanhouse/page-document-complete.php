<?php
/* 
Template Name: Document Complete
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
		<div class="banner__img" style="background-image: url(<?php echo IMAGE_URL; ?>document/banner.jpg);"></div>
	</div>
	<div class="l-contact__content js-scroll-activate">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__en blur-text js-separate-letters">COMPLETE</span>
				<span class="section-title__ja blur-text js-separate-letters">資料請求完了</span>
			</h2>
			<div class="activate-text">
				<div class="l-contact__content-description">
					お問い合わせいただき、誠にありがとうございます。<br>1週間以内に弊社よりご指定の住所へお送りいたしますので、<br>
					今しばらくお待ちくださいませ。
				</div>
				<div class="l-contact__content-form">
					<a class="link-arrow" href="<?php echo HOME_URL; ?>">トップへ戻る</a>
				</div>
			</div>
		</div>
		
	</div>
</main>


<?php
get_footer();