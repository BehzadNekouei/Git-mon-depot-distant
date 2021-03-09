<?php 
  $title='Tableau';
  include("header.php");//import header.php
    
  require_once("../Modele/config.php");  // Connexion base

  require_once("../Modele/crud.php"); // Call fonctions in crud

  $result= $crud->getProductList();

?>
      <div class="table-responsive-lg">
        <section>
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th>Photos</th>
                <th>ID</th>
                <th>Référence</th>
                <th>Libellé</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Couleur</th>
                <th>Ajout</th>
                <th>Motif</th>
                <th>Bloqué</th>
              </tr>
            </thead>
            <tbody>
            <?php
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
            ?>
             <tr >
              <td class="table-warning" ><img height="100" width="100" src="<?php $_SERVER['DOCUMENT_ROOT']?>/Contenu/img/<?php echo $row['pro_id'] ?>.<?php echo $row['pro_photo'] ?>" alt=""></td>
              <td><?php echo $row['pro_id'] ?></td>
              <td><?php echo $row['pro_ref'] ?></td>
              <td class="table-warning"><a href="detail.php?pro_id=<?php echo $row['pro_id'] ?>" title="<?php echo $row['pro_libelle'] ?>"><?php echo $row['pro_libelle'] ?></a></td>
              <td><?php echo $row['pro_prix'] ?></td>
              <td><?php echo $row['pro_stock'] ?></td>
              <td><?php echo $row['pro_couleur'] ?></td>
              <td><?php echo $row['pro_d_ajout'] ?></td>
              <td><?php echo $row['pro_d_modif'] ?></td>
              <td><?php echo $row['pro_bloque'] ?></td>
             </tr>

            <?php } ?>
            </tbody>
          </table>
        </section>
      </div>
      <?php 
    include("footer.php");
?>
