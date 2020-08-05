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
				<dl class="l-company__content-list company u-flex">
					<dt>商号</dt>
					<dd>株式会社OCEANHOUSE</dd>
					<dt>設立</dt>
					<dd>2020年7月1日</dd>
					<dt>所在地</dt>
					<dd>〒000-0000  東京都新宿区〇〇</dd>
					<dt>代表者</dt>
					<dd>代表取締役社長　鳥海 林太郎</dd>
					<dt class="company__item--list">事業内容</dt>
					<dd class="company__item--list">
						<ul>
							<li>建設業許可番号:国土交通大臣許可(般-29)第15997号</li>
							<li>建築士事務所登録:東京都知事登録第53354号　他各県</li>
							<li>宅地建物取引業:東京都知事(1)第99490号</li>
						</ul>
					</dd>
					<dt>取引金融機関</dt>
					<dd>三井住友銀行/みずほ銀行/三菱UFJ銀行</dd>
				</dl>
				<a class="l-company__content-link link-arrow" href="<?php echo HOME_URL; ?>">トップへ戻る</a>
			</div>
		</div>
		
	</div>
</main>


<?php
get_footer();