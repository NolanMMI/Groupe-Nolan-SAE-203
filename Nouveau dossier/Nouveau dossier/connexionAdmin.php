<?php
session_start();
include 'login3.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = connexionDB();
    $login = $_POST['login'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM admin WHERE login_admin = :login AND motdepasse_admin= :password');
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':password', $password); 
    $stmt->execute();
    $admin = $stmt->fetch();

    if ($admin) {
        $_SESSION['login_admin'] = $admin['id_admin'];
        header('Location: Admin/dashboard.php');
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
    <link rel="stylesheet" href="connexionAdmin.css">

    <title>Connexion Admin </title>
</head>
<body>
    <nav class="navbar">
         <a href="index.php"><img src="img/Fastnote.PNG"></a>
    </nav>
   
    <div id="container">
        <form action="" method="POST">
        <h1>Admin</h1>
        <h3> Entrez votre identifiant et votre mot de passe.</h3>  
        <?php if (!empty($error)): ?>
            <div class="ALERT alert-danger" style="color:#e0172b;"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <p><strong>Identifiant</strong></p>

        <input type="text"  name="login" placeholder="Identifiant" required >
        <p><strong>Mot de passe</strong></p>
        <input type="password"  name="password" placeholder="Mot de passe" required>
        <br>
        <br>
         <input type="submit" name="connexion" value="connexion">  
        <a class="retour" href="index.php">Retour</a>
    </form>     

</body>
</html>
