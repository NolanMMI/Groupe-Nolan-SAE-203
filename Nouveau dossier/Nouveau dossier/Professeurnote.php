<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="Professeurnote.css">
</head>
<body>
<nav class="navbar">
         <a href="Fastnote.html"><img src="img/Fastnote.png"></a>
    </nav>
        <div class="Tableaudebord">
            <a href="Professeurmodule.html">Tableau de bord</a>
            <a href="deconnexion.php">Deconnexion</a>
        </div>
    </div>
    <div class="container">
        <div class="Truc">
            <div class="Truc1"></div>
        </div>
        <div class="Boutons">
            <button id="Ajout">Ajouter</button>
            <button id="modif">Modifier</button>
            <button id="Enregistrer">Enregistrer</button>
        </div>
        <table id="TableEtudiant">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Note</th>
                    <th>Coef</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Perez Sanchez</td>
                    <td>John</td>
                    <td>8/10</td>
                    <td>1.5</td>
                </tr>
                <tr>
                    <td>Kouassi</td>
                    <td>Emmanuel</td>
                    <td>3/10</td>
                    <td>1.5</td>
                </tr>
                <tr>
                    <td>Thiam</td>
                    <td>Malick</td>
                    <td>7/10</td>
                    <td>1.5</td>
                </tr>
                <tr>
                    <td>Sylla</td>
                    <td>Aliou</td>
                    <td>5/10</td>
                    <td>1.5</td>
                </tr>
                <tr>
                    <td>Saidj</td>
                    <td>Sofiane</td>
                    <td>10/10</td>
                    <td>1.5</td>
                </tr>
                <tr>
                    <td>EDDABACHI</td>
                    <td>Marwan</td>
                    <td>9/10</td>
                    <td>1.5</td>
                </tr>
                <tr>
                    <td>Itachi</td>
                    <td>Young</td>
                    <td>7/10</td>
                    <td>1.5</td>
                </tr>
            </tbody>
        </table>
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