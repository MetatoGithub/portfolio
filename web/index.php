<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#0a0a12">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Tim Burgess--Poggioli</title>
    <link rel="stylesheet" href="styles.css?newcache01" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="page page-home">
    <?php
    $brand = "tim@portfolio:~$";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="hero card">
            <div class="hero-copy">
                <p class="eyebrow">Étudiant en BTS SIO</p>
                <h1>Tim Burgess-Poggioli</h1>
                <p>
                    Je suis étudiant en 1re année de BTS SIO, au lycée Bonaparte de Toulon.
                    Je suis intéressé par les fondamentaux de réseau informatique, l'administration et l'utilisation de systèmes Linux pour un usage à la fois personnel et professionnel.
                    Je suis également adepte de self-hosting et de logiciels FOSS.
                </p>
                <ul class="quick-points">
                    <li>Intérêt pour les systèmes de réseau informatique</li>
                    <li>Curiosité pour la mise en place d'infrastructures self-hosted</li>
                    <li>Passion pour le logiciel libre et open source</li>
                </ul>
            </div>
            <aside class="photo-slot" aria-label="Headshot de Tim">
                <div class="photo-box">
                    <img src="assets/PLACEHOLDER.jpg" alt="Headshot de Tim" >
                </div>
            </aside>
        </section>

        <section class="card">
            <h2>Infos</h2>
            <div class="info-grid">
                <article class="info-cards">
                    <h3>Centres d'intérêt</h3>
                    <p>Routing, switching, gestion de serveurs Linux, monitoring et automatisation.</p>
                </article>
                <article class="info-cards">
                    <h3>Mes outils</h3>
                    <p>Linux, Proxmox, Nextcloud.</p>
                </article>
                <article class="info-cards">
                    <h3>Prochains objectifs</h3>
                    <p>En apprendre plus sur l'infrastructure réseau et l'administration de systèmes.</p>
                </article>
            </div>
        </section>
    </main>
    <?php include __DIR__ . "/footer.php"; ?>
</body>
</html>
