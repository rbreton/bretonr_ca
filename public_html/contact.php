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
<?php $title='Contact - bretonr.ca'; ?>
<?php $description="La manière la plus simple de me contacter est d'utiliser le formulaire pour me faire parvenir une liste de vos besoins et ainsi accélérer le processus."; ?>
<?php
// Function to test if the input is safe
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// define variables and set to empty values
$messErr = array("fnameF"=>"", "lnameF"=>"", "cNameF"=>"", "urlF"=>"", "mailF"=>"", "limitF"=>"", "descNeedF"=>"");
$dataForm = array("fnameF"=>"", "lnameF"=>"", "cNameF"=>"", "urlF"=>"", "mailF"=>"", "limitF"=>"", "descNeedF"=>"");
$labelFormText = array("fnameF"=>"letters", "lnameF"=>"letters", "cNameF"=>"letters", "urlF"=>"urls", "mailF"=>"mails", "limitF"=>"text", "descNeedF"=>"text");
$statForm = null;
if(!empty($_POST)) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$statForm = true;
		// Check input for all the data collected
		foreach ($labelFormText as $key => $value) {
			if (empty($_POST[$key])) {
				$messErr[$key] = "Ce champ est obligatoire!";
				$statForm = false;
			}else{
				$dataForm[$key] = test_input($_POST[$key]);
				switch ($value) {
					case "letters":
						// check if name only contains letters and whitespace
						if (!preg_match("/^[a-zA-Z-' ]*$/",$dataForm[$key])) {
							$messErr[$key] = "Seulement des lettres et des espaces sont permis!";
							$statForm = false;
						}
					break;
					case "urls":
						// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
						if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$dataForm[$key])) {
							$messErr[$key] = "Votre URL est invalide!";
							$statForm = false;
						}
					break;
					case "mails":
						// check if e-mail address is well-formed
						if (!filter_var($dataForm[$key], FILTER_VALIDATE_EMAIL)) {
							$messErr[$key] = "Votre courriel est invalide!";
							$statForm = false;
						}
					break;
					case "text":
						// check if the text is well-formed
					break;
					default:
					echo "Wow you just find an error! Congrats! :P";
				}
			}
		}
		if ($statForm == true) {
			$name = $dataForm["fnameF"] . " " . $dataForm["lnameF"];
			$email = $dataForm["mailF"];
			$subject = $dataForm["cNameF"];
			$content = "Nom : " . $dataForm["fnameF"] . " " . $dataForm["lnameF"] . "<br />Email : " . $dataForm["mailF"] . "<br />Compagnie : " . $dataForm["cNameF"] . "<br />URL : " . $dataForm["urlF"] . "<br />Delais : " . $dataForm["limitF"] . "<br />" . $dataForm["descNeedF"];

			$toEmail = "request@bretonr.ca";
			$mailHeaders = 'From: bretonr.ca <request@bretonr.ca>' . "\r\n";
			$mailHeaders .='Reply-To: '. $email . "\r\n";
			$mailHeaders .='X-Mailer: PHP/' . phpversion();
			$mailHeaders .= "MIME-Version: 1.0\r\n";
			$mailHeaders .= "Content-type: text/html; charset=iso-8859-1\r\n";
			// Send the email
			if(mail($toEmail, $subject, $content, $mailHeaders)) {
				$statForm = true;
				$message = "Votre message à bien été envoyé, Merci " . $dataForm["fnameF"] . "!";
				$type = "green";
			}else{
				$statForm = false;
				$message = "Une erreur c'est produite, veillez essayer plus tard. Sinon envoyer un courriel à <a href='mailto:request@bretonr.ca'>request@bretonr.ca</a>";
				$type = "red";
			}
		}
	}
}
?>

