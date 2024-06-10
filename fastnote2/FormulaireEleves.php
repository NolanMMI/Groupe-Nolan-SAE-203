<?php
include 'login3.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$pdo = connexionDB();
    $requete = 'INSERT INTO eleves (id_eleve, age_eleve, nom, prenom, TP ,login_eleve ,motdepasse_eleve) VALUES (:id_eleve, :age_eleve, :nom, :prenom, :TP ,:login_eleve ,:motdepasse_eleve)'; 
    $stmt = $pdo->prepare($requete);

    // Lier les paramètres
    $stmt->bindParam(':id_eleve', $_POST['id_eleve']);
    $stmt->bindParam(':age_eleve', $_POST['age_eleve']);
    $stmt->bindParam(':nom', $_POST['nom']);
    $stmt->bindParam(':prenom', $_POST['prenom']);
    $stmt->bindParam(':TP', $_POST['TP']);
    $stmt->bindParam(':login_eleve', $_POST['login_eleve']);
    $stmt->bindParam(':motdepasse_eleve', $_POST['motdepasse_eleve']);
    
// Après l'exécution de l'insertion
try {
    $stmt->execute();
    // Rediriger vers la liste des candidats
    header('Location: adminEtudiant.php');
    exit;
} catch (PDOException $e) {
    echo 'Erreur d\'insertion : ' . $e->getMessage();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Élève</title>
    <link rel="stylesheet" href="FormulaireEleves.css">
</head>
<body>
    <div class="header">
        <div class="logo"></div>
        <div class="menu">
            <a href="#">Tableau de bord</a>
            <a href="#">Déconnexion</a>
        </div>
    </div>
    <div class="container">
        <div class="form-container">
            <form id="eleve-form">
            <div class="form-group">
            <label for="id_eleve">Numéro</label>
            <input type="text" id="id_eleve" name="id_eleve" required>
        </div>
        <div class="form-group">
            <label for="age_eleve">age</label>
            <input type="number" id="age_eleve" name="age_eleve" required>
        </div>
        <div class="form-group">
            <label for="nom">nom</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="TP">TP</label>
            <input type="text" id="TP" name="TP" required>
        </div>
        <div class="form-group">
            <label for="login_eleve">Login</label>
            <input type="text" id="login_eleve" name="login_eleve" required>
        </div>
        <div class="form-group">
            <label for="motdepasse_eleve">Mot de passe</label>
            <input type="password" id="motdepasse_eleve" name="motdepasse_eleve" required>
        </div>
       
            <button type="submit">Créer</button>
        
            </form>
        </div>
    </div>
    <script src="FormulaireEleves.js"></script>
</body>
</html>
