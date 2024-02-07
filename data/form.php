<?php
include 'config.php';


$nom = $_POST['nom'];
$description = $_POST['descr'];


//On insère les données reçues
$sql = "INSERT INTO potions (nom, descr) VALUES 
('$nom','$description')";
$dbco->query($sql);

// $dbco est l’objet qui représente la connexion à la base de données et query() est une méthode de cet objet. Cette méthode exécute la requête SQL contenue dans la variable $sql

//On renvoie l'utilisateur vers la page de remerciement
header("Location:index.php");

