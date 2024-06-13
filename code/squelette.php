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
    <?php require_once('./ressources/includes/head.php');?>
    <title>REMPLACER - SAÉ 203</title>
    <link rel="stylesheet" href="ressources/css/global.css">
</head>

<body>
    <?php require_once('./ressources/includes/top-navigation.php'); ?>
    <?php
    // facultatif
    // require_once('./ressources/includes/bulle.php'); 
    ?>

    <main class="conteneur-principal conteneur-1280">
        <!-- Vous allez principalement écrire votre code HTML dans cette balise -->
    </main>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>