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
            
            <form action="verification.php" method="POST">
                <h1>Connection</h1>
                
                <intput type="checkbox" onclick="showliste(1)"><label><b>Nom </b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom_utilisateur" required>

                <intput type="checkbox" onclick="showliste(2)"><label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>

                <input type="submit" id='submit' value='LOGIN' >
                 
            </form>
        </div>
    </body>
</html>