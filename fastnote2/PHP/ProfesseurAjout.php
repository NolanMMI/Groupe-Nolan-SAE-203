<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>
    <link rel="stylesheet" href="CSS/ProfesseurAjout.css">
    <script src="nomressources.js"> </script>
    <script src="TD.js"></script>
</head>
<body>
    <h1>Ajouter une évaluation et des notes</h1>
    <form id="evaluationForm" method="POST" action="soumettre.php">
        <label for="evalName">Nom de l'évaluation:</label>
        <input type="text" id="evalName" name="evalName" required>
        <label for="coeff">Coefficient:</label>
        <input type="number" step="0.1" id="coeff" name="coeff" required>

        <h2>Notes des étudiants</h2>
        <table id="studentsTable">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Note (/20)</th>
                </tr>
            </thead>
            <tbody>
                <!-- Lignes de tableau seront ajoutées ici par JavaScript -->
            </tbody>
        </table>
        
        <button type="submit">Valider</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const students = [
                {id_eleve: 1, prenom: 'Alice', nom: 'Dupont'},
                {id_eleve: 2, prenom: 'Bob', nom: 'Martin'},
                {id_eleve: 3, prenom: 'Charlie', nom: 'Durand'},
                {id_eleve: 4, prenom: 'David', nom: 'Leroy'},
                {id_eleve: 5, prenom: 'Emma', nom: 'Moreau'},
                {id_eleve: 6, prenom: 'Fanny', nom: 'Roux'},
                {id_eleve: 7, prenom: 'Gaston', nom: 'Fabre'},
                {id_eleve: 8, prenom: 'Hélène', nom: 'Michel'},
                {id_eleve: 9, prenom: 'Igor', nom: 'Lambert'},
                {id_eleve: 10, prenom: 'Juliette', nom: 'Garcia'},
                {id_eleve: 11, prenom: 'Karim', nom: 'Bernard'},
                {id_eleve: 12, prenom: 'Laura', nom: 'Blanc'},
                {id_eleve: 13, prenom: 'Maxime', nom: 'Dupuis'}
            ];

            const tableBody = document.querySelector('#studentsTable tbody');

            students.forEach(student => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${student.prenom}</td>
                    <td>${student.nom}</td>
                    <td><input type="number" step="0.1" name="notes[${student.id_eleve}]" required></td>
                `;
                tableBody.appendChild(row);
            });
        });
    </script>
</body>
</html>
