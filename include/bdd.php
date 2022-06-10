<?php

    $user = "root";
    $pass = "";

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=projet-exo-one-page;charset=utf8', $user, $pass);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

