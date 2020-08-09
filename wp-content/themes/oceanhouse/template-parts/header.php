<header class="header <?php echo is_front_page() ? 'header--frontpage' : 'header--subpage'; ?>" id="js-header">
	<ul class="header__list u-flex">
		<li>
			<a href="<?php echo HOME_URL; ?>concept">CONCEPT</a>
		</li>
		<li class="header__item--model">
			<a href="#js-point-section" class="js-scroll">MODEL</a>
			<a href="<?php echo HOME_URL; ?>#js-point-section">MODEL</a>
		</li>
		<li>
			<a href="<?php echo HOME_URL; ?>company">COMPANY</a>
		</li>
		<li>
			<a href="<?php echo HOME_URL; ?>contact-form">CONTACT</a>
		</li>
	</ul>
	<div class="header__logo u-show-sp">
		<a href="<?php echo HOME_URL; ?>">
			<img src="<?php echo IMAGE_URL; ?>logo.png">
		</a>
	</div>
	<div class="header__hamburger" id="js-toggle-menu">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
</header>