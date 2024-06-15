<?php
// view_grades.php

session_start(); // Démarrage de la session pour stocker l'ID de l'étudiant connecté

$host = 'localhost';
$db = 'tessst'; // Assurez-vous que c'est le nom de votre base de données
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Vérification de la soumission du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données de connexion
    $login_eleve = $_POST['login_eleve'];
    $motdepasse_eleve = $_POST['motdepasse_eleve'];

    // Requête pour vérifier les identifiants de l'étudiant
    $stmt = $pdo->prepare("SELECT id_eleve FROM eleves WHERE login_eleve = ? AND motdepasse_eleve = ?");
    $stmt->execute([$login_eleve, $motdepasse_eleve]);
    $row = $stmt->fetch();

    if ($row) {
        // Authentification réussie, enregistrer l'ID de l'étudiant dans la session
        $_SESSION['id_eleve'] = $row['id_eleve'];
    } else {
        // Authentification échouée, rediriger vers la page de connexion avec un message d'erreur
        header("Location: connexionEtudiant.php?error=1");
        exit;
    }
}

// Vérifier si l'étudiant est connecté avant d'afficher les notes
if (!isset($_SESSION['id_eleve'])) {
    // Rediriger vers la page de connexion si l'étudiant n'est pas authentifié
    header("Location: connexionEtudiant.php");
    exit;
}

// Maintenant que l'étudiant est authentifié, récupérer et afficher ses notes
$id_eleve = $_SESSION['id_eleve'];

$stmt = $pdo->prepare("SELECT evaluation.name, evaluation.coeff, note.note 
                       FROM note 
                       JOIN evaluation ON note.evaluation_id = evaluation.id 
                       WHERE note.id_eleve = ?");
$stmt->execute([$id_eleve]);
$results = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Notes de l'étudiant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid #ccc;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Notes de l'étudiant</h1>
    <table>
        <tr>
            <th>Évaluation</th>
            <th>Coefficient</th>
            <th>Note</th>
        </tr>
        <?php foreach ($results as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['coeff']); ?></td>
                <td><?php echo htmlspecialchars($row['note']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
