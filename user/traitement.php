<?php

include('bdd.php'); //connection a la bdd

$listedID = $_POST['list_id'];

$stmt = $bdd->query("SELECT * FROM liste".$listeID);

while ($row = $stmt->fetch()){
    echo $row['valeur']."<br />\n";

}
?>