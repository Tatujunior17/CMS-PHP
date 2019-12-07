<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require_once "functions.php";

    if (isset($_POST['email'])) {
      include "pdoConnectBd.php";
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $bdd->real_escape_string($_POST['email']);

        $sql = $bdd->query("SELECT id_utilisateur FROM utilisateur WHERE email_utilisateur='$email'");
        if ($sql->num_rows > 0) {

            $token = generateNewString();

	        $bdd->query("UPDATE utilisateur SET token_utilisateur='$token',
                      tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE)
                      WHERE email_utilisateur='$email'
            ");

	        require_once "PHPMailer/PHPMailer.php";
	        require_once "PHPMailer/Exception.php";

	        $mail = new PHPMailer();
	        $mail->addAddress($email);
	        $mail->setFrom("ivane_rodrigues@hotmail.com", "Tilk");
	        $mail->Subject = "Reset mot de passse";
	        $mail->isHTML(true);
	        $mail->Body = "
	            Bonjour,<br><br>

	            Cliquez ici pour changer votre mot de passe:<br>
	            <a href='
	            localhost:8888/Tilk/resetPassword.php?email=$email&token=$token
	            '>localhost:8888/Tilk/resetPassword.php?email=$email&token=$token</a><br><br>
	        ";

	        if ($mail->send())
    	        exit(json_encode(array("status" => 1, "msg" => 'Verifiez votre mail')));
    	    else
    	        exit(json_encode(array("status" => 0, "msg" => 'Erreur')));
        } else
            exit(json_encode(array("status" => 0, "msg" => 'Remplissez les champs')));
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Tilk - Mot de passe oublié</title>
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
          <span class="login100-form-title p-b-26">
            Bienvenue
          </span>
          <span class="login100-form-title p-b-48">
            <i><img src="login/images/tilklogo.webp" alt="Tilk"></i>
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Inserez un mail valide : a@b.c">
            <input class="input100" type="text" id ="email" name="email">
            <span class="focus-input100" data-placeholder="Email"></span>
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                Changer mot de passe
              </button>
            </div>
          </div>
      </div>
    </div>
  </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var email = $("#email");

        $(document).ready(function () {
            $('.btn-primary').on('click', function () {
                if (email.val() != "") {
                    email.css('border', '1px solid green');

                    $.ajax({
                       url: 'forgotPassword.php',
                       method: 'POST',
                       dataType: 'json',
                       data: {
                           email: email.val()
                       }, success: function (response) {
                            if (!response.success)
                                $("#response").html(response.msg).css('color', "red");
                            else
                                $("#response").html(response.msg).css('color', "green");
                        }
                    });
                } else
                    email.css('border', '1px solid red');
            });
        });
    </script>
</body>
</html>
