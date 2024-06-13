<?php
require_once('../../ressources/includes/connexion-bdd.php');

$page_courante = "articles";

$formulaire_a_erreurs = false;
$formulaire_soumis = !empty($_POST);
$message_erreur="";

$requete_auteurs = "SELECT id, nom, prenom FROM auteur";
$resultat_auteurs = mysqli_query($mysqli_link, $requete_auteurs);
$auteurs = [];
while ($auteur = mysqli_fetch_array($resultat_auteurs, MYSQLI_ASSOC)) {
    $auteurs[] = $auteur;
} 
if ($formulaire_soumis) {
    if (empty($_POST["titre"])) {
        $formulaire_a_erreurs = true;
        $message_erreur = "Un titre est requis pour l'article";
    } 
    elseif (
        isset(
            $_POST["titre"],
            $_POST["chapo"],
            $_POST["contenu"],
            $_POST["image"],
            $_POST["lien_yt"]
        )
        ) {
        
        $titre = htmlentities($_POST["titre"]);
        $chapo = htmlentities($_POST["chapo"]);
        $contenu = htmlentities($_POST["contenu"]);
        $image = htmlentities($_POST["image"]);
        $lien_yt = htmlentities($_POST["lien_yt"]);
        $date_creation = date("Y-m-d H:i:s");
        $auteur_id = $_POST["auteur_id"]; 
        // Vérification de la validité de l'auteur_id
        if ($auteur_id !== "" && !is_numeric($auteur_id)) {
        // Afficher un message d'erreur si l'auteur_id n'est pas un nombre
        echo "Erreur : L'identifiant de l'auteur n'est pas valide.";
        } else {

            $requete_brute = "
                INSERT INTO article(titre, chapo, contenu, image, lien_yt, date_creation) 
                VALUES ('$titre', '$chapo', '$contenu', '$image', '$lien_yt', '$date_creation')
            ";
            $resultat_brut = mysqli_query($mysqli_link, $requete_brute);

            if ($resultat_brut === true) {
            // Tout s'est bien passé
            $formulaire_a_erreurs = false;
            } else {
            // Il y a eu un problème
            $formulaire_a_erreurs = true;
            }
        }
        if (empty($message_erreur)) {
            header("Location:./");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once("../ressources/includes/head.php"); ?>

    <title>Creation d'Article - Administration</title>
</head>

<body>
    <?php include_once '../ressources/includes/menu-principal.php'; 
            if ($formulaire_soumis && $formulaire_a_erreurs) {
                echo "
                        <section class='banniere-alerte erreur' role='alert' aria-live='polite'>
                            <p>$message_erreur</p>
                        </section>
                    ";
            } ?>?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Créer</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="py-6">
                <form method="POST" action="" class="rounded-lg bg-white p-4 shadow border-gray-300 border-1">
                    <section class="grid gap-6">
                        <div class="col-span-12">
                            <label for="titre" class="block text-lg font-medium text-gray-700">Titre</label>
                            <input type="text" name="titre"  id="titre" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="prenom">
                        </div>
                        <div class="col-span-12">
                            <label  for="chapo" class="block text-lg font-medium text-gray-700">Chapô</label>
                            <textarea type="text" name="chapo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="chapo"></textarea>
                        </div>
                        <div class="col-span-12">
                                <label for="contenu" class="block text-lg font-medium text-gray-700">Contenu</label>
                                <textarea name="contenu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="contenu"></textarea>
                            </div>
                            <div class="col-span-12">
                                <label for="lien_yt" class="block text-lg font-medium text-gray-700">Lien Youtube</label>
                                <input type="text" name="lien_yt" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="lien_yt">
                            </div>
                            <div class="col-span-12">
                                <label for="image" class="block text-lg font-medium text-gray-700">Lien image</label>
                                <input type="text" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="image">
                            </div>
                            <div class="col-span-12">
                                <label for="auteur_id" class="block text-lg font-medium text-gray-700">Auteur</label>
                                <select name="auteur_id" id="auteur_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="">Auteur inconnu</option>
                                <?php foreach ($auteurs as $auteur) { ?>
                                <option value="<?php echo $auteur['id']; ?>"><?php echo $auteur['prenom'] . ' ' . $auteur['nom']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        <div class="mb-3 col-md-6">
                            <button type="submit" class="rounded-md bg-indigo-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-indigo-700">Créer</button>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </main>
    <?php require_once("../ressources/includes/global-footer.php"); ?>
</body>

</html>