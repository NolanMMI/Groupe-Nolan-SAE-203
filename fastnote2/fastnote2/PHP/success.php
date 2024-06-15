<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Succès</title>
    <link rel="stylesheet" href="#">
</head>
<body>
    <?php
    if (isset($_GET['message']) && $_GET['message'] === 'success') {
        echo "<h1>Vous avez réussi avec succès !</h1>";
        echo "<p>Les données ont été enregistrées avec succès.</p>";
    } else {
        echo "<h1>Erreur</h1>";
        echo "<p>Une erreur est survenue.</p>";
    }
    ?>
    <p>Vous serez redirigé dans quelques secondes...</p>
    <script>
        setTimeout(function(){
            window.location.href = 'professeurmodule.php';
        }, 5000); // Redirige après 5 secondes
    </script>
</body>
</html>