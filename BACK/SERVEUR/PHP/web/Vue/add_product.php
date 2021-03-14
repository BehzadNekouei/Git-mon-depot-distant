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
                required
              /><br />
              <label for="Categorie">Catégorie :</label>
              <select name="categorie" class="form-control" id="Categorie" required>
                <option value=""></option>
                <?php
    foreach($categories as $c)
    {
        ?>
        <option value = "<?php echo $c->cat_id?>"> <?php echo $c->cat_nom?></option>
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
                required
              /><br />
              <label for="Description">Description :</label>
              <textarea
                class="form-control"
                id="description"
                name="description"
                required
              ></textarea><br />
              <label for="prix">Prix :</label>
              <input
                class="form-control"
                type="number"
                name="prix"
                id="prix"
                required
              /><br />
              <label for="stock">Stock :</label>
              <input
                class="form-control"
                type="number"
                name="stock"
                id="stock"
                required
              /><br />
              <label for="couleur">Couleur :</label>
              <input
                class="form-control"
                type="text"
                name="couleur"
                id="couleur"
                required
              /><br />
          <div class="custom-file">
            <label for="imgProduit" class="custom-file-label">Photo</label><br>
            <input 
            accept="image/*"
            class="custom-file-input"
            id="imgProduit"
            type="file" 
            name="imgProduit"
            required>
            </div>
            <label>Produit bloqué?:</label>
               <br />
              <input type="radio" id="oui" name="bloque" value="1" required/> <label for="oui">Oui</label>
              <input type="radio" id="non" name="bloque" value="0" /> <label for="non"> Non </label>
              
              <br />
              <a href="tableau.php"><button type="button" class="btn btn-secondary mr-3">Retour</button></a>
            <input
              class="btn btn-primary"
              type="submit"
              value="Enregistrer"
              name="submit"
            />
          </form>
        </section>
      </div>
      <?php include('footer.php')
?>

