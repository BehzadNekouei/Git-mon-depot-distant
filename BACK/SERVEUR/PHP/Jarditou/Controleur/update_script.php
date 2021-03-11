<?php
  $title='modify product';
  include("../Vue/header.php");//import header.php
    
  require_once("../Modele/config.php");  // Connexion base

  require_once("../Modele/crud.php"); // Call fonctions in crud
  

     if(isset($_POST["submit"])){
        $productId= $_POST['productId'];
        $reference = $_POST['reference'];
        $categorie = $_POST['categorie'];
        $libelle = $_POST['libelle'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $stock = $_POST['stock'];
        $couleur = $_POST['couleur'];
        $modif=$_POST['ddm'];
        $bloque = $_POST['bloque'];

        //call crud function
        $result = $crud->changeProductDetails(
            $productId,
            $reference,
            $categorie, 
            $libelle,
            $description,
            $prix,
            $stock,
            $couleur,
            $bloque,
            $modif
        );

        if($result){
            header("Location:../Vue/tableau.php");//rediretion to page tableau
        }else{
            echo "<br><br><h3 class='text-danger'>Modifing product was unsuccessful !</h3><br><br>";
            echo '<a href="../Vue/update_form.php?pro_id=';
            echo $productId;
            echo '"><button type="button" class="btn btn-secondary">Retour</button></a>';
        }
        

    }
    else{
        echo "<br><br><h3 class='text-danger'>submiting form product was unsuccessful !</h3><br><br>";
        echo '<a href="../Vue/tableau.php"><button type="button" class="btn btn-secondary">Retour</button></a>';
    }
    include('../Vue/footer.php');
?>
