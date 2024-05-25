<?php
require_once "../../ressources/includes/connexion-bdd.php";

$page_courante = "auteurs";

$formulaire_a_erreurs = false;
$formulaire_soumis = !empty($_POST);
$message_erreur = "";
if ($formulaire_soumis) {
    if (empty($_POST["nom"]) || empty($_POST["prenom"])) {
        $formulaire_a_erreurs = true;
        $message_erreur = "Le nom et le prénom sont requis.";
    } elseif (
        isset(
            $_POST["prenom"],
            $_POST["nom"],
            $_POST["lien_avatar"],
            $_POST["lien_twitter"]
        )
        
     ) {
        $nom = htmlentities($_POST["nom"]);
        $prenom = htmlentities($_POST["prenom"]);
        $lien_avatar = htmlentities($_POST["lien_avatar"]);
        $lien_twitter = htmlentities($_POST["lien_twitter"]);

        $requete_brute = "
            INSERT INTO auteur(prenom, nom, lien_avatar, lien_twitter) 
            VALUES ('$nom', '$prenom', '$lien_avatar', '$lien_twitter')
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

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once('../ressources/includes/head.php'); ?>

    <title>Creation auteur - Administration</title>
</head>

<body>
    <?php require_once('../ressources/includes/menu-principal.php');
    if ($formulaire_soumis && $formulaire_a_erreurs) {
        echo "
                <section class='banniere-alerte erreur' role='alert' aria-live='polite'>
                    <p>$message_erreur</p>
                </section>
            ";
    } ?>
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
                            <label for="nom" class="block text-lg font-medium text-gray-700">Nom</label>
                            <input type="text" name="nom" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="nom">
                        </div>
                        <div class="col-span-12">
                            <label for="prenom" class="block text-lg font-medium text-gray-700">Prénom</label>
                            <input type="text" name="prenom" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="prenom">
                        </div>
                        <div class="col-span-12">
                            <label for="avatar" class="block text-lg font-medium text-gray-700">Lien avatar</label>
                            <input type="text" name="lien_avatar" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="avatar">
                            <div class="text-sm text-gray-500">
                                Mettre l'URL de l'avatar (chemin absolu)
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label for="lien_twitter" class="block text-lg font-medium text-gray-700">Lien twitter</label>
                            <input type="url" name="lien_twitter" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="lien_twitter">
                        </div>
                        <div class="mb-3 col-md-6">
                            <button type="submit" class="font-bold rounded-md bg-indigo-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-indigo-700">Créer</button>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </main>
    <?php require_once("../ressources/includes/global-footer.php"); ?>
</body>
</html>