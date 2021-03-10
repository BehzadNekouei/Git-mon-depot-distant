<?php 
  $title='Product details';
  include("header.php");//import header.php
    
  require_once("../Modele/config.php");  // Connexion base

  require_once("../Modele/crud.php"); // Call fonctions in crud
  $pro_id = $_GET["pro_id"];
  $result= $crud->getProductList();
?>














<?php 
  include("footer.php");
?>
