<?php
include 'login3.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = connexionDB();
    $requete = 'INSERT INTO ressources (id_mod, nom_mod, id_prof) VALUES (:id_mod, :nom_mod,:id_prof)'; 
    $stmt = $pdo->prepare($requete);

    // Lier les paramètres
    $stmt->bindParam(':id_mod', $_POST['id_mod']);
    $stmt->bindParam(':nom_mod', $_POST['nom_mod']);
    $stmt->bindParam(':id_prof', $_POST['id_prof']);

    
// Après l'exécution de l'insertion
try {
    $stmt->execute();
    // Rediriger vers la liste des candidats
    header('Location: adminmodule.php');
    exit;
} catch (PDOException $e) {
    echo 'Erreur d\'insertion : ' . $e->getMessage();
}
}
?>
<?php
$pdo = connexionDB();
$stmt = $pdo->query('SELECT * FROM ressources'); //requete
$candidats = $stmt->fetchAll(); //récupérer le resultat dans un tableau associatif
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin etudiant</title>
    <link rel="stylesheet" href="Adminmodule.css">
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
                    Bonjour,<br>Vue d'ensemble des ressources .
                </p>
            </div>

        </div>     
        <div class="links">  
        <a href="adminmodule.php">Module</a>
        <a href="adminprofesseur.php">Professeur</a>
        <a href="AdminEtudiant.php">Étudiant</a>
        </div> 
        <div class="Boutons">             
            <button id="Ajout">Ajouter</button>     
            <button id="Modifier" >Modifier</button>
        </div>
        <h2>Professeur MMI</h2>
<table>

<tr>
    <th>ID</th>
    <th> nom de la ressources</th>
    <th>id professeur</th>

</tr>
                        <tr>
                        <?php foreach ($candidats as $candidat): ?>
            <tr>
                <td><?= htmlspecialchars($candidat['id_mod']) ?></td>
                <td><?= htmlspecialchars($candidat['nom_mod']) ?></td>
                <td><?= htmlspecialchars($candidat['id_prof']) ?></td>
                <td><button id="supp">Supprimer</button></td>
                        </tr>
                        <?php endforeach; ?>


                </table>
            </div>
    </div>
    <div class="form-container" id="formulaireetud" style="display: none;">
    <form id="prof-form" method="post">
        <div class="form-group">
            <label for="id_mod">ID </label>
            <input type="text" id="id_mod" name="id_mod" required>
        </div>
        <div class="form-group">
            <label for="nom_mod">nom de ressources</label>
            <input type="text" id="nom_mod" name="nom_mod" required>
        </div>
        <div class="form-group">
            <label for="id_prof">id du prof</label>
            <input type="text" id="id_prof" name="id_prof" required>
        </div>
        <div class="button-group">
            <button type="submit">Créer</button>
        </div>
    </form>

    <script>
        document.getElementById("Ajout").addEventListener("click", function() {
            var formulaireAjout = document.getElementById("formulaireetud");
            formulaireAjout.style.display = "block";
        });
    </script>
</body>
</html>