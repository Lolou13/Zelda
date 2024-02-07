
<?php 
include 'utilities/header.php';
include 'data/function.php';
?>
<!-- ci-dessus les includes qui permettent d'afficher le header et d'avoir
 accès a la base de données avec le dossier data -->

<main class="container-fluid d-flex flex-column align-items-center">
   <section class="container-sm d-flex flex-column align-items-center">
             <!-- texte de presentation a cote du carousel -->
            <h2>La boutique du chaman : c'est quoi?</h2>
            <div class="d-flex justify-content-center align-items-center">
                <div class="w-50 m-5">
                    <p>Bienvenue à la Boutique du Chaman, l'ultime destination pour tous vos besoins en potions et pierres magiques dans le royaume  Fondée il y a plus de 400 ans, notre boutique est située au cœur de la paisible cité d'Hyrule, où nos deux éminents spécialistes, le renommé Dr Link et la mystique Dr Zelda, mettent leur expertise au service des aventuriers intrépides.</p>
                        Plongez dans un monde envoûtant de remèdes extraordinaires et de pierres mystiques, soigneusement sélectionnés pour maximiser votre potentiel héroïque. Que vous cherchiez à renforcer votre santé, accroître vos pouvoirs ou résister aux forces obscures, La Boutique du Chaman a tout ce dont vous avez besoin.
                        Nos potions sont préparées avec soin, à base d'ingrédients rares et puissants cueillis dans les recoins les plus mystérieux d'Hyrule.</p> 
                        Le Dr Link et le Dr Zelda se tiennent prêts à vous guider à travers notre collection, garantissant que chaque visite à notre boutique soit une expérience magique inoubliable. Préparez-vous à embrasser votre destinée avec les élixirs exceptionnels de La Boutique du Chaman!
                    </p>
                </div>
                <!-- carrousel de presentation-->
            <div id="carouselExampleAutoplaying" class="carousel slide w-50 m-5" data-bs-ride="carousel">
        <div class="carousel-inner">
             <div class="carousel-item active">
             <img src="img\boutique.jpg" class="d-block w-100" alt="...">  <!--image 1-->
        </div>
        <div class="carousel-item">
            <img src="img\boutique2.jpg" class="d-block w-100" alt="..."><!--image 2-->
        </div>
        <div class="carousel-item">
            <img src="img\slider1.jpg" class="d-block w-100" alt="..."><!--image 3-->
         </div>
        <div class="carousel-item">
            <img src="img\slider2.jpg" class="d-block w-100" alt="..."><!--image 4-->
         </div>
         </div>  <!-- les fleches avant/apres sur le slider -->
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
              </button>

            </div>
        </div>
    </section>
    
    <!-- ici le modele de la cards pour les medecins -->
   <section class="container-sm">
          <div class="text-center text-uppercase mt-5">
                 <h2 class="fw-bold">Nos specialistes</h2>
          </div>
          <div class="card-group w-100 m-auto justify-center">
   <?php foreach($medecins as $medecin):?> <!-- boucle for each pour aller chercher mes deux elements en BDD -->

   <div class="card border m-5" style="width: 35rem;">
                 <img src="<?= $medecin['nom']?>" class="card-img-top" alt="...">
             <div class="card-body">
                 <h5 class="card-title"><?= $medecin['prenom']?> </h5>
                 <p class="card-text"><?= $medecin['des']?> </p>
              </div>
              <ul class="list-group list-group-flush">
                 <li class="list-group-item"><?= $medecin['etude']?></li>
                 <li class="list-group-item"><?= $medecin['prix']?></li>
              </ul>
        <div class="card-body">
          <button type="button" class="btn btn-outline-dark text-uppercase fw-bold ">reserver un crenaux</button>
        </div>
   </div>   

  <?php endforeach; ?>   <!-- fin de la foreach-->

    </div>
  </section>
</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php include 'utilities/footer.php' ?>

