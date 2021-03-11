
<!-- import header.php -->
<?php 
  $title='Contact';
  include("header.php");
?>
      <div>
        <section>
          <p>* Ces zones sont obligatoires</p>

          <form name="contact" action="../Controleur/contact_script.php" method="post">
            <fieldset>
              <strong><legend>Vos coordonnées</legend></strong>
              <label for="nom">Votre nom* :</label>
              <input
                class="form-control <?php echo $nameErr;?>"
                type="text"
                name="nom"
                id="nom"
                placeholder="Veuilez saisir votrer nom"
              
              /><br />
              <p id="nommsg"></p>
              <label for="prenom">Votre prénom* :</label>
              <input
                class="form-control"
                type="text"
                name="prenom"
                id="prenom"
                placeholder="Veuilez saisir votrer prénom"
                
              /><br />
              <p id="prenommsg"></p>
              <label>Sexe*:</label>
               <br />
              <input type="radio" id="feminin" name="gender" value="male" /> <label for="feminin">feminin</label>
              <input type="radio" id="masculin" name="gender" value="female" /> <label for="masculin">masculin</label>
              <input type="radio" id="neutre" name="gender" value="neutre" /> <label for="neutre">neutre</label>
              <br />

              <label for="ddn">Date de naissance*:</label>
              <input
                class="form-control"
                type="date"
                name="ddn"
                id="ddn"
                
              /><br />

              <label for="adresse">Adresse* :</label>
              <input
                class="form-control"
                type="text"
                name="adresse"
                id="adresse"
                
              /><br />
              <p id="adressemsg"></p>

              <label for="ville">Ville* :</label>
              <input
                class="form-control"
                type="text"
                name="ville"
                id="ville"
                
              /><br />
              <p id="villemsg"></p>

              <label for="codeP">Code Postal* :</label>
              <input
                class="form-control"
                type="number"
                name="codeP"
                id="codeP"
                maxlength="5"
              /><br />
              <p id="codePmsg"></p>

              <label for="email">Email* :</label>
              <input
                class="form-control"
                type="email"
                name="email"
                id="email"
                placeholder="dave.loper@afpa.fr"
                
              /><br />
            </fieldset>
            <fieldset>
              <strong><legend>Votre demande</legend></strong>
              <label for="sujet">Sujet* :</label>
              <select name="sujet" class="form-control" id="sujet" >
                <option selected value="">
                  Veuillez selectionner un sujet
                </option>
                <option >Mes commandes</option>
                <option >
                  Question sur un produit
                </option>
                <option >Réclamation</option>
                <option >Autres</option></select
              ><br />
              <label for="question">Votre question*:</label>
              <textarea
                class="form-control"
                id="question"
                name="question"
                
              ></textarea>
            </fieldset>
            <br />
            <input type="checkbox" name="jaccept" value="true" /> J'accepte
            le traitement informatique de ce formulaire<br /><br />
            <input
              class="btn btn-dark border border-primary"
              type="submit"
              value="Envoyer"
              name="submit"
            />
            <input
              class="btn btn-dark border border-primary"
              type="reset"
              value="Annuler"
              name="reset"
            />
          </form>
        </section>
      </div>
<?php 
  include("footer.php");
?>