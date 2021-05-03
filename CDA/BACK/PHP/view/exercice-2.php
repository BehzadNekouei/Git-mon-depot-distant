<?php
$titile='Exercice 2';
include ('header.php');
?>
<div class="container">
    <h1>Exercice 2</h1>
    <p>Ecrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers</p>
    <?php for($i= 1; $i<=500; $i++){
    ?>
    <p>"Je dois faire des sauvegardes régulières de mes fichiers"</p>
    <?php 
    }
    ?>
</div>
<?php
include ('footer.php');
?>