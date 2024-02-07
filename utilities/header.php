<?php 
include 'data/data.php';
include 'data/config.php';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 <header class="mb-5">
   <nav class="navbar navbar-expand-lg bg-footer">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" srcset=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                           <a class="nav-link active fs-4 gold" aria-current="page" href="index.php">ACCUEIL</a>
                       </li>

                       <li class="nav-item">
                           <a class="nav-link fs-4 gold" href="produits.php">PRODUITS</a>
                       </li>

                       <li class="nav-item">
                          <a class="nav-link fs-4 gold" href="contact.php">CONTACT</a>
                       </li>

                  </ul>
                         <form class="d-flex" role="search">
                             <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                             <button class="btn btn-outline-warning" type="submit">Search</button>
                         </form>
                </div>
        </div>
  </nav>
      <div class="container-fluid g-0 position-relative">
            <img src="img/banniere1.jpg" class="img-fluid w-100" alt="Link escalade une falaise">
            <h1 class="position-absolute top-50 start-50 translate-middle fs-1 gold"><?=$title?></h1>
      </div>
</header>

    