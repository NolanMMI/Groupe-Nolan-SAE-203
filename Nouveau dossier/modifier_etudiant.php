<?php
include 'login3.php';
$pdo = connexionDB();

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM eleves WHERE id_eleve = ?');
    $stmt->execute([$_GET['id']]);
    $candidat = $stmt->fetch();
    if (!$candidat) {
        die('Candidat non trouvé.');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('UPDATE eleves SET age_eleve = ?, nom = ?, prenom = ?, TP = ?, login_eleve = ?, motdepasse_eleve = ? WHERE id_eleve = ?');
    $stmt->execute([$_POST['age_eleve'], $_POST['nom'], $_POST['prenom'], $_POST['TP'], $_POST['login_eleve'], $_POST['motdepasse_eleve'], $_POST['id_eleve']]);
    header('Location: adminEtudiant.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier un etudiant</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="starter-template">
        <h1>Modifier un etudiant</h1>
        <form method="post" action="modifier_etudiant.php">
            <input type="hidden" name="id_eleve" value="<?= htmlspecialchars($candidat['id_eleve']) ?>">
            <div class="form-group">
                <label for="age_eleve">Age de l'étudiant</label>
                <input type="text" class="form-control" id="age_eleve" name="age_eleve" value="<?= htmlspecialchars($candidat['age_eleve']) ?>" required>
            </div>
            <div class="form-group">
                <label for="nom">Nom de l'étudiant</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= htmlspecialchars($candidat['nom']) ?>" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom de l'étudiant</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?= htmlspecialchars($candidat['prenom']) ?>" required>
            </div>
            <div class="form-group">
                <label for="TP">TP</label>
                <input type="text" class="form-control" id="TP" name="TP" value="<?= htmlspecialchars($candidat['TP']) ?>" required>
            </div>
            <div class="form-group">
                <label for="login_eleve">Login de l'étudiant</label>
                <input type="text" class="form-control" id="login_eleve" name="login_eleve" value="<?= htmlspecialchars($candidat['login_eleve']) ?>" required>
            </div>
            <div class="form-group">
                <label for="motdepasse_eleve">Mot de passe de l'étudiant</label>
                <input type="text" class="form-control" id="motdepasse_eleve" name="motdepasse_eleve" value="<?= htmlspecialchars($candidat['motdepasse_eleve']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="adminEtudiant.php" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>
</body>
</html>
