<?php
$couleur_bulle_classe = "tenebres";
$page_active = "";

require_once('./ressources/includes/connexion-bdd.php');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$requete_brute = "SELECT * FROM `auteur` WHERE id = $id;";
$requete_jointure = "SELECT article.id, article.titre, article.chapo, article.contenu, article.image, article.date_creation, article.lien_yt, article.auteur_id
                     FROM `auteur` 
                     LEFT JOIN article ON auteur.id = article.auteur_id
                     WHERE auteur.id = $id";

$resultat_jointure = mysqli_query($mysqli_link, $requete_jointure);
$resultat_brut = mysqli_query($mysqli_link, $requete_brute);
$entite = mysqli_fetch_array($resultat_brut);

$articles = mysqli_fetch_all($resultat_jointure, MYSQLI_ASSOC);
$existance_article = !empty($articles);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo $_ENV['CHEMIN_BASE']; ?>">
    <?php require_once('./ressources/includes/head.php');?>
    <title><?php echo $entite["nom"]; echo $entite["prenom"]; ?> - SAÉ 203</title>
    <link rel="stylesheet" href="ressources/css/header.css">
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
        <?php if ($existance_article) { ?>
            <h2 class="titre">Voici les articles rédigés par <?php echo $entite["nom"] . " " . $entite["prenom"]; ?></h2>
            <section id="liste-articles">
                <?php foreach ($articles as $article) { ?>
                    <a href="article.php?id=<?php echo $article["id"]; ?>" class='article'>
                        <figure>
                            <img src="<?php echo $article["image"];?>" alt="<?php echo $article["titre"]; ?>">
                        </figure>
                        <section class='textes'>
                            <h1 class='titre'><?php echo $article["titre"]; ?></h1>
                            <p class='description'><?php echo $article["chapo"]; ?></p>
                        </section>
                    </a>
                <?php } ?>
            </section>
        <?php } ?>
    </main>

    </main>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>