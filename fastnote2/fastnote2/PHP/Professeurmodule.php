<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue d'ensemble des Modules</title>
    <link rel="stylesheet" href="CSS/Professeurmodule.css">
    <script>
        function goToRubrique(rubrique) {
            location.href = 'ProfesseurAjout.php?rubrique=' + encodeURIComponent(rubrique);
        }
    </script>
</head>
<body>
<nav class="navbar">
    <a href="Fastnote.html"><img src="img/Fastnote.png" alt="Logo"></a>
    <a href="deconnexion.php">Déconnexion</a>
</nav>
<div class="container">
    <div class="Bienvenue">
        <input type="text" class="Recherche" placeholder="Rechercher">  
        <h1>Bonjour,</h1>
        <h2>Vue d'ensemble des Ressources</h2> 
    </div>
    <div class="modules">
        <div class="module" onclick="goToRubrique('Informatique')">
            <div class="module1"></div>
            <p id="INFO">Informatique</p>
        </div>
        <div class="module" onclick="goToRubrique('Maths')">
            <div class="module2"></div>
            <p id="MATH">Maths</p>
        </div>
        <div class="module" onclick="goToRubrique('Audiovisuel')">
            <div class="module3"></div>
            <p id="AV">Audiovisuel</p>
        </div>
        <div class="module" onclick="goToRubrique('Marketing')">
            <div class="module4"></div>
            <p id="MK">Marketing</p>
        </div>
        <div class="module" onclick="goToRubrique('Francais')">
            <div class="module5"></div>
            <p id="FR">Francais</p>
        </div>
        <div class="module" onclick="goToRubrique('')">
            <div class="module6"></div>
        </div>
    </div>
</div>
</body>
</html>
