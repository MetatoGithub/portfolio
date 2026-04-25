<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#0a0a12">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Tim Burgess--Poggioli</title>
    <link rel="stylesheet" href="styles.css" />
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
                <p class="eyebrow">Etudiant en BTS SIO</p>
                <h1>Tim Burgess-Poggioli</h1>
                <p>
                    Je suis etudiant en 1ere annee de BTS SIO, au lycee Bonaparte de Toulon.
                    Je suis interesse par les fondamentaux de reseau informatique, l'administration et l'utilisation de systemes Linux pour un usage a la fois personnel et professionel.
                    Je suis egalement adepte de self-hosting et de logiciels FOSS.
                </p>
                <ul class="quick-points">
                    <li>Interet pour les systemes de reseau informatique</li>
                    <li>Curiosite pour la mise en place d'infrastructures self-hosted</li>
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
                    <h3>Centres d'interet</h3>
                    <p>Routing, switching, gestion de serveurs Linux, monitoring et automatisation.</p>
                </article>
                <article class="info-cards">
                    <h3>Mes outils</h3>
                    <p>Linux, Proxmox, Nextcloud.</p>
                </article>
                <article class="info-cards">
                    <h3>Prochains objectifs</h3>
                    <p>En apprendre plus sur l'infrastructure reseau et l'administration de systemes.</p>
                </article>
            </div>
        </section>
    </main>
    <?php include __DIR__ . "/footer.php"; ?>
</body>
</html>
