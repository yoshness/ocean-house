<?php
/* 
Template Name: Concept
*/
get_header();

?>

<main class="l-concept" id="js-concept-page">
	<div class="banner u-flex">
		<div class="logo">
			<a href="<?php echo HOME_URL; ?>">
				<img class="logo__img" src="<?php echo IMAGE_URL; ?>logo.png">
			</a>
			<a class="logo__scroll js-scroll" href="#js-intro-section">SCROLL</a>
		</div>
		<div class="banner__img" style="background-image: url(<?php echo IMAGE_URL; ?>concept/banner.jpg);"></div>
	</div>
	<section class="l-concept__intro js-scroll-activate" id="js-intro-section">
		<div class="l-concept__intro-text">
			<h2 class="section-title">
				<span class="section-title__ja blur-text js-separate-letters">オーシャンハウスとは</span>
			</h2>
			<p class="activate-text">
				昨今の頃なショックによって、私たちの生活感は大きく変化しました。​<br>自分らしく生きる。そのために好きなところに住む。​<br>これからは、そんな「当たり前の幸せ」を叶える時代だと思います。​<br><br>私たちは一つ一つのプロジェクトに徹底してこだわります。​<br>立地、デザイン、設計、設備すべてにおいて、​<br>プロフェッショナルチームが「住まう人本位」の家づくりを提供します。​
			</p>
		</div>
		<img src="<?php echo IMAGE_URL; ?>concept/intro.jpg" alt="">
	</section>
	<section class="l-concept__thoughts u-flex js-scroll-activate" id="our-thoughts-section">
		<div class="l-concept__thoughts-content activate-box">
			<h2 class="section-title">
				<span class="section-title__en blur-text js-separate-letters">OUR THOUGHTS</span>
				<span class="section-title__ja blur-text js-separate-letters">家づくりへの想い</span>
			</h2>
			<div class="activate-text">
				<p>
					<strong>その１.「立地」へのこだわり</strong><br>
					快適に暮らせる場所、趣味を楽しむスペースを確保できる場所。​<br>立地選びが、住んだ後の生活環境を左右します。​<br>だからこそ、候補地の調査や提案にこだわります。
				</p>
				<p>
					<strong>その２.「住まう人本位」の家づくり</strong><br>
					まずは理想の住宅についてお客様と真摯に向き合い、ヒアリングします。​<br>完全オーダーメイドだからこそ、理想を叶える手段が見つかるのです。
				</p>
				<p>
					<strong>その３.「災害に強い」設計と構造</strong><br>
					災害大国の日本でも、安心して暮らせる住宅が何よりも大切です。​<br>建築のスペシャリストが技術力を駆使し、建築を手掛けます。
				</p>
			</div>
		</div>
		<div class="l-concept__thoughts-image">
			<img src="<?php echo IMAGE_URL; ?>concept/thoughts.jpg">
		</div>
	</section>
	<section class="l-concept__order u-flex js-scroll-activate" id="order-made-section">
		<div class="l-concept__order-content activate-box">
			<h2 class="section-title">
				<span class="section-title__en blur-text js-separate-letters">ORDER MADE</span>
				<span class="section-title__ja blur-text js-separate-letters">オーダーメイドのこだわり</span>
			</h2>
			<div class="activate-text">
				<p>
					<strong>オーシャンハウスなら理想が叶う</strong>
				</p>
				<p >
					庭が広い家が良かった、海辺に住みたかった、​<br>ガレージで趣味に没頭できる生活が夢だった・・・​<br>住んだ後に後悔することのある妥協点。
				</p>
				<p>
					オーシャンハウスの独自の体制と価格設定は、​<br>予算の中でより多くの理想を叶えることができます。
				</p>
				<p>​
					土地探しからデザイン、設計、設備まで、​<br>お客様の未来の生活空間を責任持って手掛けます。
				</p>
				<p>
					そのため、年間に限られた数しか建てられません。​<br>それでもオーシャンハウスはオーダーメイドにこだわります。
				</p>
			</div>
		</div>
		<div class="l-concept__order-image">
			<img src="<?php echo IMAGE_URL; ?>concept/order.jpg">
		</div>
	</section>
	<section class="l-concept__specs js-scroll-activate" id="strength-section">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__ja blur-text js-separate-letters">技術と環境性能</span>
			</h2>
			<p class="activate-text">
				ずっと住み続けたい、そんな家をつくる<br>
				建てた後に、嫌な思いはしたくない — その気持ちは皆、共通です。<br>
				だからこそ、オーシャンハウスが出がける物件は、<br>
				高いデザイン性だけでなく、耐震強度・環境対応・高齢化社会への対応を考慮します。<br>
			</p>
			<ul class="l-concept__specs-list u-flex">
				<li>
					<div class="spec-block">
						<img src="<?php echo IMAGE_URL; ?>concept/specs-1.jpg">
						<span>安全の耐震設計</span>
					</div>
				</li>
				<li>
					<div class="spec-block">
						<img src="<?php echo IMAGE_URL; ?>concept/specs-2.jpg">
						<span>高い環境性能</span>
					</div>
				</li>
				<li>
					<div class="spec-block">
						<img src="<?php echo IMAGE_URL; ?>concept/specs-3.jpg">
						<span>計画的な省エネ性</span>
					</div>
				</li>
				<li>
					<div class="spec-block">
						<img src="<?php echo IMAGE_URL; ?>concept/specs-4.jpg">
						<span>高い断熱性</span>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="l-concept__support js-scroll-activate" id="after-support-section">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__ja blur-text js-separate-letters">安心のアフターサポート</span>
			</h2>
			<p class="activate-text">
				当社アフターサービス基準に則り、最大30年間にわたり住宅品質を保証しています。<br>お客様が保証期間の延長をご希望される場合、延長保証点検および、<br>有料メンテナンス工事を実施することで、基礎、躯体などの長期保証部位について、<br>さらに10年間延長し、お引き渡しより最大30年保証いたします。
			</p>
		</div>
		<img src="<?php echo IMAGE_URL; ?>concept/support.jpg">
	</section>
	<section class="l-concept__flow js-scroll-activate">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__ja blur-text js-separate-letters">建築の流れ</span>
			</h2>
			<ul class="flow__list u-flex js-scroll-activate" id="js-flow-slider">
				<li class="flow__item">
					<div class="flow-block">
						<span class="flow-block__step">STEP 1</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-1.png">
						<p class="flow-block__description">ご相談・問い合わせ</p>
					</div>
				</li>
				<li class="flow__item">
					<div class="flow-block">
						<span class="flow-block__step">STEP 2</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-2.png">
						<p class="flow-block__description">土地探し（お持ちでない方）</p>
					</div>
				</li>
				<li class="flow__item">
					<div class="flow-block">
						<span class="flow-block__step">STEP 3</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-3.png">
						<p class="flow-block__description">計画プラン・見積もり作成</p>
					</div>
				</li>
				<li class="flow__item">
					<div class="flow-block">
						<span class="flow-block__step">STEP 4</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-4.png">
						<p class="flow-block__description">設計・土地売買契約</p>
					</div>
				</li>
				<li class="flow__item">
					<div class="flow-block">
						<span class="flow-block__step">STEP 5</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-5.png">
						<p class="flow-block__description">工事請負契約</p>
					</div>
				</li>
				<li class="flow__item">
					<div class="flow-block">
						<span class="flow-block__step">STEP 6</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-6.png">
						<p class="flow-block__description">着工・各種検査</p>
					</div>
					<div class="flow__item-arrow"></div>
				</li>
				<li class="flow__item">
					<div class="flow-block">
						<span class="flow-block__step">STEP 7  竣工・引き渡し</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-7.png">
						<p class="flow-block__description">あなたらしい、理想の住居での新たな人生の始まりです。<br>“オーシャンハウス、自分らしさの大海原へ。”</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="l-concept__prefooter">
		<div class="l-container">
			<?php include( locate_template( 'template-parts/prefooter.php', false, false ) ); ?>
		</div>
	</section>
</main>


<?php
get_footer();