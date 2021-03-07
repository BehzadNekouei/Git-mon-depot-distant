<?php 
    include("header.php");
?>
      <div>
        <section>
          <p>* Ces zones sont obligatoires</p>

          <form name="contact" action="http://bienvu.net/script.php" method="post" onsubmit="return validateForm(this);" >
            <fieldset>
              <strong><legend>Vos coordonnées</legend></strong>
              <label for="nom">Votre nom* :</label>
              <input
                class="form-control"
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
              <label for="gender">Sexe*:</label>
               <br />
              <input type="radio" id="feminin" name="gender" value="male" required/>feminin
              <input type="radio" id="masculin" name="gender" value="female" />masculin
              <input type="radio" id="neutre" name="gender" value="neutre" />neutre
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
                type="text"
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
                required
              /><br />
            </fieldset>
            <fieldset>
              <strong><legend>Votre demande</legend></strong>
              <label for="sujet">Sujet* :</label>
              <select name="sujet" class="form-control" id="sujet" required>
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
                required
              ></textarea>
            </fieldset>
            <br />
            <input type="checkbox" name="jaccept" value="jaccept" required/> J'accepte
            le traitement informatique de ce formulaire<br /><br />
            <input
              class="btn btn-dark border border-primary"
              type="submit"
              value="Envoyer"
             
            />
            <input
              class="btn btn-dark border border-primary"
              type="reset"
              value="Annuler"
            />
          </form>
        </section>
      </div>
      <?php 
    include("footer.php");
?>