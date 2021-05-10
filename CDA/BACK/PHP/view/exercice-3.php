<?php
$titile='Exercice 2';
include ('header.php');
?>
<div class="container">
    <h1>Exercice 3</h1>
    <p>Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML</p>
    <table class="table table-dark table-striped table-responsive">
        <thead>
            <tr>
                <th>-</th>
                <?php
                    for($a=1; $a<=12; $a++){
                ?>
                <th><?php echo $a;?></th>
                <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                for($b=1; $b<=12; $b++){
            ?>
            <tr>
                <th><?php echo $b; ?></th>
                <?php
                    for($c=1; $c<=12; $c++){
                ?>
                <td><?php echo $b*$c; ?></td>
                <?php
                }
                ?>
            </tr>
            <?php
            }
            ?>
            
        </tbody>
    </table>
</div>
<?php
include ('footer.php');
?>