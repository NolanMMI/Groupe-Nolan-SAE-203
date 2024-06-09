<?php
include 'login3.php';
$pdo = connexionDB();

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM prof WHERE id_prof = ?');
    $stmt->execute([$_GET['id']]);
    $candidat = $stmt->fetch();
    if (!$candidat) {
        die('Candidat non trouvé.');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('UPDATE prof SET nom_prof = ?, prenom_prof = ?, login_prof = ?, motdepasse_prof = ? WHERE id_prof = ?');
    $stmt->execute([$_POST['nom_prof'], $_POST['prenom_prof'], $_POST['login_prof'], $_POST['motdepasse_prof'], $_POST['id_prof']]);
    header('Location: adminprofesseur.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier un professeur</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="starter-template">
        <h1>Modifier un proffesseur</h1>
        <form method="post" action="modifier_professeur.php">
            <input type="hidden" name="id_prof" value="<?= htmlspecialchars($candidat['id_prof']) ?>">
            <div class="form-group">
                <label for="nom_prof">Nom du professeur</label>
                <input type="text" class="form-control" id="nom_prof" name="nom_prof" value="<?= htmlspecialchars($candidat['nom_prof']) ?>" required>
            </div>
            <div class="form-group">
                <label for="prenom_prof">Prenom du professeur</label>
                <input type="text" class="form-control" id="prenom_prof" name="prenom_prof" value="<?= htmlspecialchars($candidat['prenom_prof']) ?>" required>
            </div>
            <div class="form-group">
                <label for="login_prof">login du professeur</label>
                <input type="text" class="form-control" id="login_prof" name="login_prof" value="<?= htmlspecialchars($candidat['login_prof']) ?>" required>
            </div>
            <div class="form-group">
                <label for="motdepasse_prof">mot de passe du professeur</label>
                <input type="text" class="form-control" id="motdepasse_prof" name="motdepasse_prof" value="<?= htmlspecialchars($candidat['motdepasse_prof']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="adminprofesseur.php" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>
</body>
</html>
