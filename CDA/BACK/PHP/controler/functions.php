<?php
//fonction qui permette de générer un lien.
function lien($link,$title){
    $a ='<a href="'.$link.'">'.$title.'</a>';
    return $a;
}
// fonction qui calcul la somme des valeurs d'un tableau
function somme($tab){
    $resultat = 0;
    for($i=0 ; $i<sizeof($tab) ; $i++){
        $resultat += $tab[$i];
    }
    return $resultat;
}
// une fonction qui vérifie le niveau de complexité d'un mot de passe
function complex_password($password){
    if(is_string($password) && strlen($password)>=8){
        $resultat = count_chars($password, 1);
        $chiffre = false;
        $majuscule = false;
        $minuscule = false;
        foreach ($resultat as $j => $val) {
            if(48<=$j && $j<=57){
                $chiffre = true;
                continue;
            }
            if(65<=$j && $j<=90){
                $majuscule = true;
                continue;
            }
            if(97<=$j && $j<=122){
                $minuscule = true;
                continue;
            }
        }
        if($chiffre && $minuscule && $majuscule){
            return true;
        }
    }
    else{
        return false;
    }
}