<?php
/* 
Template Name: Concept
*/
get_header();

?>

<main class="l-concept">
	<div class="banner u-flex">
		<div class="logo">
			<a href="<?php echo HOME_URL; ?>">
				<img class="logo__img" src="<?php echo IMAGE_URL; ?>logo.png">
			</a>
			<a class="logo__scroll" href="#">SCROLL</a>
		</div>
		<div class="banner__img" style="background-image: url(<?php echo IMAGE_URL; ?>concept/banner.jpg);"></div>
	</div>
	<section class="l-concept__intro">
		<div class="l-concept__intro-text">
			<h2 class="section-title">
				<span class="section-title__ja">オーシャンハウスとは</span>
			</h2>
			<p>
				テキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキスト
			</p>
		</div>
		<img src="<?php echo IMAGE_URL; ?>concept/intro.jpg" alt="">
	</section>
	<section class="l-concept__thoughts u-flex">
		<div class="l-concept__thoughts-content">
			<h2 class="section-title">
				<span class="section-title__en">OUR THOUGHTS</span>
				<span class="section-title__ja">家づくりへの想い</span>
			</h2>
			<p>
				<strong>その壱. テキストテキストテキスト</strong><br>
				テキストが入ります、テキストが入ります、テキストが入ります、
			</p>
			<p>
				<strong>その弐. テキストテキストテキストテキスト</strong><br>
				テキストが入ります、テキストが入ります、テキストが入ります、
			</p>
			<p>
				<strong>その参. テキストテキストテキスト</strong><br>
				テキストが入ります、テキストが入ります、テキストが入ります、
			</p>
		</div>
		<div class="l-concept__thoughts-image">
			<img src="<?php echo IMAGE_URL; ?>concept/thoughts.jpg">
		</div>
	</section>
	<section class="l-concept__order u-flex">
		<div class="l-concept__order-content">
			<h2 class="section-title">
				<span class="section-title__en">ORDER MADE</span>
				<span class="section-title__ja">オーダーメイドのこだわり</span>
			</h2>
			<p>
				<strong>実現に導く、叶えたい理想の物件を</strong>
			</p>
			<p>
				テキストが入ります、テキストが入ります、テキストが入ります、<br>テキストが入ります、テキストが入ります、テキストが入ります、<br>テキストが入ります、テキストが入ります、<br>テキストが入ります、テキストが入ります、テキストが入ります、<br>テキストが入ります、テキストが入ります、テキストが入ります、
			</p>
		</div>
		<div class="l-concept__order-image">
			<img src="<?php echo IMAGE_URL; ?>concept/order.jpg">
		</div>
	</section>
	<section class="l-concept__specs">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__ja">技術と環境性能</span>
			</h2>
			<p>
				ずっと住み続けたい、そんな家をつくる<br>
				建てた後に、嫌な思いはしたくない — その気持ちは皆、共通です。<br>
				だからこそ、オーシャンハウスが出がける物件は、<br>
				高いデザイン性だけでなく、耐震強度・環境対応・高齢化社会への対応を考慮します。<br>
			</p>
			<ul class="l-concent__specs-list u-flex">
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
	<section class="l-concept__support">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__ja">安心のアフターサポート</span>
			</h2>
			<p>
				当社アフターサービス基準に則り、最大30年間にわたり住宅品質を保証しています。<br>お客様が保証期間の延長をご希望される場合、延長保証点検および、<br>有料メンテナンス工事を実施することで、基礎、躯体などの長期保証部位について、<br>さらに10年間延長し、お引き渡しより最大30年保証いたします。
			</p>
			<img src="<?php echo IMAGE_URL; ?>concept/support.jpg">
		</div>
	</section>
	<section class="l-concept__flow">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__ja">建築の流れ</span>
			</h2>
			<ul class="l-concept__flow-list u-flex">
				<li>
					<div class="flow-block">
						<span class="flow-block__step">STEP 1</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-1.png">
						<p class="flow-block__description">ご相談・問い合わせ</p>
					</div>
				</li>
				<li>
					<div class="flow-block">
						<span class="flow-block__step">STEP 2</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-2.png">
						<p class="flow-block__description">土地探し（お持ちでない方）</p>
					</div>
				</li>
				<li>
					<div class="flow-block">
						<span class="flow-block__step">STEP 3</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-3.png">
						<p class="flow-block__description">計画プラン・見積もり作成</p>
					</div>
				</li>
				<li>
					<div class="flow-block">
						<span class="flow-block__step">STEP 4</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-4.png">
						<p class="flow-block__description">設計・土地売買契約</p>
					</div>
				</li>
				<li>
					<div class="flow-block">
						<span class="flow-block__step">STEP 5</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-5.png">
						<p class="flow-block__description">工事請負契約</p>
					</div>
				</li>
				<li>
					<div class="flow-block">
						<span class="flow-block__step">STEP 6</span>
						<img class="flow-block__icon" src="<?php echo IMAGE_URL; ?>concept/step-6.png">
						<p class="flow-block__description">着工・各種検査</p>
					</div>
				</li>
				<li>
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