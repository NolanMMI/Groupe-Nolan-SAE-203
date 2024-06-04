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
    </nav>
        <div class="Tableaudebord">
            <a href="Dashboard.php">Tableau de bord</a>

        </div>
    </div>
    <div class="container">
        <div class="Truc">
            <div class="Truc1">
                <p>
                    Bonjour,<br>Vue d'ensemble.
                </p>
            </div>
        </div>
        <div class="Boutons">
            <button id="Ajout">Ajouter</button>    
                <div class="header">
                <select name="select" id="tpSelect" onchange="showTable()">
                    <option value="TPA">TP A</option>
                    <option value="TPB">TP B</option>
                    <option value="TPC">TP C</option>
                </select>
            </div>
        </div>

            <div id="TPA" class="table-container">
                <h2>TP A</h2>
                <table>
                        <tr>
                            <th>EDDABACHI</th>
                            <th>YOUNESS <button></button></th>
                        </tr>
                        <tr>
                            <th>EDDABACHI</th>
                            <th>YOUNESS</th>
                        </tr>

                        <tr>
                            <th>EDDABACHI</th>
                            <th>YOUNESS</th>
                        </tr>

                        <tr>
                            <th>EDDABACHI</th>
                            <th>YOUNESS</th>
                        </tr>
                </table>
            </div>
            <div id="TPB" class="table-container" style="display: none;">
                <h2>TP B</h2>
                <table>
                        <tr>
                            <th>veo</th>
                            <th>nolan</th>
                        </tr>
                </table>
            </div>
            <div id="TPC" class="table-container" style="display: none;">
                <h2>TP C</h2>
                <table>
                        <tr>
                            <th>kouassi</th>
                            <th> emmanuel</th>
                        </tr>
                </table>
            </div>
    </div>

    <!-- CA c'est le fomulaire pour ajouter une personne -->
    <div id="Etudiantnote" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Ajouter/Modifier Étudiant</h2>
            <form id="studentForm">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
                <label for="note">Note:</label>
                <input type="text" id="note" name="note" required>
                <label for="coef">Coef:</label>
                <input type="text" id="coef" name="coef" required>
                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </div>

    <script src="Ajout.js"></script>
</body>
</html>