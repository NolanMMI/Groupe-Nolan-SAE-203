<?php
include 'login3.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = connexionDB();
    $requete = 'INSERT INTO prof (id_prof, nom_prof, prenom_prof, login_prof, motdepasse_prof) VALUES (:id_prof, :nom_prof, :prenom_prof, :login_prof, :motdepasse_prof)'; 
    $stmt = $pdo->prepare($requete);
    
    // Lier les paramètres
    $stmt->bindParam(':id_prof', $_POST['id_prof']);
    $stmt->bindParam(':nom_prof', $_POST['nom_prof']);
    $stmt->bindParam(':prenom_prof', $_POST['prenom_prof']);
    $stmt->bindParam(':login_prof', $_POST['login_prof']);
    $stmt->bindParam(':motdepasse_prof', $_POST['motdepasse_prof']);
    
    // Exécuter la requête
    $stmt->execute();
    
    // Rediriger vers la liste des candidats
    header('Location: adminprofesseur.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Professeur</title>
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>
    <div class="header">
        <div class="logo"></div>
        <div class="menu">
            <a href="dashboard.php">Tableau de bord</a>
            <a href="deconnexion.php">Déconnexion</a>
        </div>
    </div>
    <div class="Luffy">
        <div class="form-container">
            <form id="prof-form" method="">
            <div class="form-group">
                    <label for="id_prof">Numéro</label>
                    <input type="text" id="id_prof" name="id_prof" required>
                </div>
                <div class="form-group">
                    <label for="nom_prof">Nom</label>
                    <input type="text" id="nom_prof" name="nom_prof" required>
                </div>
                <div class="form-group">
                    <label for="prenom_prof">Prénom</label>
                    <input type="text" id="prenom_prof" name="prenom_prof" required>
                </div>
                <div class="form-group">
                    <label for="login_prof">Login</label>
                    <input type="text" id="login_prof" name="login_prof" required>
                </div>
                <div class="form-group">
                    <label for="motdepasse_prof">Mot de passe</label>
                    <input type="password" id="motdepasse_prof" name="motdepasse_prof" required>
                </div>
                <div class="button-group">
                    <button type="submit">Créer</button>
                </div>
            </form>
        </div>
    </div>
    <script src="formulaire.js"></script>
</body>
</html>
