<?php
$titile='Exercice';
include ('header.php');
?>
<div class="container">
    <h1>Exercice 1</h1>
    <p>Ecrivez un script qui affiche l'adresse IP du serveur et celle du client.</p>
    <p>l'adresse IP du client est : 
    <strong>
    <?php echo $_SERVER['REMOTE_ADDR'];?>
    </strong>
    </p>
    <p>l'adresse IP du server est :
    <strong>
    <?php echo $_SERVER["SERVER_NAME"];?>
    </strong>
    </p>
</div>
<?php
include ('footer.php');
?>