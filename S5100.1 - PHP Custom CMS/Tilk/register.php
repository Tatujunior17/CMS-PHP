
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Tilk - Créer un compte</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login/images/tilklogo.webp"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="inscription.php" method="post">
					<span class="login100-form-title p-b-26">
						Créer un compte Tilk
					</span>
					<span class="login100-form-title p-b-48">
						<i><img src="login/images/tilklogo.webp" alt="Tilk"></i>
					</span>

          <div class="wrap-input100 validate-input" data-validate = "Inserez votre nom">
						<input class="input100" type="text" name="nom">
						<span class="focus-input100" data-placeholder="Nom"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Inserez votre prénom">
						<input class="input100" type="text" name="prenom">
						<span class="focus-input100" data-placeholder="Prénom"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Inserez un mail valide : a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Entrez un mot de passe">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Mot de passe"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate="Confirmez votre mot de passe">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="cpassword">
						<span class="focus-input100" data-placeholder="Confirmez mot de passe"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Créer le compte
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Tu as déjà un compte ?
						</span>

						<a class="txt2" href="login.php">
							Connexion
						</a>
					</div>

					<div class="text-center p-t-115" style="margin-top:-100px;">
						<a class="txt2" href="forgotPassword.php">
							Mot de passe oublié ?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>
