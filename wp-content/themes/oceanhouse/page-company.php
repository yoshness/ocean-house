<?php
/* 
Template Name: Company
*/
get_header();

?>

<main class="l-company">
	<div class="banner u-flex">
		<div class="logo">
			<a href="<?php echo HOME_URL; ?>">
				<img class="logo__img" src="<?php echo IMAGE_URL; ?>logo.png">
			</a>
			<a class="logo__scroll" href="#">SCROLL</a>
		</div>
		<div class="banner__img" style="background-image: url(<?php echo IMAGE_URL; ?>company/banner.jpg);"></div>
	</div>
	<div class="l-company__content js-scroll-activate">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__en blur-text js-separate-letters">COMPANY</span>
				<span class="section-title__ja blur-text js-separate-letters">会社概要</span>
			</h2>
			<div class="activate-text">
				<ul class="l-company__content-list company">
					<li class="u-flex">
						<label class="company__label">商号</label>
						<p>株式会社OCEANHOUSE</p>
					</li>
					<li class="u-flex">
						<label class="company__label">設立</label>
						<p>2020年7月1日</p>
					</li>
					<li class="u-flex">
						<label class="company__label">所在地</label>
						<p>〒000-0000  <br class="u-show-sp">東京都新宿区〇〇</p>
					</li>
					<li class="u-flex">
						<label class="company__label">代表者</label>
						<p>代表取締役社長　<br class="u-show-sp">鳥海 林太郎</p>
					</li>
					<li class="u-flex">
						<label class="company__label">事業内容</label>
						<div class="company__sub">
							<ul>
								<li>建設業許可番号:<br class="u-show-sp">国土交通大臣許可(般-29)<br class="u-show-sp">第15997号</li>
								<li>建築士事務所登録:<br class="u-show-sp">東京都知事登録<br class="u-show-sp">第53354号　他各県</li>
								<li>宅地建物取引業:<br class="u-show-sp">東京都知事(1)<br class="u-show-sp">第99490号</li>
							</ul>
						</div class="company__sub">
					</li>
					<li class="u-flex">
						<label class="company__label">取引金融機関</label>
						<p>三井住友銀行<br class="u-show-sp">/みずほ銀行/<br class="u-show-sp">三菱UFJ銀行</p>
					</li>
				</ul>
				<a class="l-company__content-link link-arrow" href="<?php echo HOME_URL; ?>">トップへ戻る</a>
			</div>
		</div>
		
	</div>
</main>


<?php
get_footer();