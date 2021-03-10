<!-- import header.php -->
<?php
      $title='ajouter un produit';
      include('header.php');
      require_once("../Modele/config.php");  // Connexion base
      $result = $pdo->query("SELECT * FROM categories ORDER BY cat_id"); // Requête pour avoir les cat_id
      $categories = $result->fetchAll(PDO::FETCH_OBJ);
?>
      <div>
        <section>
          <br>
          <form name="addProduct" action="../Controleur/add_product_script.php" method="post" enctype="multipart/form-data">
          <label for="productName">Référence:</label>
              <input
                class="form-control"
                type="text"
                name="reference"
                id="reference"
               
              /><br />
              <label for="Categorie">Catégorie :</label>
              <select name="categorie" class="form-control" id="Categorie" >
                <option value=""></option>
                <?php
    foreach($categories as $c)
    {
        ?>
        <option value = "<?= $c->cat_id?>"> <?=$c->cat_id."-".$c->cat_nom?></option>
        <?php
    }
    ?>
                </select
              ><br />
              <label for="Libelle">Libellé :</label>
              <input
                class="form-control"
                type="text"
                name="libelle"
                id="libelle"
               
              /><br />
              <label for="Description">Description :</label>
              <textarea
                class="form-control"
                id="description"
                name="description"
                
              ></textarea><br />
              <label for="prix">Prix :</label>
              <input
                class="form-control"
                type="number"
                name="prix"
                id="prix"
    
              /><br />
              <label for="stock">Stock :</label>
              <input
                class="form-control"
                type="number"
                name="stock"
                id="stock"
    
              /><br />
              <label for="couleur">Couleur :</label>
              <input
                class="form-control"
                type="text"
                name="couleur"
                id="couleur"
               
              /><br />
          <div class="custom-file">
            <label for="imgProduit" class="custom-file-label">Photo</label><br>
            <input 
            accept="image/*"
            class="custom-file-input"
            id="imgProduit"
            type="file" 
            name="imgProduit">
            </div>
            <label>Produit bloqué?:</label>
               <br />
              <input type="radio" id="oui" name="bloque" value="1" /> <label for="oui">Oui</label>
              <input type="radio" id="non" name="bloque" value="null" /> <label for="non"> Non </label>
              
              <br />
              <input
              class="btn btn-dark border border-primary"
              type="submit"
              value="Enregistrer"
              name="submit"
            />
            <input
              class="btn btn-dark border border-primary"
              type="reset"
              value="Vider la forme"
              name="reset"
            />
          </form>
        </section>
      </div>
      <?php include('footer.php')
?>

