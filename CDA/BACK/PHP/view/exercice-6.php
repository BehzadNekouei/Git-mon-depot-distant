<?php
$titile='Exercice 3';
include ('header.php');
include ('../controler/exo-6.php');
?>
<div class="container">
    <h1>3. Départements</h1>
    <p>A partir du tableau:</p>
    <p>1. Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements</p>
    <ul class="list-group">
        <?php
            foreach ($departements as $region => $departement){
        ?>
            <li class="list-group-item">
                <strong>
                <?php
                  echo $region;
                ?>
                : 
                </strong>
                <?php
                    for($i=0; $i<sizeof($departement); $i++){
                ?>
                <span class="mx-3">
                <?php
                    echo $departement[$i];
                }
                ?>
                </span>
            </li>
        <?php
        }
        ?>
    </ul>
    <p class="mt-5">2. Affichez la liste des régions suivie du nombre de départements</p>
    <ul class="list-group">
        <?php
            asort($departements);
            foreach ($departements as $region => $departement ){
        ?>
            <li class="list-group-item">
            <strong>
        <?php
            echo $region.' : ';
        ?>
        </strong>
        <?php
            echo sizeof($departement);
        ?>
        </li>
        <?php
        }
        ?>
</div>

<?php
include ('footer.php');
?>