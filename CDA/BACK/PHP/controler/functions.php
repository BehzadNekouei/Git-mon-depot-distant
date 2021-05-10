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
// une fonction qui vérifie le niveau de complexité d'un mot de passe sans regex et sans preg_match
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
// 
// fonction pour savoir si une année est bissextile ou non
function bissextile($year){
    $days = cal_days_in_month(CAL_GREGORIAN,2,$year);
    if($days == 29){
        return true;
    }
    else{
        return false;
    }
}
// fonction pour valider une date
function validateDate($date) {
    $oDate = DateTime::createFromFormat($date , "d/m/Y");
    $errors = DateTime::getLastErrors();
    if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
        return false;
    }
    else{
        return true;
    }
}
// fonction qui return 1 mois à la date courante.
function nextMonth(){
    $nextmonth = date("d/m/Y", strtotime('+1 month'));
    return $nextmonth;
}

