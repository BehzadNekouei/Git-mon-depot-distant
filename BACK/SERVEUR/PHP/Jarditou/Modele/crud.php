<?php
class crud{
    private $db;

    function __construct($config){
        $this->db=$config;
    }
    
    //function to insert a new record in the product table    
    public function addProduct(
    $reference,
    $categorie,
    $libelle,
    $description,
    $prix,
    $stock,
    $couleur,
    $imgProduit,
    $bloque
    ){
        try {

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
                 );
            $add= $this->db->prepare($sql);

            $add->bindparam(

        } catch () {
            
        }

    }

    //function to select and return all records in the product table 
    public function getProductList(){

     $sql = "SELECT * FROM `produits`";
     $result=$this->db->query($sql);
     return $result;
    }

}
?>


