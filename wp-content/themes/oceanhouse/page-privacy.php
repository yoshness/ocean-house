<?php
/* 
Template Name: Privacy Policy
*/
get_header();

?>

<main class="l-privacy">
	<div class="banner u-flex">
		<div class="logo">
			<a href="<?php echo HOME_URL; ?>">
				<img class="logo__img" src="<?php echo IMAGE_URL; ?>logo.png">
			</a>
			<a class="logo__scroll js-scroll" href="#js-content">SCROLL</a>
		</div>
		<div class="banner__img" style="background-image: url(<?php echo IMAGE_URL; ?>privacy/banner.jpg);"></div>
	</div>
	<div class="l-privacy__content js-scroll-activate" id="js-content">
		<div class="l-container">
			<h2 class="section-title">
				<span class="section-title__en blur-text js-separate-letters">PRIVACY POLICY</span>
				<span class="section-title__ja blur-text js-separate-letters">プライバシーポリシー</span>
			</h2>
			<div class="activate-text">
				<div class="policy">
					<p>株式会社OCEANHOUSE（以下、「当社」といいます。）は、皆様に当社の商品をご使用いただくことにより、皆様に、より良い居住空間を提供していきたいと考えております。</p>
					<p>そのため、当社では、事業運営上、お客様の個人情報を取り扱わせていただきますが、ご提供いただくお客様の個人情報につき、</p>
					<p>「個人情報保護方針」（以下、「本方針」といいます。）を定め、以下に掲げる「個人情報の取扱い」（以下、「本取扱い」といいます。）に沿って適切に管理・使用することで、当社の社会的責務を実現するよう努めてまいります。
					</p><br><br>
					<p>個人情報保護方針</p>
					<ol>
						<li>
							<span>個人情報の定義</span>
							<p>個人情報とは、当社のお客様に関する情報であり、当該情報に含まれる氏名、生年月日その他の記述等により特定の個人を識別することができるもの（他の情報と容易に照合することができ、それにより特定の個人を識別することができることとなるものを含みます）をいいます。</p>
						</li>
						<li>
							<span>個人情報の取得、利用及び提供</span>
							<p>（１）当社は、公正かつ適法な手段により個人情報を取得します。</p>
							<p>（２）当社は、個人情報の取得にあたっては、利用目的を可能な限り特定するとともに、その利用・提供においては、法令に基づく場合を除きお客様の同意を得た利用目的の範囲内において適切に利用します。</p>
							<p>（３）当社は、お客様の個人情報を取得する場合は、お客様に直接提示する方法又は当社ホームページ等での公表により利用目的をお知らせします。</p>
						</li>
						<li>
							<span>個人情報の管理</span>
							<p>（１）当社は、個人情報の漏えい、滅失、毀損等のリスクを防止するため、適切な措置を講じ、これを維持します。</p>
							<p>（２）当社は、正当な理由がある場合を除き、お客様よりご提供いただいた個人情報を、お客様ご本人の同意なく第三者に提供いたしません。</p>
						</li>
						<li>
							<span>法令の遵守</span>
							<p>当社は、個人情報の取扱いに当たって、個人情報の取扱いに関する法令、国が定める指針その他の規範を遵守します。</p>
						</li>
						<li>
							<span>継続的改善</span>
							<p>当社は本方針を含めて個人情報保護マネジメントシステムを策定及び運用し、また、その継続的な見直しを行ってまいります。</p>
						</li>
						<li>
							<span>基本方針の周知</span>
							<p>当社は、本方針及び本取扱いを当社ホームページで公開いたします。</p>
						</li>
						<li>
							<span>お問合せ先</span>
							<p>株式会社OCEANHOUSE　個人情報問合せ窓口</p>
							<p>〒000-0000　東京都新宿区〇〇</p>
							<p>Email：info@oceanhouse.jp</p>
						</li>
					</ol>
				</div>
				<a class="l-privacy__content-link link-arrow" href="<?php echo HOME_URL; ?>">トップへ戻る</a>
			</div>
		</div>
	</div>
</main>


<?php
get_footer();