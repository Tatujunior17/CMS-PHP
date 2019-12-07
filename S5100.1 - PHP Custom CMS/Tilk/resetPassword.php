<?php
	require_once "functions.php";

	if (isset($_GET['email']) && isset($_GET['token'])) {
		include "pdoConnectBd.php";
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$email = $bdd->real_escape_string($_GET['email']);
		$token = $bdd->real_escape_string($_GET['token']);

		$sql = $conn->query("SELECT id_utilisateur FROM utilisateur WHERE
			email_utilisateur='$email' AND token_utilisateur='$token' AND token<>'' AND tokenExpire > NOW()
		");

		if ($sql->num_rows > 0) {
			$newPassword = generateNewString();
			$newPasswordEncrypted = password_hash($newPassword, PASSWORD_BCRYPT);
			$bdd->query("UPDATE utilisateur SET token_utilisateur='', mdp_utilisateur = '$newPasswordEncrypted'
				WHERE email_utilisateur='$email'
			");

			echo "Ton mot de passe est $newPassword<br><a href='login.php'>Connexion</a>";
		} else
			redirectToLoginPage();
	} else {
		redirectToLoginPage();
	}
?>
