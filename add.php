<?php
include 'utilities/header.php';
?>

<!--formulaire de contact reliés a notre a form.php
 qui contient la requete d'insert -->
<form action='data/form.php' method='post'>

  <div>

    <label>nom</label>

    <input type='text' name='nom' />

  </div>

  <div>

    <label>possesseur</label>

    <input type='text' name='descr' />

  </div>
  
  <div>

    <label>Enregistrer</label>

    <input type='submit' value='cliquez pour enregistrer' />

  </div>

</form>