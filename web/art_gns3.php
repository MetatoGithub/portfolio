<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#0a0a12">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>GNS3 - Tim Burgess--Poggioli</title>
    <link rel="icon" type="assets/favicon.png" href="assets/favicon.png">
    <link rel="stylesheet" href="styles.css?newcache01" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="page page-home">
    <?php
    $brand = "tim@portfolio:~/gns3 $";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="hero card">
            <div class="hero-copy">
                <p class="eyebrow">AP 1re annee</p>
                <h1>GNS3</h1>
                <p>
                    Dans le cadre de mon AP de 1re année, j'ai travaillé sur GNS3, un emulateur de réseau informatique. 
                    Avec l'aide de mon collaborateur Yannis Bruneau, nous avons mit en place une machine virtuelle, puis plus tard un serveur dedie, sur lequel nous avons pu effectuer nos tests et mettre en place des topologies de réseau virtuelles.
                </p>
                <p class="impactful">
                    Etapes du projet:
                </p>
                <ul class="quick-points">
                    <li>Mise en place du serveur </li>
                    <li>Installation du client GNS3 sur plusieurs machines</li>
                    <li>Importation des images de routeurs, commutateurs et hotes virtuels</li>
                    <li>Creation de topologies de reseau virtuelles</li>
                </ul>
            </div>
            <aside class="photo-slot" aria-label="Exemple de projet GNS3">
                <div class="photo-box">
                    <a href="assets/gns3proj.png">
                        <img src="assets/gns3proj.png" alt="Exemple de projet GNS3" >
                    </a>
                </div>
            </aside>
        </section>

        <section class="card">
            <h2>Documents lies</h2>
            <div class="info-grid">
                <a class="info-link" href="https://cloud.metatobac.cc/index.php/s/a3fTQN4pHSpNgMC/download/GNS3.pdf">
                    <article class="info-cards">    
                        <h3>Fiche de projet</h3>
                        <h1> 🗎 </h1>
                    </article>
                </a>
                <a class="info-link" href="https://cloud.metatobac.cc/index.php/s/ab44MSAEdDP74kD/download/fiche%20technique.pdf">
                    <article class="info-cards">
                        <h3>Fiche technique</h3>
                        <h1> 🗎 </h1>
                    </article>
                </a>
                <a class="info-link" href="https://yannisbruneau.odoo.com/actions-professionnelles">
                    <article class="info-cards">
                        <h3>Article de Yannis Bruneau</h3>
                        <h1> 🌏︎ </h1>
                    </article>
                </a>
            </div>
        </section>


    </main>
    <?php include __DIR__ . "/footer.php"; ?>
</body>
</html>
