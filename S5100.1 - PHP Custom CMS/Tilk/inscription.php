
<?php
if (isset($_POST['email']) AND isset($_POST['password'])AND isset($_POST['nom'])AND isset($_POST['prenom'])AND isset($_POST['cpassword'])) {
    if ($_POST['email'] != NULL AND $_POST['password'] != NULL AND $_POST['nom'] != NULL AND $_POST['prenom'] != NULL AND $_POST['cpassword'] != NULL) {
        try {
            //connexion à la base de données
            include "pdoConnectBd.php";
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $Login = $_POST['email'];
            $Motdepasse = $_POST['password'];
            $MotdepasseC = $_POST['cpassword'];
            $Nom = $_POST['nom'];
            $Prenom = $_POST['prenom'];

            //parcourir la liste utilisateurs
            $req1 = $bdd->query("SELECT * FROM utilisateur WHERE email_utilisateur = '$Login' AND mdp_utilisateur = '$Motdepasse'");
            $nombreUtilisateur = $req1->rowCount();
            $donnees=$req1->fetch();

            //dans le cas
            if ($nombreUtilisateur == 1) {
                ?>
                <script type="text/javascript">
                    alert("Ce compte existe déjà.");
                    document.location.href = "login.php";
                </script>
                <?php
            }
            if ($nombreUtilisateur== 0) {
              if($Motdepasse != $MotdepasseC){
              ?>
              <script type="text/javascript">
                  alert("Les deux mots de passes doivent être identiques.");
                  document.location.href = "register.php";
              </script>
              <?php
            }
            else {
              $req2 = $bdd->query("INSERT INTO utilisateur (nom_utilisateur, prenom_utilisateur, email_utilisateur, mdp_utilisateur) VALUES ('$Nom', '$Prenom', '$Login', '$Motdepasse')");
              ?>
              <script type="text/javascript">
                  alert("Vous avez maintenant un compte.");
                  document.location.href = "login.php";
              </script>
              <?php
            }
          }

            $bdd = NULL;

            } catch (PDOException $e) {
            echo "Erreur !: " . $e->getMessage() . "<br />";
            die();
        }
    }
}
?>
