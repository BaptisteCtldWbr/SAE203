<?php
$couleur_bulle_classe = "vert_fonce";
$page_active = "equipe-de-redac";

require_once('./ressources/includes/connexion-bdd.php');

$requete_brute = "SELECT * FROM auteur";
$resultat_brut = mysqli_query($mysqli_link, $requete_brute);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo $_ENV['CHEMIN_BASE']; ?>">
    <?php require_once('./ressources/includes/head.php');?>
    <link rel="stylesheet" href="ressources/css/header.css">
    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/redaction.css">
    <title>Equipe de redaction - SAÉ 203</title>
</head>

<body>
<?php require_once('./ressources/includes/top-navigation.php'); ?>
    <?php require_once('./ressources/includes/bulle.php'); ?>

    <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
    <main class="conteneur-principal conteneur-1280">
        <h1 class="titre">Voici nos charmants auteurs !(surtout Simon)</h1>
            <section class="liste-auteurs">
                <?php while ($auteur = mysqli_fetch_array($resultat_brut)) { ?>
                        <a href="auteur.php?id=<?php echo $auteur["id"]; ?>" class='auteur'>
                            <figure>
                                <img src="<?php echo $auteur["lien_avatar"];?>" alt="Avatar de l'auteur">
                            </figure>
                            <section class='textes'>
                                <h2 class='titre_auteur'><?php echo $auteur["nom"] . "&nbsp;" . $auteur["prenom"]; ?></h2>
                            </section>
                        </a>
                <?php } ?>
    </main>
    <?php 
        require_once('./ressources/includes/footer.php');
         mysqli_free_result($resultat_brut);
         mysqli_close($mysqli_link);
    ?>
</body>

</html>