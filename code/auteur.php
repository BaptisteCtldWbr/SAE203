<?php
$couleur_bulle_classe = "tenebres";
$page_active = "";

require_once('./ressources/includes/connexion-bdd.php');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$requete_brute = "SELECT * FROM `auteur` WHERE id = $id;";
$resultat_brut = mysqli_query($mysqli_link, $requete_brute);
$entite = mysqli_fetch_array($resultat_brut);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo $_ENV['CHEMIN_BASE']; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $entite["nom"]; echo $entite["prenom"]; ?> - SAÉ 203</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">
    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
    <link rel="stylesheet" href="ressources/css/auteur.css">
</head>

<body>
    <?php require_once('./ressources/includes/top-navigation.php'); ?>
    <?php
    // A supprimer si vous n'en avez pas besoin.
    // Mettre une couleur dédiée pour cette bulle si vous gardez la bulle
    require_once('./ressources/includes/bulle.php');
    ?>

    <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
    <main class="conteneur-principal conteneur-1280">
        <div id="hautarticle">
            <div id="hautarticle-texte">
                <h1 class="titre"><?php echo $entite["nom"] . " " . $entite["prenom"];  ?></h1>
                <?php if ($entite["lien_twitter"]==NULL){
                    } else {?>
                <a class="chapo" title="Ouverture dans un nouvel onglet" target="_blank" href="<?php echo $entite["lien_twitter"];?>">Compte twitter de l'auteur</a>
                        <?php }?>
            </div>
            <figure>
                <?php if ($entite["lien_avatar"]==NULL){
                    } else {?>
                <img src="<?php echo $entite["lien_avatar"];?>" alt="<?php echo $entite["nom"]; echo $entite["prenom"]; ?>">
                <?php }?>
            </figure>
        </div>
        <?php        
        ?>        
    </main>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>