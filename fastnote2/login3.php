<?php //connexion à la BD
function connexionDB(){
    $host = "mysql-fastnotes.alwaysdata.net";
    $dbname = "fastnotes_1";
    $user ="fastnotes";
    $password ="#Av19082004";

    try {
        // Création d'un objet connexion
        $pdo = new PDO('mysql:host='. $host . ';dbname='. $dbname .';charset=utf8', $user, $password);
        // Définition du niveau de gestion d'erreur
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
     }
    catch(PDOException $e) {
        echo "Erreur : ".$e -> getMessage()."<br/>";
}
}
?>
