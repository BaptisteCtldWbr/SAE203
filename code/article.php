<?php
$couleur_bulle_classe = "rose";
$page_active = "";

require_once('./ressources/includes/connexion-bdd.php');

/*SELECT article.id, article.titre, article.chapo, article.contenu, article.image, article.date_creation, article.lien_yt, auteur.nom, auteur.prenom FROM `article` JOIN auteur ON article.id = auteur.id WHERE article.id = 7;*/

$id = $_GET['id'];
$requete_brute = "
    SELECT article.id, article.titre, article.chapo, article.contenu, article.image, article.date_creation, article.lien_yt, article.auteur_id, auteur.nom, auteur.prenom
    FROM `article` 
    JOIN auteur ON article.id = auteur.id
    WHERE article.id = $id;
";
$resultat_brut = mysqli_query($mysqli_link, $requete_brute);
$entite = mysqli_fetch_array($resultat_brut);
$date = date("d/m/Y", strtotime($entite['date_creation']));

if ($entite["auteur_id"]=NULL){
    $auteur = "Anonyme";
} else {
    $auteur = $entite["nom"]." ".$entite["prenom"];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo $_ENV['CHEMIN_BASE']; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $entite["titre"]; ?> - SAÉ 203</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">

    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
    <link rel="stylesheet" href="ressources/css/article.css">
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
                <p class="auteur-date">Rédigé par <a href="#"><?php echo $auteur;?></a> le <?php echo $entite["date_creation"];?></p>
            </div>
            <figure>
                <img src="<?php echo $entite["image"];?>" alt="image de l'article">
            </figure>
        </div>
        <p class="contenu"><?php echo $entite["contenu"]; ?></p>
        <?php
        if (empty($entite["lien_yt"])){
        }
        else{
            echo '<p class="lien-ytb"><a href="'.$entite["lien_yt"].'" target="_blank">Lien vers la vidéo youtube</a></p>';
            echo '<iframe allowfullscreen="" frameborder="0" height="315" src="'.$entite["lien_yt"].'" width="420"></iframe>';
        }        
        ?>        
    </main>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>