<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">

    <title>acceuil</title>
</head>

<body>
    <div class="container-background">

        <div class="navbar">
            <div class="navbar-container">
                <div class="logo-container">
                    <h1 class="logo">Onepage</h1>
                    <div class="inscription-container"><a href="http://localhost/PROJET-EXO-ONE-PAGE/inscription.php"> inscription</a>
                        <div class="connexion-container"><a href="//localhost/PROJET-EXO-ONE-PAGE/connection.php">connexion</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-text-projets">
            <h1>
                Touts les projets
            </h1>
            <div class="container-text-projets2">
                <a>
                    <br><br>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.
                </a>
            </div>
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
            <div class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        </div>
        <div class="custom-slider fade">
            <div class="slide-index">2 / 3</div>
            <img class="slide-img" src="img/RESERVATION GRR.PNG">
            <div class="slide-text">Nullam luctus aliquam ornare. </div>
        </div>
        <div class="custom-slider fade">
            <div class="slide-index">3 / 3</div>
            <img class="slide-img" src="img/MON CALENDRIER .PNG">
            <div class="slide-text">Praesent lobortis libero sed egestas suscipit.</div>
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
</body>
<script src="js.js"></script>

</html>