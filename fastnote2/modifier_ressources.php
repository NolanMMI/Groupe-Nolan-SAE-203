<?php
include 'login3.php';
$pdo = connexionDB();

if (isset($_GET['id_mod'])) {
    $stmt = $pdo->prepare('SELECT * FROM ressources WHERE id_mod = ?');
    $stmt->execute([$_GET['id_mod']]);
    $candidat = $stmt->fetch();
    if (!$candidat) {
        die('Candidat non trouvé.');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('UPDATE ressources SET id_mod = ?, nom_mod = ?, id_prof = ? WHERE id_mod = ?');
    $stmt->execute([$_POST['id_mod'], $_POST['nom_mod'], $_POST['id_prof'], $_POST['id_mod']]);
    header('Location: adminmodule.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier une ressources</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="starter-template">
        <h1>Modifier une ressources</h1>
        <form method="post" action="modifier_ressources.php">
            <input type="hidden" name="id_mod" value="<?= htmlspecialchars($candidat['id_mod']) ?>">
            <div class="form-group">
                <label for="nom">Nom de la ressources</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= htmlspecialchars($candidat['nom_mod']) ?>" required>
            </div>
            <div class="form-group">
                <label for="Prenoms">nom du professeur</label>
                <input type="text" class="form-control" id="Prenoms" name="Prenoms" value="<?= htmlspecialchars($candidat['id_prof']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="adminmodule.php" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>