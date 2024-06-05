<?php
$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "fastnote";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE login_admin = ? AND motdepasse_admin = ?");
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        header("location: Dashboard.php");
        exit;
    }else{
        header("location: connexionAdmin.php");
    }


  
    $stmt = $conn->prepare("SELECT * FROM prof WHERE login_prof = ? AND motdepasse_prof = ?");
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        header("location: professeurmodule.php");
        exit;
    } else{
        header("location: connexionprofesseurs.php");
      
    }

    $stmt = $conn->prepare("SELECT * FROM eleves WHERE login_eleve = ? AND motdepasse_eleve = ?");
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        header("location: etudiantmodule.php");
        exit;
    }else{
        header("location: connexionEtudiant.php");
      
    }

    $stmt->close();
}

$conn->close();
?>
