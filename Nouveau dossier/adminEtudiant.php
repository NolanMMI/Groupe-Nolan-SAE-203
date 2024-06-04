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
        <a href="#">Module</a>
        <a href="adminprofesseur.php">Professeur</a>
        <a href="AdminEtudiant.php">Étudiant</a>
        </div> 
        <div class="Boutons">   
                <div class="header">
                <select name="select" id="tpSelect" onchange="showTable()">
                    <option value="TPA">TP A</option>
                    <option value="TPB">TP B</option>
                    <option value="TPC">TP C</option>
                </select>
            </div>
            <button id="Modifier" >Modifier</button>
            <button id="Ajout">Ajouter</button>   
        </div>

            <div id="TPA" class="table-container">
                <h2>TP A</h2>
                <table>
            <col style="width: 50%;">
            <col style="width: 50%;">
                        <tr>
                            <td>EDDABACHI</td>
                            <td>YOUNESS <button id="supp">Supprimer</button></td>
                        </tr>
                        <tr>
                            <td>EDDABACHI</td>
                            <td>YOUNESS<button id="supp">Supprimer</button></td>
                        </tr>

                        <tr>
                            <td>EDDABACHI</td>
                            <td>YOUNESS<button id="supp">Supprimer</button></td>
                        </tr>

                        <tr>
                            <td>EDDABACHI</td>
                            <td>YOUNESS<button id="supp">Supprimer</button></td>
                        </tr>
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
    </div>


    <div id="Etudiantnote" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Ajouter Étudiant</h2>
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