<?php
$titile='Exercices';
include ('header.php');
include ('../controler/functions.php');
?>
<div class="container">
    <!-- Exercice 1 -->
    <h1 class="mt-5">Exercice 1</h1>
    <h3>Ecrivez une fonction qui permette de générer un lien.</h3>
    <p>La fonction doit prendre deux paramètres, le lien et le titre</p>
    <pre>lien("https://www.reddit.com/", "Reddit Hug");</pre>
    <p>Appelée de cette façon, la fonction doit générer le lien</p>
    <?php echo lien("https://www.reddit.com/", "Reddit Hug") ?>
    <!-- Exercice 2 -->
    <h1 class="mt-5">Exercice 2</h1>
    <h3>Ecrivez une fonction qui calcul la somme des valeurs d'un tableau</h3>
    <p>La fonction doit prendre un paramètre de type tableau</p>
    <h2>Examples</h2>
    <pre>
        $tab = array(4, 3, 8, 2);
        $resultat = somme($tab);
    </pre>
    <p>$resultat = 
        <strong>
        <?php 
            $tab = array(4, 3, 8, 2);
            $resultat = somme($tab);
            echo $resultat;
        ?>
        </strong>
     </p>
    <!-- Exercice 3 -->
    <h1 class="mt-5">Exercice 3</h1>
    <h3>Créer une fonction qui vérifie le niveau de complexité d'un mot de passe</h3>
    <p>Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :</p>
    <p>Faire au moins 8 caractères de long</p>
    <p>Avoir au moins 1 chiffre</p>
    <p>Avoir au moins une majuscule et une minuscule</p>
    <h2>Example</h2>
    <pre>Password = 'TopSecret42' </pre>
    <?php
        $password ='TopSecret42';
        $test = complex_password($password);
        if($test){
    ?>
    <p class="text-success">The password is correct!</p>
    <?php
        }
        else{
    ?>
    <p class="text-danger">The password is incorrect!</p>
    <?php
        }
    ?>
</div>
<?php
include ('footer.php');
?>
