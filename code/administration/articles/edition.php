<?php
require_once '../../ressources/includes/connexion-bdd.php';
$page_courante = 'articles';

$formulaire_soumis = !empty($_POST);
$entree_mise_a_jour = array_key_exists('id', $_GET);

$entite = null;
if ($entree_mise_a_jour) {
    $id = $_GET["id"];
    $requete_brute = "SELECT * FROM article WHERE id = $id";
    $resultat_brut = mysqli_query($mysqli_link, $requete_brute);
    $entite = mysqli_fetch_array($resultat_brut, MYSQLI_ASSOC);
}

$requete_auteurs = "SELECT id, nom, prenom FROM auteur";
$resultat_auteurs = mysqli_query($mysqli_link, $requete_auteurs);
$auteurs = [];
while ($auteur = mysqli_fetch_array($resultat_auteurs, MYSQLI_ASSOC)) {
    $auteurs[] = $auteur;
}

if ($formulaire_soumis) {
    // Récupération des données du formulaire
    $id = $_POST["id"];
    $titre = htmlentities($_POST["titre"]);
    $chapo = htmlentities($_POST["chapo"]);
    $contenu = htmlentities($_POST["contenu"]);
    $image = htmlentities($_POST["image"]);
    $lien_yt = htmlentities($_POST["lien_yt"]);
    $date = date("Y-m-d H:i:s");
    $auteur_id = $_POST["auteur_id"];

    // Vérification de la validité de l'auteur_id
    if ($auteur_id !== "" && !is_numeric($auteur_id)) {
        // Afficher un message d'erreur si l'auteur_id n'est pas un nombre
        echo "Erreur : L'identifiant de l'auteur n'est pas valide.";
    } else {
        // Construction de la requête SQL en incluant auteur_id si la valeur est valide
        $requete_brute = "
            UPDATE article
            SET 
                titre = '$titre',
                chapo = '$chapo',
                contenu = '$contenu',
                image = '$image',
                lien_yt = '$lien_yt',
                auteur_id = " . ($auteur_id !== "" ? $auteur_id : "NULL") . "
            WHERE id = '$id'
        ";

        // Exécution de la requête SQL
        $resultat_brut = mysqli_query($mysqli_link, $requete_brute);

        // Vérification du résultat de la requête
        if ($resultat_brut === true) {
            // Redirection vers la page d'accueil
            $formulaire_a_erreurs = false;
            header("Location:./");
        } else {
            // Affichage d'un message d'erreur en cas d'échec de la requête SQL
            echo "Le formulaire comporte une erreur";
            $formulaire_a_erreurs = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once("../ressources/includes/head.php"); ?>

    <title>Editer Articles - Administration</title>
</head>

<body>
    <?php include_once '../ressources/includes/menu-principal.php'; ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Editer</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="py-6">
                <?php if ($entite) { ?>
                    <form method="POST" action="" class="rounded-lg bg-white p-4 shadow border-gray-300 border-1">
                        <section class="grid gap-6">
                            <input type="hidden" value="<?php echo $entite['id']; ?>" name="id">
                            <div class="col-span-12">
                                <label for="titre" class="block text-lg font-medium text-gray-700">Titre</label>
                                <input type="text" name="titre" value="<?php echo $entite['titre']; ?>" id="titre" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                            <div class="col-span-12">
                                <label for="chapo" class="block text-lg font-medium text-gray-700">Chapô</label>
                                <textarea name="chapo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="chapo"><?php echo $entite['chapo']; ?></textarea>
                            </div>
                            <div class="col-span-12">
                                <label for="contenu" class="block text-lg font-medium text-gray-700">Contenu</label>
                                <textarea name="contenu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="contenu"><?php echo $entite['contenu']; ?></textarea>
                            </div>
                            <div class="col-span-12">
                                <label for="lien_yt" class="block text-lg font-medium text-gray-700">Lien Youtube</label>
                                <input type="text" name="lien_yt" value="<?php echo $entite['lien_yt']; ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="lien_yt">
                            </div>
                            <div class="col-span-12">
                                <label for="image" class="block text-lg font-medium text-gray-700">Lien image</label>
                                <input type="text" name="image" value="<?php echo $entite['image']; ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="image">
                            </div>
                            <div class="col-span-12">
                            <label for="auteur_id" class="block text-lg font-medium text-gray-700">Auteur</label>
                                <select name="auteur_id" id="auteur_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Aucun auteur</option>
                                    <?php foreach ($auteurs as $auteur) { ?>
                                        <option value="<?php echo $auteur['id']; ?>" <?php echo ($entite['auteur_id'] == $auteur['id']) ? 'selected' : ''; ?>>
                                            <?php echo $auteur['prenom'] . ' ' . $auteur['nom']; ?>
                                        </option>
                                    <?php } ?>
                                </select></div>
                            <div class="mb-3 col-md-6">
                                <button type="submit" class="rounded-md bg-indigo-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-indigo-700">Éditer</button>
                            </div>
                        </section>
                    </form>
                <?php } else { ?>
                    <!-- A compléter -->
                <?php } ?>
            </div>
        </div>
    </main>
    <?php require_once("../ressources/includes/global-footer.php"); ?>
</body>

</html>