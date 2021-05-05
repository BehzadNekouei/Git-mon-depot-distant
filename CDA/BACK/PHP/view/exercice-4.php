<?php
$titile='Exercice 4';
include ('header.php');
include ('../controler/exo-4.php');
?>
<div class="container">
    <h1>1. Mois de l'année non bissextile</h1>
    <p>Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.</p>
    <p>Utilisez le nom des mois comme clés de votre tableau associatif.</p>
    <p>Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.</p>
    <p>Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat.</p>
    <table class="table table-dark table-striped table-responsive">
        <thead>
            <tr>
                <th>Le mois</th>
                <th>le nombre de jours</th>
            </tr>
        </thead>
            <?php foreach($nonBissextile as $month => $days){
            ?>
            <tr>
                <td><?php echo $month; ?></td>
                <td><?php echo $days; ?></td>
            </tr>
            <?php
            };
            ?>
        <tbody>
        </tbody>
    </table>
</div>
<?php
include ('footer.php');
?>
