<?php $currentURL = $_SERVER['PHP_SELF'];?>
		<header id='stickyNav'>
			<div class='centerContent mainNavContener'>
				<div class='logo left'>
					<a href="/">
					<div class='lWrapper'>
						<div class="square large"></div>
				    <div class="square small"></div>
						<p>Remi Breton <br /> <span class="ltextSmall"> Développeur Web<blink class='txtCursor'>_</blink></span></p>
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