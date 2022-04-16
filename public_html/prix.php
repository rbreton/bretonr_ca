<!--
 █████                         █████                                                       
░░███                         ░░███                                                        
 ░███████  ████████   ██████  ███████    ██████  ████████   ████████      ██████   ██████  
 ░███░░███░░███░░███ ███░░███░░░███░    ███░░███░░███░░███ ░░███░░███    ███░░███ ░░░░░███ 
 ░███ ░███ ░███ ░░░ ░███████   ░███    ░███ ░███ ░███ ░███  ░███ ░░░    ░███ ░░░   ███████ 
 ░███ ░███ ░███     ░███░░░    ░███ ███░███ ░███ ░███ ░███  ░███        ░███  ███ ███░░███ 
 ████████  █████    ░░██████   ░░█████ ░░██████  ████ █████ █████     ██░░██████ ░░████████
░░░░░░░░  ░░░░░      ░░░░░░     ░░░░░   ░░░░░░  ░░░░ ░░░░░ ░░░░░     ░░  ░░░░░░   ░░░░░░░░
-->
<?php $root='./'; ?>
<!doctype html>

<html lang="fr">
	<?php include ("{$root}tpl/head.php"); ?>
	<body>
		<?php include ("{$root}tpl/header.php"); ?>
		<div class="centerContent content">
			<h1 class="center">Information sur les prix</h1>
			<p>J'offre présentement quelques méthodes de facturation</p>
			<div class="twoCol left">
				<h2>Options de facturation</h2>
				<ul class="dashed tabbed">
					<li>Tarif horaire</li>
					<li>Prix au contrat</li>
					<li>Prix au "bug"</li>
				</ul>
			</div>
			<div class="twoCol right">
				<h2>Modes de paiement acceptés</h2>
				<ul class="dashed tabbed">
					<li>Chèque</li>
					<li>Virement banquaire</li>
					<li>Virement via Wealthsimple Cash app</li>
					<li>Virement via Paypal</li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="endSection"><p>-------</p></div>
			<div>
				<h3>Tarif horaire - <strong>58$</strong> / l'heure</h3>
				<p>Ce tarif est le type de tarification le plus commun.  Du moment que je commence à travailler sur votre projet, l'heure tourne. Je facture aux 15 minutes, donc après 7 minutes de travail la facturation débute.</p>
				<p>Présentement, mon tarif horaire est de <strong>58$</strong> de l'heure.</p>
				<h3>Prix au contrat - Variable</h3>
				<p>Cette tarification est la plus utilisé pour les gros projets.  Lorsque que vous avez une refonte complète de votre site internet, ou bien tout simplement qu'une tarification horaire serait tout simplement démesuré.  </p>
				<h3>Prix au "bug" - <strong>15$</strong> / "bug"</h3>
				<p>De loin la tarification la plus populaire, cette option vous permet de faire une liste de toutes vos petites corrections à apporter et vous êtes facturé aux nombres de modifications apportés.</p>
				<p>Le prix peut varier en fonction de la grosseurs de vos modifications, mais généralement le tarif se situe autour de <strong>15$</strong> par "bug" corrigé.</p>
			</div>
		</div>
		<?php include ("{$root}tpl/footer.php"); ?>
	</body>
</html>