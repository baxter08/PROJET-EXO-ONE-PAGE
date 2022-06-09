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
            
            <form action="verification.php" method="POST">
            <h1>inscription</h1>
                
                <label><b>Nom </b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom_utilisateur" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>

                <label><b>Adress mail</b></label>
                <input type="text" placeholder="Entrer le mail" name="mail" required>
                <input type="submit" id='submit' value='LOGIN' >

            </form>
        </div>
    </body>
</html>