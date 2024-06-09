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
<?php
$pdo = connexionDB();
$stmt = $pdo->query('SELECT * FROM eleves'); //requete
$candidats = $stmt->fetchAll(); //récupérer le resultat dans un tableau associatif
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin etudiant</title>
    <link rel="stylesheet" href="AdminEtudiant.css">
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
                    Bonjour,<br>Vue d'ensemble des etudiants.
                </p>
            </div>

        </div>     
        <div class="links">  
        <a href="adminmodule.php">Ressources</a>
        <a href="adminprofesseur.php">Professeur</a>
        <a href="AdminEtudiant.php">Étudiant</a>
        </div> 
        <div class="Boutons">   
                <div class="header">
                <select name="select" id="tpSelect" onchange="showTable()">
                    <option value="TPA">TP A</option>
                    <option value="TPB">TP B</option>
                    <option value="TPC">TP C</option>
                    <option value="TPD">TP D</option>
                    <option value="TPE">TP E</option>
                    <option value="TPF">TP F</option>
                </select>
            </div>
            <button id="Ajout">Ajouter</button>   
            <button id="Modifier"onclick="location.href='formulaireProf.php';" >Modifier</button>
            
        </div>

            <div id="TPA" class="table-container">
                <h2>Etudiant MMI</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>age</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>TP</th>
                        <th>login</th>
                        <th>mot de passe</th>
                        <th>Actions</th>
                    </tr>
                <tr>
                        <?php foreach ($candidats as $candidat): ?>
            
                <td><?= htmlspecialchars($candidat['id_eleve']) ?></td>
                <td><?= htmlspecialchars($candidat['age_eleve']) ?></td>
                <td><?= htmlspecialchars($candidat['nom']) ?></td>
                <td><?= htmlspecialchars($candidat['prenom']) ?></td>
                <td><?= htmlspecialchars($candidat['TP']) ?></td>
                <td><?= htmlspecialchars($candidat['login_eleve']) ?></td>
                <td><?= htmlspecialchars($candidat['motdepasse_eleve']) ?></td>
                <td><a class="modifier-link" href="modifier_etudiant.php?id=<?= $candidat['id_eleve'] ?>">Modifier</a>
                <a  href="supprimer_etudiant.php?id=<?= $candidat['id_eleve'] ?>" id="supp" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce candidat ?');">Supprimer</a></td>
                        </tr>
                        <?php endforeach; ?>
                </table>
            </div>
            <div id="TPB" class="table-container" style="display: none;">
                <h2>TP B</h2>
                <table>
                <col style="width: 50%;">
                <col style="width: 50%;">
                        <tr>
                            <td>veo</td>
                            <td>nolan<button id="supp">Supprimer</button></td>
                        </tr>
                </table>
            </div>
            <div id="TPC" class="table-container" style="display: none;">
                <h2>TP C</h2>
                <table>
                <col style="width: 50%;">
            <col style="width: 50%;">
                        <tr>
                            <td>kouassi</td>
                            <td> emmanuel<button id="supp">Supprimer</button></td>
                        </tr>
                </table>
            </div>

            <div id="TPD" class="table-container" style="display: none;">
                <h2>TP D</h2>
                <table>
                <col style="width: 50%;">
            <col style="width: 50%;">
                        <tr>
                            <td>kouassi</td>
                            <td> emmanuel<button id="supp">Supprimer</button></td>
                        </tr>
                </table>
            </div>

            <div id="TPE" class="table-container" style="display: none;">
                <h2>TP E</h2>
                <table>
                <col style="width: 50%;">
            <col style="width: 50%;">
                        <tr>
                            <td>kouassi</td>
                            <td> emmanuel<button id="supp">Supprimer</button></td>
                        </tr>
                </table>
            </div>

            <div id="TPF" class="table-container" style="display: none;">
                <h2>TP F</h2>
                <table>
                <col style="width: 50%;">
            <col style="width: 50%;">
                        <tr>
                            <td>kouassi</td>
                            <td> emmanuel<button id="supp">Supprimer</button></td>
                        </tr>
                </table>
            </div>
    </div>

    <div class="form-container" id="formulaireetud" style="display: none;">
    <form id="prof-form" method="post">
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
        <div class="button-group">
            <button type="submit">Créer</button>
            <button onclick="location.href='adminEtudiant.php';">Annuler</button>
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