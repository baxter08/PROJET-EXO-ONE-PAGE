
<html>
    
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="/inscription.css"  />
        <link rel="stylesheet" href="/css/modal.css"  />

        <title>Inscrption</title>
    </head>
    <body>

            <div id="content">
             
            </div>    
        <div id="container">
            <!-- zone de connexion -->
            <form action="inscription.php?action=ajout" method="POST">
            <a href="index.php"> <img src="" class="user"></a>
            <h1>Inscription</h1>
                
                <label><b>Nom </b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom_utilisateur" required>

                <label><b>Adress mail</b></label>
                <input type="text" placeholder="Entrer le mail" name="mail" required>
                

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>
                <input type="submit" id='submit' value='LOGIN' >
                <?php
            include('../PROJET-EXO-ONE-PAGE/include/bdd.php');
            // echo "salut";

            if (isset($_GET["action"])) {
                if ($_GET["action"] == "ajout") {



                    if (!empty($_POST)) { // ici on fait le traitement de l'inscription

                        if (isset($_POST['nom_utilisateur']) && isset( $_POST['mail'])&& isset( $_POST['mot_de_passe'])) {
                            echo ($_POST['nom_utilisateur']);


                            // $check = $bdd->prepare('SELECT * FROM users WHERE pseudo_users = ?');
                            // $check->execute(array($_POST['pseudo']));
                            // $data = $check->fetch();
                            // $row = $check->rowCount();

                            $pseudo = htmlspecialchars($_POST['nom_utilisateur']);
                            $email = htmlspecialchars($_POST['mail']);
                            $password = htmlspecialchars($_POST['mot_de_passe']);
                            $check = $bdd->prepare(
                                'SELECT pseudo_users, mail_users, mdp_users, id_role FROM users WHERE pseudo_users =?'
                            );
                            $check->execute(array($pseudo));
                            $data = $check->fetch();
                            $row = $check->rowCount();

                            if ($row == 0) {
                                if (strlen($pseudo) <= 100) {
                                    if (strlen($email) <= 100) {
                                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                            $password = hash('sha1', $password);

                                            $insert = $bdd->prepare('INSERT INTO user(pseudo_users, mail_users, mdp_users, id_role) 
                                            VALUES (:pseudo_users, :mail_users, :mdp_users, 1)');
                                            $insert->execute(array(
                                                'pseudo_users' => $pseudo,
                                                'mail_users' => $email,
                                                'mdp_users' => $password
                                            ));
                                            header('location: connection.php?reg_err=success');
                                        } else header('location:inscription.php');
                                    } else header('location:inscription.php?reg_err=email');
                                } else header('location:inscription.php?reg_err=email_length');
                            } else header('location:inscription.php?reg_err=pseudo_length');
                        } else header('location:inscription.php?reg_err=already');
            ?>

        </form>
        <div class="compte">
<?php

                    }
                }
            }

?>

               

            </form>
        </div>
    </body>
</html>