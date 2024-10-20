<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloWorld</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    // Inclure le fichier qui contient les variables de connexion
    include('config/bdd.php');
    $objBdd = new PDO(
        "mysql:host=$bddserver;
        dbname=$bddname;
        charset=utf8",
        $bddlogin,
        $bddpass
    );

    // Récupérer les données depuis la base de données
    $listeEtudiants = $objBdd->query("SELECT * FROM etudiants");

    foreach ($listeEtudiants as $row) {
        echo "<div class='container'>";
        echo  "<h1>EPSI B3</h1>";
        echo "<div class='info'>";
        echo "<span>" . $row['prenom'] . " " . $row['nom'] . "</span>";
        echo "<span>" . $row['mail'] . "</span>";
        echo "</div>";
        echo "</div>";
    }
    $objBdd = null;
    ?>
</body>

</html>