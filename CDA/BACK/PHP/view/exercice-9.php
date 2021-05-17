<?php
$titile='Les fichier';
include ('header.php');
include ('../controler/exo-9.php');
?>
<div class="container">
    <div class="row mt-5">
        <h1>Exercices</h1>
        <h3>Lecture d'un fichier</h3>
        <p>Téléchargez <a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/liens.txt" target="_blank">ce fichier</a>, il contient une liste de sites indispensables à la compréhension du monde moderne. </p>
        <p>Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.</p>
        <ul class="list-group">
            <?php 
                foreach ($list as $link){
            ?>
            <li class="list-group-item"><a href="<?php echo $link ?>" title="<?php echo $link ?>"><?php echo $link; ?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div class="row mt-5">
        <h3>Récupération d'un fichier distant</h3>
        <p>Un site partenaire mets à votre disposition une liste des nouveaux utilisateurs inscrits. </p>
        <p>Cette liste est disponible à cette adresse <span class="text-danger bg-light"> http://bienvu.net/misc/customers.csv</span>.</p>
        <p>Il s'agit d'un fichier <span class="text-danger bg-light">CSV</span> où chaque ligne représente un nouvel utilisateur.
        Les différents champs sont <span class="text-danger bg-light">Surname</span>, <span class="text-danger bg-light">Firstname</span>, <span class="text-danger bg-light">Email</span>, <span class="text-danger bg-light">Phone</span>, <span class="text-danger bg-light">City</span>, <span class="text-danger bg-light">State</span>, ils sont séparés par une virgule <span class="text-danger bg-light">,</span> .</p>
        <p>1. Utilisez la fonction <span class="text-danger bg-light">file()</span> pour récupérer le contenu de ce fichier.</p>
        <p>2. Découpez chaque ligne en utilisant une des fonctions suivantes:<span class="text-danger bg-light">explode()</span>  ou <span class="text-danger bg-light">preg_split()</span></p>
        <p>3. Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau.</p>
        <table class="mt-5 table table-dark table-striped table-responsive">
            <thead>
                <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($customers as $customer){
                        $person = explode("," , $customer);
                ?>
                <tr>
                    <?php
                        foreach($person as $detail){
                    ?>
                    <td><?php echo $detail ?></td>
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
</div>
<?php
include ('footer.php');
?>