<?php
  $title='add product';
  include("../Vue/header.php");//import header.php
    
  require_once("../Modele/config.php");  // Connexion base

  require_once("../Modele/crud.php"); // Call fonctions in crud
  


     if(isset($_POST["submit"])){

        $extension = substr(strrchr($_FILES["imgProduit"]["name"], "."), 1);
        
        $reference = $_POST['reference'];
        $categorie = $_POST['categorie'];
        $libelle = $_POST['libelle'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $stock = $_POST['stock'];
        $couleur = $_POST['couleur'];
        $ajout=date("Y-m-d");
        $modif=NULL;
        $bloque = $_POST['bloque'];
        //$product_id=$_POST['pro_id'];

        $product_id = $crud->addProduct($categorie, 
        $reference,
        $libelle,
        $description,
        $prix,
        $stock,
        $couleur,
        $extension,
        $ajout,
        $modif,
        $bloque);
      
        if($product_id != null){
            echo "<br><br><h3 class='text-success'>Adding product was successful !</h3><br><br>";
      
        }else{
            echo "<br><br><h3 class='text-danger'>Adding product was unsuccessful !</h3><br><br>";

        } 


        // On verifie si le champ de photo est bien enregistrer
        if($_FILES['imgProduit']['error']==0) {
                                  
            $target_dir ='../Contenu/img/';           
            $image_dest= "$target_dir$product_id.$extension";
            move_uploaded_file( $_FILES['imgProduit']['tmp_name'],$image_dest);
           
        } else {

             switch ($_FILES['imgProduit']['error']) {
                     case UPLOAD_ERR_INI_SIZE:
                         $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
                         break;
                     case UPLOAD_ERR_FORM_SIZE:
                         $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                         break;
                     case UPLOAD_ERR_PARTIAL:
                         $message = "The uploaded file was only partially uploaded";
                         break;
                     case UPLOAD_ERR_NO_FILE:
                         $message = "No file was uploaded";
                         break;
                     case UPLOAD_ERR_NO_TMP_DIR:
                         $message = "Missing a temporary folder";
                         break;
                     case UPLOAD_ERR_CANT_WRITE:
                         $message = "Failed to write file to disk";
                         break;
                     case UPLOAD_ERR_EXTENSION:
                         $message = "File upload stopped by extension";
                         break;
         
                     default:
                         $message = "Unknown upload error";
                         break;
                 }
                 return $message;
             }
        
    }
 ?>