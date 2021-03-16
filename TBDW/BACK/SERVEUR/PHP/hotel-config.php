 <?php
    $host='localhost';
    $database_name='hotel';
    $database_username='root';
    $database_password='';
    $charset='utf8';
    
    $dsn= "mysql:host=$host;charset=$charset;dbname=$database_name";

try {
    $pdo = new PDO($dsn, $database_username, $database_password);
} catch(PDOException $exept) {
    throw new PDOException($exept->getMessage());
}
   
?> 