<!doctype html>
<html lang="fr-FR">
	<?php include ("{$root}tpl/head.php"); ?>
	<body>
		<?php include ("{$root}tpl/header.php"); ?>
		<div class="centerContent content">
			<div class="oneCol">
				<h1 class="center">Prise de contact</h1>
				<p class="padded">La prise de contact initiale se fait généralement par courriel, où vous pouvez me donner un aperçu de vos besoins spécifiques pour votre projet. Cela me permettra de mieux comprendre vos attentes et de préparer une offre de service personnalisée adaptée à vos besoins. Une fois que j'ai une idée claire de vos besoins, nous pouvons prendre rendez-vous pour un appel téléphonique ou une visioconférence pour discuter de votre projet en détail et répondre à toutes vos questions. Mon objectif est de faciliter le processus de prise de décision pour vous et de rendre votre expérience client aussi fluide que possible.</p>
				<p>Envoyer moi directement dans votre premier courriel une liste des opérations à accomplir sur votre site web ou bien tout simplement un petit descriptif de vos besoins.  Cela m'aidera à vous faire une offre de service et ainsi accélérer le processus.</p>
			</div>
			<div class="oneCol">
				<h2>Exemple de modifications</h2>
				<p>Voici un exemple de quelques modifications simples que vous pouvez utiliser pour m'envoyer afin de mieux comprendre le projet que vous souhaitez réaliser. Cela nous permettra de démarrer la conversation sur les détails de votre projet et de discuter de vos attentes et besoins spécifiques. En utilisant cet exemple, vous pouvez vous faire une idée de ce que je suis en mesure de réaliser et nous permettre de planifier le travail à effectuer pour vous offrir une solution personnalisée.</p>
				<p class="txtCenter padded">(NomDeLaPage) Action : ancient > nouveau :: [nomFichierAvecExtention.ext]</p>
				<h3>Modifications : exemple.ca</h3>
				<ul class="dashed tabed">
					<li>(Page contact) Remplacer : 123 avenue larose > 456 avenue larose ::</li>
					<li>(Page accueil) Retirer le bandeau bleu</li>
					<li>(Accueil) Changer la photo du panier de pomme par :: [poire.jpg]</li>
					<li>(FAQ) Ajouter : Comment faire pour vous contactez? Toute l'information se retrouve sur notre page contact. ::</li>
				</ul>
			</div>
			<div class="endSection"><p>-------</p></div>
			<div class="formArea">
				<h2 class="center">Formulaire de contact</h2>
				<form action="#formContact" name="formContact" id="formContact" method="post">
					<div class="twoCol left">
						<label for="fNameF">Prénom</label><?php if($messErr["fnameF"] != ""){echo '<span class="errorF right red">' . $messErr["fnameF"] . '</span>';} ?>
						<input type="text" id="fnameF" name="fnameF" value="<?php echo $dataForm["fnameF"]; ?>" />
						<label for="lNameF">Nom</label><?php if($messErr["lnameF"] != ""){echo '<span class="errorF right red">' . $messErr["lnameF"] . '</span>';} ?>
						<input type="text" id="lnameF" name="lnameF" value="<?php echo $dataForm["lnameF"]; ?>" />
						<label for="cNameF">Nom de votre compagnie</label><?php if($messErr["cNameF"] != ""){echo '<span class="errorF right red">' . $messErr["cNameF"] . '</span>';} ?>
						<input type="text" id="cNameF" name="cNameF" value="<?php echo $dataForm["cNameF"]; ?>" />
						<label for="urlF">URL</label><?php if($messErr["urlF"] != ""){echo '<span class="errorF right red">' . $messErr["urlF"] . '</span>';} ?>
						<input type="text" id="urlF" name="urlF" value="<?php echo $dataForm["urlF"]; ?>" />
					</div>
					<div class="twoCol right">
						<label for="mailF">Courriel</label><?php if($messErr["mailF"] != ""){echo '<span class="errorF right red">' . $messErr["mailF"] . '</span>';} ?>
						<input type="text" id="mailF" name="mailF" value="<?php echo $dataForm["mailF"]; ?>" />
						<label for="limitF">Délais de livraison</label><?php if($messErr["limitF"] != ""){echo '<span class="errorF right red">' . $messErr["limitF"] . '</span>';} ?>
						<input type="text" id="limitF" name="limitF" value="<?php echo $dataForm["limitF"]; ?>" />
						<label for="descNeedF">Description de vos besoins</label><?php if($messErr["descNeedF"] != ""){echo '<span class="errorF right red">' . $messErr["descNeedF"] . '</span>';} ?>
						<textarea name="descNeedF"><?php echo $dataForm["descNeedF"]; ?></textarea>
					</div>
					<div class="clear"></div>
					<div class="center">
						<input type="submit" value="Envoyer" <?php if($statForm == true){ echo "disabled";} ?>/>
					</div>
				</form>
			</div>
			<?php if(isset($message)) : ?>
			<div class="txtCenter <?php echo $type; ?>">
				<p><?php echo $message; ?></p>
			</div>
			<?php endif; ?>
		</div>
		<?php include ("{$root}tpl/footer.php"); ?>
	</body>
</html>