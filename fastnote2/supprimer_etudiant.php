<?php
include 'login3.php';
$pdo = connexionDB();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $pdo->prepare('DELETE FROM eleves WHERE id_eleve = ?');
    $stmt->execute([$id]);

    header('Location: adminEtudiant.php');
} else {
    echo "ID de ressource non spécifié.";
}
?>
