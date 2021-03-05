<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
"19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
"19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
);

// Exercice 1
    echo "<h3>Exercice 1</h3>";
    $key= array_search("Validation",$a["19002"]) ;
    echo "la validation du groupe 19002 a lieu au ". ($key+1). "ème semaine.<br><br>";


// Exercice 2
    echo "<h3>Exercice 2</h3>";
    $tab= array_keys($a["19001"],"Stage") ;
    $position = array_pop($tab);
    echo "la position de la dernière occurrence de Stage pour le groupe 19001 est: ".$position. "<br><br>";

// Exercice 3  
    echo "<h3>Exercice 3</h3>";
    echo '<br>Extraire, dans un nouveau tableau, les codes des groupes.<br>';
    $tab2= array_keys($a);
    print_r($tab2);

// Exercice 4

    echo "<h3>Exercice 4</h3>";
    echo '<br>Combien de semaines dure le stage du groupe 19003 ?.<br>';
    $tab3= array_keys($a['19003'],"Stage");
    $dure= count($tab3);
    echo "Le stage du groupe 19003 dure ".$dure.' semaines.<br>';
    ?> 
</body>
</html>