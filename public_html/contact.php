<?php $root='./'; ?>
<!doctype html>

<html lang="fr">
	<?php include ("{$root}tpl/head.php"); ?>
	<body>
		<?php include ("{$root}tpl/header.php"); ?>
		<div id="spacerNav"></div>
		<div class="centerContent">
			<div class="twoCol left">
				<h1>Contact</h1>
				<p>La prise de contact se fait par courriel et ensuite on va prendre rendez-vous téléphonique ou bien par videoconférence.</p>
				<p>Envoyer moi directement dans votre courriel une liste des opérations à accomplir sur votre site web. Cela m'aidera à vous faire une offre de service et ainsi accélérer le processus.</p>
			</div>
			<div class="twoCol right">
				<h2>Example modification</h2>
				<p>Voici un petit exemple de modifcations simples :</p>
				<ul>
					<li>(Page contact) Remplacer : 123 avenue larose > 456 avenue larose::</li>
					<li>(Page accueil) Retirer le bandeau bleu</li>
					<li>(Accueil) Changer la photo du panier de pomme par (poire.jpg)</li>
					<li>(FAQ) Ajouter la question > Comment faire pour vous contactez? :: et la réponse > Toute l'information se retrouve sur notre page contact. ::</li>
				</ul>
			</div>
			<div class="clear endSection"></div>
			<div class="formArea">
				<h2 class="center">Formulaire de contact</h2>
				<form action="#" name="formContact" method="post">
					<div class="twoCol left">
						<label for="fNameF">Prénom</label>
						<input type="text" id="fnameF" name="fnameF" />
						<label for="lNameF">Nom</label>
						<input type="text" id="lnameF" name="lnameF" />
						<label for="cNameF">Nom de votre compagnie</label>
						<input type="text" id="cNameF" name="cNameF" />
						<label for="urlF">URL</label>
						<input type="text" id="urlF" name="urlF" />
					</div>
					<div class="twoCol right">
						<label for="mailF">Courriel</label>
						<input type="text" id="mailF" name="mailF" />
						<label for="limitF">Délais</label>
						<input type="text" id="limitF" name="limitF" />
						<label for="descNeed">Courte description de vos besoins</label>
						<textarea id="descNeed" name="descNeed"></textarea>
					</div>
					<div class="clear"></div>
					<div class="center">
						<input type="submit" value="Envoyer"/>
					</div>
				</form>
			</div>
		</div>
		<?php include ("{$root}tpl/footer.php"); ?>
	</body>
</html>