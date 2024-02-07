

<?php

$sql="SELECT * FROM `medecins` INNER JOIN images ON medecins.imageID =images.id";
    
$requete = $dbco->query($sql);

 $medecins = $requete->fetchAll();
   