<?php
include('login3.php');

$pdo = connexionDB();
$stmt = $pdo->prepare('SELECT * FROM eleves WHERE id_eleve = 1'); 
$stmt->execute();

$eleve = $stmt->fetch();

$notes = $pdo->prepare('SELECT * FROM note WHERE eleve_id = :eleve_id');
$notes->bindParam(':eleve_id', $eleve['id_eleve']);
$notes->execute();

$allNotes = $notes->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Etudiant</title>
    <link rel="stylesheet" href="etudiantNote.css">
</head>
<body>

    <!-- <pre>
        <?php var_dump($allNotes); ?>    
    </pre> -->

    <div class="container">
        <header>
            <div class="logo">
                <img src="img/fastnote.png">
            </div>
            <nav>
                <a href="#">Tableau de bord</a>
                <a href="deconnexion.php">Déconnexion</a>
            </nav>
        </header>
        <main>
            <div class="header-placeholder">
                <p>Nom: <?= $eleve['nom'] ?></p>
                <p>Prénom: <?= $eleve['prenom'] ?></p>
            </div>
            <div class="content">
                <div class="notes-competences">
                    <div class="notes">
                        <table>
                            <?php foreach($allNotes as $note) : ?>
                            <tr>
                                <th><?= $note['module'] ?></th>
                                <td><?= $note['note']; ?>/20</td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="competences">
                        <h2>Note la plus récente</h2>
                        <table>
                            <tr>
                                <th>Francais</th>
                                <td>12/20</td>
                            </tr>
                            <tr>
                                <th>Mathematique</th>
                                <td>20/20</td>
                            </tr>
                            <tr>
                                <th>Informatique</th>
                                <td>16/20</td>
                            </tr>
                            <tr>
                                <th>Audio Visuel</th>
                                <td>2/20</td>
                            </tr>
                            <tr>
                                <th>Anglais</th>
                                <td>6/20</td>
                            </tr>
                        </table>
                       <a href="Etudiant.php"><button>Voir plus</button></a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>