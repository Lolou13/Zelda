
<?php  
 include 'utilities/header.php'
 ?>
<div class="container"> 
<form>
      <div>
            <h4 class="text-uppercase fw-bold">formulaire de contact</h4>
            <img src="images/bg_titre.jpg" alt="">
      </div>
      <div class="row mt-4">
            <div class="col-7">
               <input type="text" class="bg-grey form-control rounded-0" id="nomInput" placeholder="VOTRE NOM"
                  aria-label="VOTRE NOM"> <!-- input du nom -->
            </div>
            <div class="col-5">
               <input type="text" class="bg-grey form-control rounded-0" id="prenomInput"  placeholder="VOTRE PRENOM"
                  aria-label="VOTRE PRENOM"> <!-- input du prénom -->
            </div>
      </div>
      <div class="row mt-4">
            <div class="col-5">
               <input type="tel" class="bg-grey form-control rounded-0" placeholder="VOTRE TELEPHONE"
                  aria-label="VOTRE TELEPHONE"> <!-- input du telephone -->
            </div>
            <div class="col-7">
               <input type="email" class="bg-grey form-control rounded-0" placeholder="VOTRE EMAIL"
                  aria-label=" VOTRE EMAIL"> <!-- input du mail-->
            </div>
      </div>
      <div class="row mt-4">
            <div class="col">
               <input type="text" class="bg-grey form-control rounded-0" id="sujet" placeholder="SUJET"
                  aria-label="SUJET"> <!-- input du sujet -->
            </div>
      </div>
      <div class="mt-4 h-50">
            <textarea class="bg-grey form-control rounded-0 h-100" id="exampleFormControlTextarea1"
               rows="6"></textarea> <!-- input du textarea-->
      </div>
      <button type="submit" class="mt-5 btn btn-outline-warning btn-lg rounded">Envoyer</button>
   </form>

   </div>

<?php  
 include 'utilities/footer.php'
 ?>





