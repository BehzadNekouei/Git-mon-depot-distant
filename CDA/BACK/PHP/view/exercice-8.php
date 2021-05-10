<?php
date_default_timezone_set("Europe/Paris");
$titile='Exercices';
include ('header.php');
include ('../controler/functions.php');
?>
<div class="container">
    <h1 class="mt-5">Exercices</h1>
    <!-- Exercice 1 -->
    <h3 class="mt-5">1- Trouvez le numéro de semaine de la date suivante : 14/07/2019. </h3>
    <p>Le numéro de semaine est :
    <strong>
        <?php
            echo date("W");
        ?>
    </strong>
    </p>
    <!-- Exercice 2 -->
    <h3 class="mt-5">2- Combien reste-t-il de jours avant la fin de votre formation.</h3>
    <p>Il reste 
    <strong>
    <?php
        $begin = new DateTime("10-12-2021");
        $end = new DateTime(date("d/m/Y"));
        $days = $end->diff($begin);
        echo $days->format('%R%a');
    ?>
    </strong>
    jours avant la fin de formation.</p>
    <!-- Exercice 3 -->
    <h3 class="mt-5">3- Comment déterminer si une année est bissextile ? </h3>
    <h2>Example</h2>
    <pre>$year=2020</pre>
    <?php
        $year=2020;
        if(bissextile($year)){
    ?>
        <p class='text-success'>Cette année est bissextile!</p>
    <?php
        }
        else {
    ?>
        <p class='text-danger'>Cette n'année pas est bissextile!</p>
    <?php
        }
    ?>
    <!-- Exercice 4 -->
    <h3 class="mt-5">4- Montrez que la date du 32/17/2019 est erronée.  </h3>
    <?php
        if (validateDate("32/17/2019")) {
    ?>
    <p class='text-success'>La date est valide!</p>
    <?php
        }
        else{
    ?>
    <p class='text-danger'>La date est erronée!</p>
    <?php
        }
    ?>
    <!-- Exercice 5 -->
    <h3 class="mt-5">5- Affichez l'heure courante sous cette forme : 11h25.</h3>
    <strong>
        <?php echo date("H:i") ?>
    </strong>
    <!-- Exercice 6 -->
    <h3 class="mt-5">6- Ajoutez 1 mois à la date courante. </h3>
    <?php
        echo nextMonth();
    ?>
    <!-- Exercice 7 -->
    <h3 class="mt-5">7- Que s'est-il passé le 1000200000? </h3>
    <?php
        echo date("d/m/Y", 1000200000);
    ?>
    <h4 class="mt-5">Attentats du 11 septembre 2001</h4>
    <p class="mb-5">Les attentats du 11 septembre 2001 sont quatre attentats-suicides islamistes perpétrés le même jour aux États-Unis et provoquant la mort de 2 977 personnes,
     dans le centre de Manhattan à New York, à Arlington et à Shanksville en Pennsylvanie,
      en moins de deux heures, entre 8 h 14 et 10 h 3.</p>
</div>
<?php
include ('footer.php');
?>
