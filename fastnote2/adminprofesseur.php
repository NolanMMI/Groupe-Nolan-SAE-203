<?php
include 'login3.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = connexionDB();
    $requete = 'INSERT INTO prof (id_prof, nom_prof, prenom_prof, login_prof, motdepasse_prof) VALUES (:id_prof, :nom_prof, :prenom_prof, :login_prof, :motdepasse_prof)'; 
    $stmt = $pdo->prepare($requete);
    

    $stmt->bindParam(':id_prof', $_POST['id_prof']);
    $stmt->bindParam(':nom_prof', $_POST['nom_prof']);
    $stmt->bindParam(':prenom_prof', $_POST['prenom_prof']);
    $stmt->bindParam(':login_prof', $_POST['login_prof']);
    $stmt->bindParam(':motdepasse_prof', $_POST['motdepasse_prof']);
    

    try {
        $stmt->execute();
    
        header('Location: adminprofesseur.php');
        exit;
    } catch (PDOException $e) {
        echo 'Erreur d\'insertion : ' . $e->getMessage();
    }
}

$pdo = connexionDB();
$stmt = $pdo->query('SELECT * FROM prof'); 
$candidats = $stmt->fetchAll(); 
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin etudiant</title>
    <link rel="stylesheet" href="Adminprofesseur.css">
    <script src="TD.js"></script>
</head>
<body>
<nav class="navbar">
         <a href="Fastnote.html"><img src="img/Fastnote.png"></a>
            <div class="Tableaudebord">
            <a href="Dashboard.php">Tableau de bord</a>
            <a href="deconnexion.php">Deconnexion</a>
        </div>
    </nav>

    </div>
    <div class="container">
        <div class="Truc">
            <div class="Truc1">
                <p>
                    Bonjour,<br>Vue d'ensemble.
                </p>
            </div>

        </div>     
        <div class="links">  
        <a href="adminmodule.php">Ressources</a>
        <a href="adminprofesseur.php">Professeur</a>
        <a href="AdminEtudiant.php">Étudiant</a>
        </div> 
        <div class="Boutons">             
            <button id="Ajout">Ajouter</button>     
       
        </div>
        
                <h2>Professeur MMI</h2>
<table>

<tr>
    <th>ID</th>
    <th>nom</th>
    <th>prenom</th>
    <th>login</th>
    <th>mot de passe</th>
    <th>Actions</th>
</tr>
                        <tr>
                        <?php foreach ($candidats as $candidat): ?>
            <tr>
                <td><?= htmlspecialchars($candidat['id_prof']) ?></td>
                <td><?= htmlspecialchars($candidat['nom_prof']) ?></td>
                <td><?= htmlspecialchars($candidat['prenom_prof']) ?></td>
                <td><?= htmlspecialchars($candidat['login_prof']) ?></td>
                <td><?= htmlspecialchars($candidat['motdepasse_prof']) ?></td>
                <td> <a class="modifier-link" href="modifier_professeur.php?id=<?= $candidat['id_prof'] ?>">Modifier</a>
                <a  href="supprimer_professeur.php?id=<?= $candidat['id_prof'] ?>" id="supp" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce candidat ?');">Supprimer</a></td>
                        </tr>
                        <?php endforeach; ?>


                </table>
            </div>
    </div>
    <div class="form-container" id="formulaireAjout" style="display: none;">
    <form id="prof-form" method="post">
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
            <button onclick="location.href='adminprofesseur.php';">Annuler</button>
        </div>
    </form>
</div>
    <script>
        document.getElementById("Ajout").addEventListener("click", function() {
            var formulaireAjout = document.getElementById("formulaireAjout");
            formulaireAjout.style.display = "block";
        });
    </script>
</body>
</html>