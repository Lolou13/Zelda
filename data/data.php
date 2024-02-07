<?php 
include 'config.php';


  $sql = "SELECT * FROM `potions` INNER JOIN pictures on potions.potionsID=pictures.id;";
  // Sélectionne toutes les colonnes de toute les potions dans la table potions avec une jointures de la table pictures
  // je join pictures et potions pour reunir tout les elements necessaires aux cards 
      $requete = $dbco->query($sql);

      $potions = $requete->fetchAll();

   
 
      $sql = "SELECT * FROM `pierres` INNER JOIN pictures2 on pierres.imageID=pictures2.id;";
      // Sélectionne toutes les colonnes de tous les pierres dans la table pierres
      $requete = $dbco->query($sql);
    
      $pierres = $requete->fetchAll();
    


      // ici les url des pages sont stockés pour faire apparaitres differents h1 selon la page on se trouve

    $domaine='localhost:8000/Zelda/';
    $index_page = $domaine;
    $contact_page = $domaine . "contact.php";
    $produits_page = $domaine . "produits.php";

    $index_name= "ACCEUIL";
    
    $current_url = $_SERVER['SCRIPT_NAME'];
    // le if/else et le strpos compare l'occurence des url
    // et affiche ou non en consequences dans l'url ce que on souhaite 
    if(strpos($index_page, $current_url) !== false || strpos($index_page . 'index.php', $current_url) !== false) {
      $title = $index_name;
    }
    elseif (strpos($produits_page, $current_url)) {
      $title = 'NOS PRODUITS';
    }
    elseif (strpos($contact_page, $current_url)) {
      $title = 'CONTACTEZ NOUS';
    }

   // ici on deplace la classe active manuellement sur navbar
   
    $pages = [

      [ 'active'=>'active',
        'name' => 'ACCUEIL',
      'href' => "index.php"],
  
      ['active'=>'active',
        'name' => 'PRODUITS',
      'href' => "produits.php"],
  
      ['active'=>'active',
        "name"=>"CONTACT",
       "href"=>"contact.php"],
  
  ];





  