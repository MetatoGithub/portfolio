<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#0a0a12">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Projets | Tim Burgess--Poggioli</title>
    <link rel="stylesheet" href="styles.css?newcache01" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="page page-projects">
    <?php
    $brand = "tim@portfolio:~/proj $";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="card">
            <p class="eyebrow">Tim Burgess--Poggioli</p>
            <h1>Projets et AP</h1>
            <p>Voici une liste de mes projets pratiques en cours, ainsi que des projets personnels.</p>
        </section>

        <section class="card project-grid">
            <a class="project-link" href="art_gns3.php">
                <article class="project-card">
                    <img src="assets/gns3logo.png" alt="gns3 logo" class="project-image">
                    <p class="eyebrow-proj">AP 1re année</p>
                    <h2>Mise en place d'un émulateur de réseaux</h2>
                    <p class="project-description">Mise en place d'un serveur GNS3 dans le cadre de l'AP en cours, afin de réaliser des simulations de réseaux.</p>
                    <div class="chips">
                        <span>Terminé</span>
                        <span>Réseau</span>
                        <span>GNS3</span>
                    </div>
                </article>
            </a>

            <article class="project-card">
                <img src="assets/proxmoxlogo.png" alt="Proxmox logo" class="project-image">
                <p class="eyebrow-proj">Projet personnel</p>
                <h2>Déploiement et maintenance d'une infrastructure réseau</h2>
                <p class="project-description">Installation de serveurs Proxmox pour de la virtualisation et des services personnels.</p>
                <div class="chips">
                    <span>En cours</span>
                    <span>Proxmox</span>
                    <span>Self Hosting</span>
                </div>
            </article>
            
            <a class="project-link" href="art_nolark.php">
                <article class="project-card">
                    <img src="assets/nolarklogo.png" alt="Nolark logo" class="project-image">
                    <p class="eyebrow">AP 1re année</p>
                    <h2>Construction d'un site web de vente en ligne</h2>
                    <p class="project-description">Construction du site web Nolark, une boutique en ligne de casques de moto.</p>
                    <div class="chips">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                </article>
            </a>

            <article class="project-card-wip">
                <p class="eyebrow-wip">AP 2e année</p>
                <h2>À suivre...</h2>
                <p class="project-description">Projet de 2e année</p>
                <div class="chips-wip">
                    <span>...</span>
                    <span>...</span>
                </div>
            </article>

        </section>
    </main>
    <?php include __DIR__ . "/footer.php"; ?>
</body>
</html>
