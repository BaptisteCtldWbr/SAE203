<?php
$couleur_bulle_classe = "violet";
$page_active = "";

require_once('./ressources/includes/connexion-bdd.php');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;    
$requete_brute = "
    SELECT article.id, article.titre, article.chapo, article.contenu, article.image, article.date_creation, article.lien_yt, article.auteur_id, auteur.nom, auteur.prenom
    FROM `article` 
    LEFT JOIN auteur ON article.auteur_id = auteur.id
    WHERE article.id = $id;
";
$resultat_brut = mysqli_query($mysqli_link, $requete_brute);
$entite = mysqli_fetch_array($resultat_brut);
$date = date("d/m/Y", strtotime($entite['date_creation']));

if (!empty($entite["auteur_id"])){
    $auteur = $entite["nom"]." ".$entite["prenom"];
} 

function transformerLienYoutube($lien) {
    $pattern = "/^https?:\/\/(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/";
    $replacement = "https://www.youtube.com/embed/$1";
    return preg_replace($pattern, $replacement, $lien);
}
$lien_yt_iframe = transformerLienYoutube($entite["lien_yt"]);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo $_ENV['CHEMIN_BASE']; ?>">
    <?php require_once('./ressources/includes/head.php');?>
    <link rel="stylesheet" href="ressources/css/header.css">
    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
    <link rel="stylesheet" href="ressources/css/article.css">    
    <title><?php echo $entite["titre"]; ?> - SAÉ 203</title>
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
                <h1 class="titre"><?php echo $entite["titre"]; ?></h1>
                <h2 class="chapo"><?php echo $entite["chapo"];?></h2>
                <p class="contenu"><?php echo $entite["contenu"]; ?></p>
            </div>
            <figure>
            <img src="<?php echo $entite["image"]; ?>" alt="image de l'article">
            <?php if ($entite["auteur_id"] == Null) { ?>
                <p class="auteur-date">Rédigé par Anonyme
            <?php } else { ?>
                <p class="auteur-date">Rédigé par <a href="auteur.php?id=<?php echo $entite["auteur_id"]; ?>"><?php echo $auteur; ?></a></p>
            <?php } ?>
                <p class="auteur-date">le <?php echo $entite["date_creation"]; ?></p>
        </div>

        <?php
        if (empty($entite["lien_yt"])){
        }
        else{ ?>
            <iframe width="100%" height="720" src="<?php echo $lien_yt_iframe; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="lien-ytb"><a href="<?php echo $entite["lien_yt"];?>" target="_blank">Lien vers la vidéo youtube</a></p>
        <?php } ?>
   
    </main>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>