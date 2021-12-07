<?php $root='./'; ?>
<!doctype html>

<html lang="fr">
	<?php include ("{$root}tpl/head.php"); ?>
	<body>
		<?php include ("{$root}tpl/header.php"); ?>
		<div id="spacerNav"></div>
		<div class="centerContent">
			<h1>Contact</h1>
			<p>La prise de contact se fait par courriel et ensuite on va prendre rendez-vous téléphonique ou bien par videoconférence.</p>
			<p>Envoyer moi directement dans votre courriel une liste des opérations à accomplir sur votre site web. Cela m'aidera a vous faire une offre de service et ainsi accélérer le processus.</p>
			<p>Voici un petit exemple de modifcations simples :</p>
			<ul>
				<li>(Page contact) Remplacer : 123 avenue larose :: 456 avenue larose :::</li>
				<li>(Page accueil) Retirer le bandeau bleu</li>
				<li>(Accueil) Changer la photo du panier de pomme par (poire.jpg)</li>
				<li>(FAQ) Ajouter la question : Comment faire pour vous contactez? :: et la réponse : Toute l'information se retrouve sur notre page contact. ::</li>
			</ul>
			<div class="formArea">
				<form action="sendForm.php" name="formContact" method="post">
					<label for="fNameF">Prénom :</label>
					<input type="text" id="fnameF" name="fnameF" />
					<label for="lNameF">Nom :</label>
					<input type="text" id="lnameF" name="lnameF" />
					<label for="cNameF">Nom de votre compagnie :</label>
					<input type="text" id="cNameF" name="cNameF" />
					<label for="urlF">URL :</label>
					<input type="text" id="urlF" name="urlF" />
					<label for="mailF">Courriel :</label>
					<input type="text" id="mailF" name="mailF" />
					<label for="limitF">Délais :</label>
					<input type="text" id="limitF" name="limitF" />
					<label for="descNeedF">Courte description de vos besoins :</label>
					<textarea id="descNeedF" name="descNeedF"></textarea>
				</form>
			</div>
		</div>
		<?php include ("{$root}tpl/footer.php"); ?>
	</body>
</html>