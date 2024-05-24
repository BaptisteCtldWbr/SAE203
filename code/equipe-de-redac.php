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
    <title>Equipe de redaction - SAÉ 203</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">

    <link rel="stylesheet" href="ressources/css/global.css">
</head>

<body>
<section class="conteneur-1280">
        <main class="conteneur-principal">
        <?php require_once('./ressources/includes/header.php');?>
            <h2 class="titre-page">Les activités sportives à CY</h2>
            <p>De nombreuses activités sont proposées par les services de l'université de Cergy Pontoise, en voilà un échantillon :</p>
            <div class="activites-conteneur">
                <article class="activite">
                    <img src="https://i.ytimg.com/vi/rp6qzUpFYoE/maxresdefault.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Basketball</figcaption>
                </article>
                <article class="activite">
                    <img src="https://images.ladepeche.fr/api/v1/images/view/6453a13ca905f40574377d09/large/image.jpg?v=1" alt="image de l'activité">
                    <figcaption class="activite-titre">Natation synchronisée</figcaption>
                </article>
                <article class="activite">
                    <img src="https://www.francebleu.fr/s3/cruiser-production/2023/08/6a41e924-6247-4d7f-9aec-4102f4b83ad3/1200x680_sc_20230817-173521-1.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Curling</figcaption>
                </article>
                <article class="activite">
                    <img src="https://teambuildingequitation.files.wordpress.com/2017/05/aquaponey.jpg?w=640" alt="image de l'activité">
                    <figcaption class="activite-titre">Aquaponey</figcaption>
                </article>
                <article class="activite">
                    <img src="https://www.malcolm-france.com/wp-content/uploads/saison-04_episode-07_bouche-cousue_malcolm-holds-his-tongue_wheeler-hal.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Marche rapide</figcaption>
                </article>
                <article class="activite">
                    <img src="https://athlonsports.com/.image/t_share/MTgyMDE2NjQ1ODc0MTMyMDk5/-fantasy-golf-team-names.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Golf</figcaption>
                </article>
                <article class="activite">
                    <img src="https://www.loos.fr/sites/default/files/styles/editorial_header/public/actualites/2019-06/foot%20f%C3%A9minin.jpg?itok=CCwNBixM" alt="image de l'activité">
                    <figcaption class="activite-titre">Football féminin</figcaption>
                </article>
                <article class="activite">
                    <img src="https://i.guim.co.uk/img/media/8d077e9276a42ceae5922de3660e7eb7e0e6abd6/0_214_2289_1373/master/2289.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=bb23b75d020c7e1a2ed3aa9f082ba328" alt="image de l'activité">
                    <figcaption class="activite-titre">Gaelic footbal</figcaption>
                </article>
                <article class="activite">
                    <img src="https://i.notrefamille.com/0x450/smart/2017/11/17/311226-original.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Bien être</figcaption>
                </article>
                <article class="activite">
                    <img src="https://cherry.img.pmdstatic.net/fit/https.3A.2F.2Fimg.2Eohmymag.2Ecom.2Farticle.2Finsolite.2Fbebe-escaladeur_a8f91098a644bcaf6d82a583fb3024aafbff81da.2Ejpg/640x360/quality/80/thumbnail.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Escalade</figcaption>
                </article>
                <article class="activite">
                    <img src="https://cdn-s-www.republicain-lorrain.fr/images/8A92CB21-3BB4-4A57-8587-F55291EE50FD/NW_raw/tout-est-question-de-rapidite-quand-on-n-a-pas-la-force-ni-la-technique-de-combat-il-reste-la-diversion-pour-destabiliser-son-adversaire-rien-n-est-perdu-d-avance-photo-rl-1614438611.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Para auto-défense</figcaption>
                </article>
                <article class="activite">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Wooclap-logo.png/1200px-Wooclap-logo.png" alt="image de l'activité">
                    <figcaption class="activite-titre">Gestion de projet</figcaption>
                </article>
                <article class="activite">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb9ZgW8YQRr0iyvGY0EvQrRxuqTjpxFP6X2Q&usqp=CAU" alt="image de l'activité">
                    <figcaption class="activite-titre">Salsa</figcaption>
                </article>
                <article class="activite">
                    <img src="https://www.valvital.fr/var/valvital/storage/images/glossaire/aqua-step/5026-3-fre-FR/Aqua-step_large.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Aqua step</figcaption>
                </article>
                <article class="activite">
                    <img src="https://www.irbms.com/wp-content/uploads/2014/01/qi-gong-exercices.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Qi-gong</figcaption>
                </article>
                <article class="activite">
                    <img src="https://www.futurefit.co.uk/wp-content/uploads/2023/06/reformer-pilates-guide.jpeg" alt="image de l'activité">
                    <figcaption class="activite-titre">Pilates</figcaption>
                </article>
                <article class="activite">
                    <img src="https://www.wellness-sportclub.fr/wp-content/uploads/2018/02/aquabiking-2-1024x683.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Aqua VTT</figcaption>
                </article>
                <article class="activite">
                    <img src="ressources/images/activites/audit_semiotique.png" alt="image de l'activité">
                    <figcaption class="activite-titre">نشانه شناسی حسابرسی آبی</figcaption>
                </article>
                <article class="activite">
                    <img src="https://images.lesindesradios.fr/filters:format(webp)/radios/swigg/importrk/news/original/60a3bb5fb8a112.62287404.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Zumba Cafe</figcaption>
                </article>
                <article class="activite">
                    <img src="https://i.ytimg.com/vi/icaGNw-uUNw/maxresdefault.jpg" alt="image de l'activité">
                    <figcaption class="activite-titre">Dégustation de tacos (RFC)</figcaption>
                </article>
            </div>
            <?php require_once('./ressources/includes/footer.php');?>
        </main>
    </section>
</body>

</html>