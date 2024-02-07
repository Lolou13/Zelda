
<?php include('utilities/header.php');
include 'data/config.php';
include 'data/data.php';
?>


<h1><?php $title ?></h1> 

<!-- ici la cards modele pour toute mes elixirs (x4) -->
            <div class="text-center text-uppercase mt-5">
                <h2 class="fw-bold">Nos elixirs </h2>   
            </div>

<section class="container-md w-66 m-auto">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mx-0 mx-md-5">
            
    <?php foreach ($potions as $potion):?><!-- boucle for each qui fait parcourir ma table POTIONS -->
                <div class="col">
                  <div class="card border border-4">
                      <img src="<?=$potion['pathImg']?>" class="card-img-top rounded-0"
                          alt="compteur de velo">
                      <div class="card-body">
                          <h4 class="card-title text-uppercase fw-bold"><?=$potion['nom']?></h4>
                          <p class="card-text"><?=$potion['descr']?></p>
                          <button type="button" class="btn btn-outline-dark text-uppercase fw-bold ">acheter</button>
                      </div>
                  </div>
              </div>
      <?php endforeach; ?>
      <div class="col"> <!-- cards en dehors de la boucle qui servira a ajouter des potions  -->
                  <div class="card border border-4">
                      <img src="./img/croix.jpeg" class="card-img-top rounded-0"
                          alt="compteur de velo">
                      <div class="card-body">
                          <h4 class="card-title text-uppercase fw-bold"> </h4>
                          <p class="card-text"> </p>
                          <form action="add.php"> <!-- renvois au formulaire -->
                              <button type="submit" class="btn btn-outline-dark text-uppercase fw-bold ">ajouter un nouvelle article </button>
                            </form>
                      </div>
                  </div>
              </div>
    </div>
</section>

<!-- ici la cards modele pour toute mes pierres (x4) -->
<div class="text-center text-uppercase mt-5">
    <h2 class="fw-bold">Nos pierres energitiques </h2>
    
</div>
<section class="container-md w-66 m-auto mb-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mx-0 mx-md-5">

            <?php foreach ($pierres as $pierre):?><!-- boucle for each qui fait parcourir ma table PIERRES -->
              <div class="col">
                  <div class="card border border-4">
                      <img src="<?=$pierre['name']?>" class="card-img-top rounded-0 p-3"
                          alt="compteur de velo">
                      <div class="card-body">
                          <h4 class="card-title text-uppercase fw-bold"><?=$pierre['nom']  ?></h4>
                          <p class="card-text"><?=$pierre['des']  ?></p>
                          <button type="button" class="btn btn-outline-dark text-uppercase fw-bold ">acheter</button>
                      </div>
                  </div>
              </div>
        <?php endforeach; ?>
    </div>
</section>
        




<?php include('utilities/footer.php') ?>
