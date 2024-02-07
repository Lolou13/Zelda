


<?php 
include 'data/data.php';

foreach ($pages as $key => $value) {
   '  <li class="nav-item">
    <a class="nav-link fw-bold fs-4 '.$value['active'].'" aria-current="page" href="'.$value['href'].'">'.$value['name'].'</a>
  </li> ';

 }

?>