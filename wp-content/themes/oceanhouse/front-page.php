<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main class="l-index" id="js-index-page">
	<div class="l-index__top u-flex">
		<div class="logo" id="js-logo">
			<a href="<?php echo HOME_URL; ?>">
				<img class="logo__img" src="<?php echo IMAGE_URL; ?>logo.png">
			</a>
			<a class="logo__scroll" href="#">SCROLL</a>
		</div>
		<div class="hero" id="js-hero">
			<ul class="hero__slider" id="js-hero-slider">
				<li class="hero__slider-item">
					<div style="background-image: url(<?php echo IMAGE_URL; ?>index/hero-1.jpg);"></div>
				</li>
				<li class="hero__slider-item">
					<div style="background-image: url(<?php echo IMAGE_URL; ?>index/hero-2.jpg);"></div>
				</li>
				<li class="hero__slider-item">
					<div style="background-image: url(<?php echo IMAGE_URL; ?>index/hero-3.jpg);"></div>
				</li>
			</ul>
			<h1 class="hero__title" id="js-hero-title">
				<p class="blur-text js-separate-letters">オーシャンハウス。</p><p class="blur-text js-separate-letters">自分らしさの大海原へ</p></h1>
			<div class="hero__tagline" id="js-hero-tagline">
				<p id="js-hero-tagline-en">LIVE WITH THE SEA</p><p id="js-hero-tagline-ja">海と住む</p>
			</div>
			<div class="hero__progress js-slider-progress">
				<span></span>
			</div>
		</div>
	</div>
	<section class="l-index__concept u-flex js-scroll-activate">
		<div class="l-index__concept-image">
			<img class="blur-image" src="<?php echo IMAGE_URL; ?>index/concept.jpg">
		</div>
		<div class="l-index__concept-content">
			<h2 class="section-title">
				<span class="section-title__en blur-text js-separate-letters">CONCEPT</span>
				<span class="section-title__ja blur-text js-separate-letters">好きなところに、住もう。</span>
			</h2>
			<div class="activate-text">
				<p>
					人生で、一番大切なもの。<br>それはきっと、お金じゃない。きっと仕事や地位でもない。
				</p>
				<p>
					それは好きな人と過ごす時間。自分らしく、開放感のある、最高の時間。<br>でも忙しい毎日、そんな時間が限られている。
				</p>
				<p>
					だからこそ、本当に好きな場所に住もう。<br>何ひとつ妥協のない、こだわり抜いた家で暮らそう。<br>オンもオフも充実する、至高の居住性。土地選び、間取り、デザイン、設備<br>全てがオーダーメイド。でも手が届く価格帯。
				</p>
				<a class="l-index__concept-arrow" href="<?php echo HOME_URL; ?>concept"></a>
			</div>
		</div>
	</section>
	<section class="l-index__point u-flex js-scroll-activate" id="js-point-section">
		<div class="l-index__point-image blur-image" id="js-point-slider">
			<img src="<?php echo IMAGE_URL; ?>index/point-1.jpg">
			<img src="<?php echo IMAGE_URL; ?>index/point-2.jpg">
			<img src="<?php echo IMAGE_URL; ?>index/point-3.jpg">
			<img src="<?php echo IMAGE_URL; ?>index/point-4.jpg">
		</div>
		<div class="l-index__point-content">
			<h2 class="section-title">
				<span class="section-title__en blur-text js-separate-letters">POINT</span>
				<span class="section-title__ja blur-text js-separate-letters" id="js-point-title-ja">好きな場所で、家を建てる</span>
			</h2>
			<div class="activate-text">
				<p>
					テキストが入ります、<br>テキストが入ります、テキストが入ります、テキストが入ります、
				</p>
				<p>
					テキストが入ります、テキストが入ります、テキストが入ります、<br>テキストが入ります、テキストが入ります、
				</p>
				<p>
					テキストが入ります、テキストが入ります、<br>テキストが入ります、テキストが入ります、テキストが入ります、<br>テキストが入ります、
				</p>
			</div>
		</div>
	</section>
	<section class="l-index__works js-scroll-activate">
		<h2 class="section-title">
			<span class="section-title__ja blur-text js-separate-letters">好きな場所に、オーダーメイド住宅を</span>
		</h2>
		<p class="l-index__works-description activate-text">
			オーシャンハウスでは、<br class="u-show-sp">建てられる物件の数に限りがあります。<br>土地探しから、理想の住居設計、<br class="u-show-sp">建築までを完全サポート。<br>マイホームは人生を変える大きなお買い物。<br>明るい未来を過ごしてもらいたいからこそ、<br class="u-show-sp">一人ひとりのお客様と真摯に向き合います。
		</p>
		<ul class="l-index__works-list blur-image" id="js-works-slider">
			<li class="l-index__works-item">
				<div style="background-image: url(<?php echo IMAGE_URL; ?>index/works-1.jpg);">
					<h3>海辺の住宅</h3>
					<p>365日、アウトドアを楽しむ</p>
				</div>
			</li>
			<li class="l-index__works-item">
				<div style="background-image: url(<?php echo IMAGE_URL; ?>index/works-2.jpg);">
					<h3>首都圏に別荘を</h3>
					<p>家族と自然に囲まれる非日常</p>
				</div>
			</li>
			<li class="l-index__works-item">
				<div style="background-image: url(<?php echo IMAGE_URL; ?>index/works-3.jpg);">
					<h3>地下付き三階建て</h3>
					<p>理想を叶える、贅沢な空間</p>
				</div>
			</li>
		</ul>
	</section>
	<section class="l-index__people js-scroll-activate">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__ja blur-text js-separate-letters">理想を叶える、スペシャリスト</span>
			</h2>
			<ul class="l-index__people-list blur-image u-flex" id="js-people-slider">
				<li class="l-index__people-item">
					<img src="<?php echo IMAGE_URL; ?>index/people-1.jpg" alt="">
					<div class="l-index__people-overlay">
						<h3>Kaoru Saito</h3>
						<span class="l-index__people-ja">斎藤　薫</span>
						<p class="l-index__people-position">一級建築士　オーシャンハウス専属</p>
						<p class="l-index__people-description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
					</div>
				</li>
				<li class="l-index__people-item">
					<img src="<?php echo IMAGE_URL; ?>index/people-2.jpg" alt="">
					<div class="l-index__people-overlay">
						<h3>Kaoru Saito</h3>
						<span class="l-index__people-ja">斎藤　薫</span>
						<p class="l-index__people-position">一級建築士　オーシャンハウス専属</p>
						<p class="l-index__people-description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
					</div>
				</li>
				<li class="l-index__people-item">
					<img src="<?php echo IMAGE_URL; ?>index/people-3.jpg" alt="">
					<div class="l-index__people-overlay">
						<h3>Kaoru Saito</h3>
						<span class="l-index__people-ja">斎藤　薫</span>
						<p class="l-index__people-position">一級建築士　オーシャンハウス専属</p>
						<p class="l-index__people-description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="l-index__reasons js-scroll-activate">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__ja blur-text js-separate-letters">オーシャンハウスが選ばれる理由</span>
			</h2>
			<ul class="l-index__reasons-list u-flex">
				<li class="l-index__reasons-item">
					<div class="blur-image" style="background-image: url(<?php echo IMAGE_URL; ?>index/reasons-1.jpg);"></div>
					<h3 class="blur-text js-separate-letters">家づくりへの想い</h3>
					<p class="blur-text js-separate-letters">OUR THOUGHTS</p>
				</li>
				<li class="l-index__reasons-item">
					<div class="blur-image" style="background-image: url(<?php echo IMAGE_URL; ?>index/reasons-2.jpg);"></div>
					<h3 class="blur-text js-separate-letters">オーダーメイドのこだわり</h3>
					<p class="blur-text js-separate-letters">ORDER MADE</p>
				</li>
				<li class="l-index__reasons-item">
					<div class="blur-image" style="background-image: url(<?php echo IMAGE_URL; ?>index/reasons-3.jpg);"></div>
					<h3 class="blur-text js-separate-letters">技術力と環境性能</h3>
					<p class="blur-text js-separate-letters">STRENGTH</p>
				</li>
				<li class="l-index__reasons-item">
					<div class="blur-image" style="background-image: url(<?php echo IMAGE_URL; ?>index/reasons-4.jpg);"></div>
					<h3 class="blur-text js-separate-letters">安心のアフターサポート</h3>
					<p class="blur-text js-separate-letters">AFTER SUPPORT</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="l-index__prefooter">
		<div class="l-container">
			<?php include( locate_template( 'template-parts/prefooter.php', false, false ) ); ?>
		</div>
	</section>
</main>

<?php
get_footer();