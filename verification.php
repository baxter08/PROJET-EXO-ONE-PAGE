<?php

session_start();
// require 'bdd.php';
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'connection';
    $db_host     = 'localhost';
    $db_mail     = '';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
   
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($db_host="" && $db_username == "" && $db_password == "" && $db_name == "")
    {

        $requete = "SELECT count(*) FROM users where 
              nom_utilisateur =  '".$nom_utilisateur."' and mot_de_passe = '".$mot_de_passe."' and mail = '".$mail.
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe et mail correctes 
        {
           $_SESSION['nom_utilisateur'] = $nom_utilisateur;
           header('Location: inscription.php');
        }
        else
        {
           header('Location: index.html?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: index.html?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: connection.php');
}
mysqli_close($db); // fermer la connexion
?>