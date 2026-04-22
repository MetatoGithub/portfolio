<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projets | Tim Burgess--Poggioli</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body class="page page-projects">
    <?php
    $brand = "tim@portfolio:~/projects$";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="card">
            <p class="eyebrow">Tim Burgess--Poggioli</p>
            <h1>Projets et AP</h1>
            <p>Voici une liste de mes projets pratiques en cours, ainsi que des projets personnels.</p>
        </section>

        <section class="card project-grid">
            <article class="project-card">
                <p class="eyebrow-proj">AP 1ere annee</p>
                <h2>Mise en place d'un emulateur de reseaux</h2>
                <p class="project-description">Mise en place d'un serveur GNS3 dans le cadre de l'AP en cours, afin de realiser des simulations de reseaux.</p>
                <div class="chips">
                    <span>Termine</span>
                    <span>Reseau</span>
                    <span>GNS3</span>
                </div>
            </article>

            <article class="project-card">
                <p class="eyebrow-proj">Projet personnel</p>
                <h2>Deploiement et maintenance d'une infrastructure reseau</h2>
                <p class="project-description">Installation de serveurs Proxmox pour de la virtualisation et des services personnels.</p>
                <div class="chips">
                    <span>En cours</span>
                    <span>Proxmox</span>
                    <span>Self Hosting</span>
                </div>
            </article>

            <article class="project-card-wip">
                <p class="eyebrow-proj-wip">AP 2eme annee</p>
                <h2>A suivre...</h2>
                <p class="project-description">Projet de 2eme annee</p>
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
