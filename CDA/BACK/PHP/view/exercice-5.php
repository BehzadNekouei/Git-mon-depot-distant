<?php
$titile='Exercice 2';
include ('header.php');
include ('../controler/exo-5.php');
?>
<div class="container">
    <h1>2. Capitales</h1>
    <p>A partir du tableau:</p>
    <p>1. Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.</p>
    <table class="table table-dark table-striped table-responsive">
        <thead>
            <tr>
                <th>La caplitale</th>
                <th>Le pays</th>
            </tr>
        </thead>
        <tbody>
            <?php
                ksort($capitales);
                foreach($capitales as $capitale => $pays){
            ?>
            <tr>
                <td>
                    <?php echo $capitale ?>
                </td>
                <td>
                    <?php echo $pays ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <p>2. Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.</p>
    <table class="table table-dark table-striped table-responsive">
        <thead>
            <tr>
                <th>Le pays</th>
                <th>La caplitale</th>
            </tr>
        </thead>
        <tbody>
            <?php
                asort($capitales);
                foreach($capitales as $capitale => $pays){
            ?>
            <tr>
                <td>
                    <?php echo $pays ?>
                </td>
                <td>
                    <?php echo $capitale ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <p>3. Affichez le nombre de pays dans le tableau.</p>
    <p>"Il y a
        <strong>
            <?php echo sizeof($capitales) ?>
        </strong>
        pays dans le tableau."
    </p>
    <p>4. Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.</p>
    <table class="table table-dark table-striped table-responsive">
        <thead>
            <tr>
                <th>La caplitale</th>
                <th>Le pays</th>
            </tr>
        </thead>
        <tbody>
            <?php
                removeCapital($capitales);
                foreach($capitales as $capitale => $pays){
            ?>
            <tr>
                <td>
                    <?php echo $capitale ?>
                </td>
                <td>
                    <?php echo $pays ?>
                </td>
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