<?php 
function connexionDB(){
    $host = "localhost";
    $dbname = "fastnotes_1";
    $user ="root";
    $password ="";

    try {
 
        $pdo = new PDO('mysql:host='. $host . ';dbname='. $dbname .';charset=utf8', $user, $password);
     
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
     }
    catch(PDOException $e) {
        echo "Erreur : ".$e -> getMessage()."<br/>";
}
}
?>
