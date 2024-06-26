<?php
$couleur_bulle_classe = "rose";
$page_active = "";

require_once('./ressources/includes/connexion-bdd.php');

// Vos requêtes SQL

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo $_ENV['CHEMIN_BASE']; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur 404 - SAÉ 203</title>
    <link rel="shortcut icon" href="ressources/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">

    <link rel="stylesheet" href="ressources/css/global.css">
</head>

<body>
    <?php require_once('./ressources/includes/top-navigation.php'); ?>
    <?php require_once('./ressources/includes/bulle.php'); ?>

    <main class="conteneur-principal conteneur-1280">
        <h1>Erreur 404</h1>
        <p>Désolé, cette page n'existe pas, <a href="index.php">cliquez ici pour retourner à l'acceuil.</a></p>
    </main>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>