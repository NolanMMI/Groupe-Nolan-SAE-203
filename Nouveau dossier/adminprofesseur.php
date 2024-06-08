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
        <a href="#">Module</a>
        <a href="adminprofesseur.php">Professeur</a>
        <a href="AdminEtudiant.php">Étudiant</a>
        </div> 
        <div class="Boutons">             
            <button id="Ajout"onclick="location.href='formulaireProf.php';">Ajouter</button>     
            <button id="Modifier" >Modifier</button>

        </div>

                <h2>Professeur MMI</h2>
                <table>
            <col style="width: 50%;">
            <col style="width: 50%;">
                        <tr>
                            <td>Dupont</td>
                            <td>Jean <button id="supp">Supprimer</button></td>
                        </tr>
                        <tr>
                            <td>Martin	</td>
                            <td>Sophie<button type="submit" id="supp">Supprimer</button></td>
                        </tr>

                        <tr>
                            <td>NGuyen</td>
                            <td>Minh Duc<button id="supp">Supprimer</button></td>
                        </tr>

                        <tr>
                            <td>Amghar</td>
                            <td>Fatima<button id="supp">Supprimer</button></td>
                        </tr>
                        <tr>
                            <td>Amghar</td>
                            <td>Fatima<button id="supp">Supprimer</button></td>
                        </tr>
                        <tr>
                            <td>Amghar</td>
                            <td>Fatima<button id="supp">Supprimer</button></td>
                        </tr>
                        <tr>
                            <td>Amghar</td>
                            <td>Fatima<button id="supp">Supprimer</button></td>
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
                <label for="note">Module</label>
                <input type="text" id="module" name="module" required>
                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </div>

    <script src="Ajout.js"></script>
</body>
</html>