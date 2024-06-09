<?php
include 'login3.php';
$pdo = connexionDB();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    // Supprimer la ressource
    $stmt = $pdo->prepare('DELETE FROM ressources WHERE id_prof = ?');
    $stmt->execute([$id]);

    header('Location: adminmodule.php');
} else {
    echo "ID de ressource non spécifié.";
}
?>
