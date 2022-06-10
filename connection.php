<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>

            <div id="content">
             
            </div>    
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="connection.php" method="POST">
                <h1>Connection</h1>
                
                <intput type="checkbox" onclick="showliste(1)"><label><b>Nom </b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom_utilisateur" required>

                <intput type="checkbox" onclick="showliste(2)"><label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>

                <input type="submit" id='submit' value='LOGIN' >


               <?php
               
                include('../PROJET-EXO-ONE-PAGE/include/bdd.php');
                if (isset($_POST['nom_utilisateur']) && isset($_POST['mot_de_passe'])) {
                    $pseudo = htmlspecialchars($_POST['nom_utilisateur']);
                    $password = htmlspecialchars($_POST['mot_de_passe']);

                        $check = $bdd->prepare('SELECT * FROM user WHERE pseudo_users = ?');
                        $check->execute(array($pseudo));
                        // $data = $check->fetch();
                        // $row = $check->rowCount();


                        if($check->rowcount()==1){

                            $data =$check->fetch();
                            $password2= hash('sha1', $password); // echo($password); echo "<br>";echo($data['mdp_users']);
                            if($data['mdp_users'] === $password2)
                            {
                                $S_SESSION['user'] = $pseudo;
                                header('location:index.php');
                            
                    if (isset($_POST['pseudo_users']) && isset($_POST['mdp_users'])) {
                        $pseudo = htmlspecialchars($_POST['pseudo_users']);
                        $password = htmlspecialchars($_POST['mdp_users']);

                        $check = $bdd->prepare('SELECT * FROM user WHERE pseudo_users = ?');
                        $check->execute(array($pseudo));
                        $data = $check->fetch();
                        $row = $check->rowCount();
                    }
                        if ($row == 1) {
                            // $password = hash('sha256', $password);

                        }
                            if ($password == $data['mdp_users']) {
                                $_SESSION['user'] = $pseudo;
                                header('Location:index_admin.php');
                            } else
                                echo "Mot de passe incorrect";
                        } else
                            echo "Ce compte n'existe pas !";
                    } else
                        echo "pseudo non valide !";
                }
                ?>
            </div>
            <!-- <a href="inscription.php">INSCRIPTION</a> -->
    </div>
    
            </form>
        </div>
    </body>
</html>