<?php $currentURL = $_SERVER['PHP_SELF'];?>
		<header id='stickyNav'>
			<div class='centerContent mainNavContener'>
				<div class='logo'>
					<a href="/">
						<div class="lWrapper left">
							<div class='lDarkWhite left'></div>
							<div class='lDarkBlue left'></div>
							<div class='lLightBlue clear'></div>
						</div>
						<div class='lSignature left'>
							<p class="lTitle">Remi Breton<blink class='txtCursor'>_</blink></p>
							<p class="lSubTitle">Développeur Web</p>
						</div>
					</a>
				</div>
				<input class="statusChecker" type="checkbox" />
				<div class="hamLine">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
				<nav class="mainNav right">
					<ul class="dashed">
						<li <?php if ($_SERVER['PHP_SELF'] == '/index.php' || $_SERVER['PHP_SELF'] == '/') echo 'class="active"'; ?>><a href="<?php echo $root; ?>">Accueil</a></li>
		        <li <?php if ($_SERVER['PHP_SELF'] == '/services.php') echo 'class="active"'; ?>><a href="<?php echo $root; ?>services.php">Services</a></li>
		        <li <?php if ($_SERVER['PHP_SELF'] == '/prix.php') echo 'class="active"'; ?>><a href="<?php echo $root; ?>prix.php">Prix</a></li>
		        <li <?php if ($_SERVER['PHP_SELF'] == '/aPropos.php') echo 'class="active"'; ?>><a href="<?php echo $root; ?>aPropos.php">À propos</a></li>
		        <li <?php if ($_SERVER['PHP_SELF'] == '/contact.php') echo 'class="active"'; ?>><a href="<?php echo $root; ?>contact.php">Contact</a></li>
		        <div class="clear"></div>
					</ul>
				</nav>
				<div class='clear'></div>
			</div>
		</header>
		<div id="spacerNav"></div>