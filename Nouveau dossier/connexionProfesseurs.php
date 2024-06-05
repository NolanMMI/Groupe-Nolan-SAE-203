<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexionProfesseur.css">
    <title>Connexion Professseur </title>
</head>
<body>
    <nav class="navbar">
         <a href="Fastnote.html"><img src="img/Fastnote.png"></a>
    </nav>
   
    <div id="container">
    
        <form action="login3.php" method="POST">
        <h1>Professeur</h1>
        <h3> Entrez votre identifiant et votre mot de passe.</h3>  
        <p><strong>Identifiant</strong></p>
        <input type="text" id ="login"name="login" placeholder="Identifiant" required >
        <p><strong>Mot de passe</strong></p>
        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        <br>
        <br>
        <input type="submit" name="connexion" value="connexion" >  
        <a class="retour" href="index.php">Retour</a>
    </form>
    <?php
    if (isset($error)) {
        echo "<p class='error-message'>$error</p>";
    }
    ?>
</body>
</html>