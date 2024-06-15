<?php
include 'login3.php'; // Inclure le fichier contenant la fonction de connexion

$pdo = connexionDB(); // Utiliser la fonction de connexion

$evalName = $_POST['evalName'];
$coeff = $_POST['coeff'];
$notes = $_POST['notes'];

try {
    $pdo->beginTransaction();

    // Insérer dans la table evaluation
    $stmt = $pdo->prepare("INSERT INTO evaluation (name, coeff) VALUES (?, ?)");
    $stmt->execute([$evalName, $coeff]);
    $evaluationId = $pdo->lastInsertId();

    // Insérer dans la table note
    $stmt = $pdo->prepare("INSERT INTO note (id_eleve, note, evaluation_id) VALUES (?, ?, ?)");
    foreach ($notes as $id_eleve => $note) {
        $stmt->execute([$id_eleve, $evaluationId, $note]);
    }

    $pdo->commit();
    // Rediriger vers une page de succès avec un message
    header("Location: success.php?message=success");
    exit;
} catch (\PDOException $e) {
    $pdo->rollBack();
    throw $e;
}
?>
