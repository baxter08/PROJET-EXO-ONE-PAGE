<?php
session_start();
require_once '../PROJET-EXO-ONE-PAGE/include/bdd.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">

    <title>Onepage</title>
</head>

<body>
    <div class="container-background">
        <?php include "../PROJET-EXO-ONE-PAGE/include/bdd.php" ?>
        <div class="navbar">
            <div class="navbar-container">
                <div class="logo-container">
                    <h1 class="logo">Onepage</h1>
                    <?php

                    $sql = "SELECT * FROM user
        WHERE  pseudo_users=:user ";
                    $requete = $bdd->prepare($sql);
                    $requete->execute(array(
                        ':user' => $_SESSION['user']
                    ));
                    $row = $requete->fetch();

                    if (isset($_SESSION['user'])) {
                    ?><div class="container_pseudo"><?php
                                            echo ('Connecté en tant que : ' . $_SESSION['user']); ?>
                            <a href="index_admin.php">
                                <div class="logo"></div>
                        </div>
                        </a>
                        <div class="deconnection_container"><a href="deconnection.php">deconnexion</a>
                        </div>
                    <?php
                    } else { ?>
                        <div class="inscription-container">
                            <a href="index.php">
                                <div class="logo"></div>
                            </a>

                        </div>
                        <!-- <li><a href="connexion.php">Connexion</a></li> -->
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="container-text-projets">
            <h1>
                Touts les projets et maquettage
            </h1>
            <div class="container-text-projets2" href="https://miro.com/app/board/uXjVOvcCDT0=/">
                <p>voici les lien github avc les diferentes branches </p>
                <div class="btn_boutton">
                    <a href="https://github.com/baxter08/PROJET-EXO-ONE-PAGE/tree/DEV" class="noir petit arrondi">GITHUB BRANCHE DEV FRONT</a>
                </div>
                <div class="btn_boutton1">
                    <a href="https://miro.com/app/board/uXjVOvcCDT0=/" class="noir petit arrondi">LIEN MAQUETTE</a>
                </div>
            </div>
            <div class="btn-boutton"></div>
        </div>
    </div>
    <div class="titre-container">
        <h1>
            Projets en cours de développement
        </h1>
    </div>
    <div class="global-container-slider">

        <div class="slide-container">
            <div class="custom-slider fade">
                <div class="slide-index">1 / 3</div>
                <img class="slide-img" src="img/metropole.PNG">
                <div class="boutton"><a href="#demo">ouvrire la modale</a></div>
                <div id="demo" class="modal">
                    <div class="modal_content">
                        <h1>Ardenne Métropole<br><br></h1>
                        <p>Consception d'un site pour Ardenne métropole avec un espace profil, historique des parcourts de l'utilisateur et des poste postuler, pouvoir aussi modifier et annuler sa propre candidature, upload de CV et lettre de motivation</p>
                        <a href="#" class="modal_close">&times;</a>
                    </div>
                </div>
                <div class="slide-text"></div>
            </div>
            <div class="custom-slider fade">
                <div class="slide-index">2 / 3</div>
                <img class="slide-img" src="img/RESERVATION GRR.PNG">
                <div class="boutton"><a href="#demo1">ouvrire la modale</a></div>
                <div id="demo1" class="modal">
                    <div class="modal_content">
                        <h1>G.R.R<br><br></h1>
                        <p>Consception d'un site G.R.R pour Ardenne métropole avec un espace profil, reservation sur plusieur secteur de Charleville-Mézieres (Mairie CMZ, Ardenne Métropole, CCAS) possibiliter de modifier c'est propre reservation</p>
                        <a href="#modal_close" class="modal_close">&times;</a>
                    </div>
                </div>
                <div class="slide-text"> </div>
            </div>
            <div class="custom-slider fade">
                <div class="slide-index">3 / 3</div>
                <img class="slide-img" src="img/MON CALENDRIER .PNG">
                <div class="boutton"><a href="#demo2">ouvrire la modale</a></div>
                <div id="demo2" class="modal">
                    <div class="modal_content">
                        <h1>Calendrier<br><br></h1>
                        <p>Consception d'un calendrier pour des reservation en POO pour Ardenne métropole possibiliter d'editer ou de modifier c'est propre reservation</p>
                        <a href="#" class="modal_close">&times;</a>
                    </div>
                </div>
                <div class="slide-text"></div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div class="slide-dot">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <div class="container_colum">

        <div class="colum_1">
            <div class="carte_1">
                <img class="carte-img" src="">
            </div>
            <div class="carte_2">
                <img class="carte-img" src="">
            </div>

            <div class="colum_2">

                <div class="colum_3">
                    <div class="carte_3">
                        <P>
                            <br><br>
                            Site de TIPS ajoute ou modification de tips avec plusieur categorie (html, php, java, mysql, ...)avec un crud possibiliter de compte administrateur moderateur et utilisateur suivant le cas ou il et utilisateur il peu juste ajouter des tips et upload des fichier ds le cas ou il et administrateur il peu tou gerer et si il et moderateur il ne peut suprimer
                        </P>
                        <div class="btn_boutton3">
                            <a href="#" class="noir petit arrondi">GITHUB PROJET DE GROUPE</a>
                        </div>
                    </div>
                    <div class="carte_4">
                        <P>
                            <br><br>
                            Site de TIPS ajoute ou modification de tips avec plusieur categorie (html, php, java, mysql, ...)avec un crud possibiliter de compte administrateur moderateur et utilisateur suivant le cas ou il et utilisateur il peu juste ajouter des tips et upload des fichier ds le cas ou il et administrateur il peu tou gerer et si il et moderateur il ne peut suprimer
                        </P>
                        <div class="btn_boutton3">
                            <a href="https://jpb.simplon-charleville.fr/metropolis/" class="noir petit arrondi">LIEN PROJET METROPOLIS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include "../PROJET-EXO-ONE-PAGE/include/footer.php"; ?>
<script src="js.js"></script>

</html>