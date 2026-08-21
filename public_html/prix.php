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
<?php $title='Prix - bretonr.ca'; ?>
<?php $description="Taux horaire, prix au contrat, etc. Vous trouverez certainement l'option de facturation qui conviendra le mieux à vos besoins."; ?>
<?php $taux="70"; ?>

<!doctype html>
<html lang="fr-FR">
	<head>
	<?php include ("{$root}inc/tpl/head.tpl.php"); ?>
	</head>
	<body>
		<?php include ("{$root}inc/tpl/header.tpl.php"); ?>
		<div class="centerContent content">
			<h1 class="center">Tarification Flexible pour Vos Projets</h1>
			<p>Je m'engage à vous offrir des solutions de facturation qui correspondent parfaitement à vos besoins. Que vous ayez un petit projet ponctuel ou une initiative de grande envergure, je suis là pour vous proposer une approche tarifaire transparente et équitable. Les modalités de paiement sont également pensées pour votre confort.</p>
			<div class="twoCol left">
				<h2 class="paddedSmall">Options de facturation</h2>
				<ul class="dashed tabbed">
					<li><strong>Tarif Horaire</strong> : <?php echo $taux;?>$ de l'heure - Idéal pour les projets ponctuels et flexibles.</li>
					<li><strong>Prix au Contrat</strong> (Forfait) : Tarif personnalisé en fonction de la portée et de la complexité du projet - Parfait pour les projets de grande envergure avec un budget défini.</li>
				</ul>
			</div>
			<div class="twoCol right">
				<h2 class="paddedSmall">Modes de paiement acceptés</h2>
				<ul class="dashed tabbed">
					<li>Virement Interac<sup>MD</sup></li>
					<li>Wealthsimple E-Transfers</li>
					<li>Chèque</li>
					<li>(D'autres modalités peuvent être envisagées sur demande)</li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="endSection"><span class="material-symbols-rounded">paid</span></div>
			<div>
				<h2 class="paddedSmall">Tarif horaire - <strong><?php echo $taux;?>$</strong> / l'heure</h2>
				<p>Le tarif horaire est une option flexible et transparente, idéale pour les projets de taille modeste ou les tâches ponctuelles. Vous payez uniquement pour le temps que je consacre à votre projet, avec une facturation précise aux 15 minutes. Cette approche vous offre un contrôle total sur les coûts et est parfaite pour les projets évolutifs où les besoins peuvent varier.</p>
				<p>Mon tarif horaire actuel est de <?php echo $taux;?>$. Ce tarif reflète la complexité et l'expertise que j'apporte à chaque projet. Des frais supplémentaires pourraient s'appliquer en fonction des exigences spécifiques de votre projet.</p>
				<p>Vous avez des questions sur le <strong>tarif horaire</strong> ou souhaitez discuter de la portée de votre projet ? N'hésitez pas à me <strong><a href="contact.php">contacter</a></strong> pour une évaluation personnalisée.</p>
				<h2 class="notPadded">Prix au contrat - Variable</h2>
				<h3>Solutions Sur Mesure pour les Grands Projets</h3>
				<p>Pour les projets de plus grande envergure, comme la refonte complète de votre site web ou un travail soutenu sur une période prolongée, un prix au contrat peut être une option plus avantageuse. Nous définissons ensemble un prix fixe pour l'ensemble du projet, vous offrant ainsi une prévisibilité budgétaire totale.</p>
				<p class="paddedSmall">Exemples de projets au contrat :</p>
				<ul class="dashed tabbed padded">
			    <li>Refonte complète de site web</li>
			    <li>Développement d'une fonctionnalité spécifique</li>
			  </ul>
			  <p>Intéressé par un <strong>tarif au contrat</strong> pour votre projet ? <strong><a href="contact.php">Contactez-moi</a></strong> pour discuter de vos besoins et obtenir une proposition détaillée.</p>
			</div>
		</div>
		<?php include ("{$root}inc/tpl/footer.tpl.php"); ?>
	</body>
</html>