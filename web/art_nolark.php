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
    $brand = "tim@portfolio:~/nlrk $";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="hero card">
            <div class="hero-copy">
                <p class="eyebrow">AP 1re annee</p>
                <h1>Nolark</h1>
                <p>
                    Durant ma 1ere annee de BTS SIO, j'ai pu travailler sur le projet Nolark, un site web de vente de casques de moto.
                    J'ai corrige plusieurs bugs sur le site et travaille avec des bases de donnees MySQL pour la gestion des produits.
                </p>
                <p class="impactful">
                    Competences et etapes du projet:
                </p>
                <ul class="quick-points">
                    <li>Reperage de bugs dans l'affichage et le fonctionnement</li>
                    <li>Mise en place de scripts de calcul (alcoolemie, amendes)</li>
                    <li>Gestion de la base de donnees MySQL</li>
                </ul>
            </div>
            <aside class="photo-slot" aria-label="Exemple de projet GNS3">
                <div class="photo-box">
                    <a href="assets/nolarkproj.png">
                        <img src="assets/nolarkproj.png" alt="Site web Nolark" >
                    </a>
                </div>
            </aside>
        </section>

        <section class="card">
            <h2>Documents lies</h2>
            <div class="info-grid">
                <a class="info-link" href="https://nolark.gil83.fr/">
                    <article class="info-cards">    
                        <h3>Site web Nolark original</h3>
                        <h1> 🌏︎ </h1>
                    </article>
                </a>
                <a class="info-link" href="https://github.com/MetatoGithub/nolark-burgess">
                    <article class="info-cards">
                        <h3>Projet GitHub nolark-burgess</h3>
                        <h1> 🌏︎ </h1>
                    </article>
                </a>
            </div>
        </section>


    </main>
    <?php include __DIR__ . "/footer.php"; ?>
</body>
</html>
