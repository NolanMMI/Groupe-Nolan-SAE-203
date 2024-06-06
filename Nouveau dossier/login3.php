<?php
$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "fastnote";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM admin WHERE login_admin = :login AND motdepasse_admin = :password");
        $stmt->execute(['login' => $login, 'password' => $password]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            header("Location: Dashboard.php");
            exit;
        } else {
            echo "<script type='text/javascript'>
            alert('Identifiants incorrects');
            window.location.href='connexionAdmin.php'; 
            </script>"; 
        }

        $stmt = $conn->prepare("SELECT * FROM prof WHERE login_prof = :login AND motdepasse_prof = :password");
        $stmt->execute(['login' => $login, 'password' => $password]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            header("Location: professeurmodule.php");
            exit;
        }

        $stmt = $conn->prepare("SELECT * FROM eleves WHERE login_eleve = :login AND motdepasse_eleve = :password");
        $stmt->execute(['login' => $login, 'password' => $password]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            header("Location: etudiantmodule.php");
            exit;
        }
    }
} catch (PDOException $e) {
    die("La connexion a échoué: " . $e->getMessage());
}
?>