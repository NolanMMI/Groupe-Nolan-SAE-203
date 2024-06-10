<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Module</title>
    <link rel="stylesheet" href="FormulaireModule.css">
</head>
<body>
    <div class="header">
        <div class="logo"></div>
        <div class="menu">
            <a href="#">Tableau de bord</a>
            <a href="#">Déconnexion</a>
        </div>
    </div>
    <div class="container">
        
        <div class="form-container">
            <form id="module-form">
                <div class="form-group">
                    <label for="nom-module">Nom</label>
                    <input type="text" id="nom-module" name="nom-module" required>
                </div>
                <div id="matiere-container">
                    <div class="form-group">
                        <label for="matiere-0">Matière</label>
                        <input type="text" id="matiere-0" name="matiere" required>
                        <button type="button" onclick="addMatiere()">+</button>
                    </div>
                </div>
                <div class="button-group">
                    <button type="submit">Créer</button>
                </div>
            </form>
        </div>
    </div>
    <script src="FormulaireModule.js"></script>
</body>
</html>
