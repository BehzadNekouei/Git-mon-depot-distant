<?php 
  $title='Product details';
  include("header.php");//import header.php
    
  require_once("../Modele/config.php");  // Connexion base

  require_once("../Modele/crud.php"); // Call fonctions in crud

  $result= $crud->getProductList();

?>
      
            <?php
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
            ?>
             <?php echo $row['pro_id'] ?>
            <?php } ?>
            </tbody>
          </table>
        </section>
      </div>
      <?php 
    include("footer.php");
?>
