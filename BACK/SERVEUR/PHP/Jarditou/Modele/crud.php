<?php
class crud{
    private $db;

    function __construct($config){
        $this->db=$config;
    }
    
    //function to insert a new record in the product table    
    public function addProduct(
    $categorie, 
    $reference,
    $libelle,
    $description,
    $prix,
    $stock,
    $couleur,
    $imgExtension,
    $ajout,
    $modif,
    $bloque
    )
    {

        try
        {

            $sql = "INSERT INTO `produits`( 
                `pro_cat_id`, 
                `pro_ref`, 
                `pro_libelle`, 
                `pro_description`, 
                `pro_prix`, 
                `pro_stock`, 
                `pro_couleur`, 
                `pro_photo`, 
                `pro_d_ajout`, 
                `pro_d_modif`, 
                `pro_bloque`
                )
                 VALUES( 
                :pro_cat_id, 
                :pro_ref, 
                :pro_libelle, 
                :pro_description, 
                :pro_prix, 
                :pro_stock, 
                :pro_couleur, 
                :pro_photo, 
                :pro_d_ajout, 
                :pro_d_modif, 
                :pro_bloque
                 )";
            $add= $this->db->prepare($sql);

            $add->bindparam(':pro_cat_id',$categorie);
            $add->bindparam(':pro_ref',$reference);
            $add->bindparam(':pro_libelle',$libelle);
            $add->bindparam(':pro_description',$description);
            $add->bindparam(':pro_prix',$prix);
            $add->bindparam(':pro_stock',$stock);
            $add->bindparam(':pro_couleur',$couleur);
            $add->bindparam(':pro_photo',$imgExtension);
            $add->bindparam(':pro_d_ajout',$ajout);
            $add->bindparam(':pro_d_modif',$modif);
            $add->bindparam(':pro_bloque',$bloque);

            $add->execute();
            return $this->db->lastInsertId();
        } 
        catch (PDOException $e) {
            echo "<br><br><h3 class='text-danger'>There is an error! Please check your input informations. </h3><br><br>";
            // echo $e->getMessage();
            return false;
        }

    }

    //function to get all records in the product table    
    public function getProductList(){

     $sql = "SELECT * FROM `produits`";
     $result=$this->db->query($sql);
     return $result;
    }

    //function to get all records of one product  
    public function getProductDetails($pro_id){

        $sql = "SELECT * FROM `produits` WHERE `pro_id` = :pro_id";
        $detail=$this->db->prepare($sql);
        $detail->bindparam(':pro_id',$pro_id);
        $detail->execute();
        $result = $detail->fetch();
        return $result;
       }


        
}
?>


