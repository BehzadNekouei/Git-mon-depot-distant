<?php
$titile='Exercice 1';
include ('header.php');
?>
<div class="container">
    <h1>Exercice 1</h1>
    <p>Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...</p>
    <p>
    <?php for($i=0; $i<150 ; $i++){
        $i++;
        echo $i. ' ';
    }
    ?>
    </p>
</div>
<?php
include ('footer.php');
?>