<?php
session_start();
include 'login3.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = connexionDB();
    $login = $_POST['login'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM prof WHERE login_prof = :login AND motdepasse_prof= :password');
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':password', $password); 
    $stmt->execute();
    $prof = $stmt->fetch();

    if ($prof) {
        $_SESSION['login_prof'] = $prof['id_prof'];
        header('Location: Professeurmodule.php');
        exit;
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/connexionProfesseur.css">
    <title>Connexion Professseur </title>
</head>
<body>
    <nav class="navbar">
         <a href="index.php"><img src="img/Fastnote.png"></a>
    </nav>
   
    <div id="container">
    
        <form action="" method="POST">
        <h1>Professeur</h1>
        <h3> Entrez votre identifiant et votre mot de passe.</h3>  
        <?php if (!empty($error)): ?>
            <div class="ALERT alert-danger" style="color:#e0172b;"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <p><strong>Identifiant</strong></p>
        <input type="text" id ="login"name="login" placeholder="Identifiant" required >
        <p><strong>Mot de passe</strong></p>
        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        <br>
        <br>
        <input type="submit" name="connexion" value="connexion" >  
        <a class="retour" href="index.php">Retour</a>
    </form>

</body>
</html>