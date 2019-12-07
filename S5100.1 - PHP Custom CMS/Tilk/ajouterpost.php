

<?php

session_start();

if (isset($_POST['titre']) AND isset($_POST['description'])) {
    if ($_POST['titre'] != NULL AND $_POST['description'] != NULL) {

        // insertion du code pour la connexion à MySQL
        require_once("pdoConnectBd.php");

        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $id = $_SESSION['ID'];

        $reponse = $bdd->query("SELECT * FROM post WHERE titre_post ='$titre'");
        $nombreEnregistrements = $reponse->rowCount();

//        Test pour savoir si le tilk existe déjà

        if ($nombreEnregistrements != 0) {
            ?>
            <script type="text/javascript">
                alert("Ce tilk existe déjà.");
                document.location.href = "post.php";
            </script>
            <?php
        }else{

        $rqt = "INSERT INTO post (titre_post, description_post, idutil) VALUES('$titre','$description','$id')";

        // exécution de la requête
        $repRqt = $bdd->query($rqt) OR die ("Erreur dans la requête: " . $rqt);

        if (!$repRqt) {

            ?>
            <script
                type="text/javascript"> alert(" Il y a un problème : Les données ne sont pas enregistrées");
                document.location.href = "post.php"</script>;<?php

            ?>

            <?php

        } else {

            ?>
            <script
                type="text/javascript"> alert("Vous avez tilké.");
                document.location.href = "home.php"</script>;<?php
        }
        ?>
        <?php
        }
    }
}
    ?>
