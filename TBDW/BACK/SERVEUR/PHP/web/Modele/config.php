<?php

    $host='localhost';
    $database_name='bnekouei';
    $database_username='bnekouei';
    $database_password='bn20160';
    $charset='utf8mb4';
    
    $dsn= "mysql:host=$host;charset=$charset;dbname=$database_name";

//Tente de se connecter
try {

    //Instanciation de la connexion à la base
    $pdo = new PDO($dsn, $database_username, $database_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<p class='text-success'>Connexion to the database was successful !</p>";

 //Si échec de la connexion (du try), on attrape l'exception avec catch
} catch(PDOException $exept) {
    // echo "<p class='text-danger'>Connexion to the database was unsuccessful !</p>";
    // On affiche le message d'erreur
    throw new PDOException($exept->getMessage());
}
require_once('crud.php');
$crud = new crud($pdo);


   
?> 