<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tim Burgess-Poggioli | Quick Info</title>
    <link rel="stylesheet" href="styles.css" />
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
            <aside class="photo-slot" aria-label="Profile photo placeholder">
                <div class="photo-box">
                    <img src="PLACEHOLDER.jpg" alt="Profile photo">
                </div>
            </aside>
        </section>

        <section class="card">
            <h2>Quick Info</h2>
            <div class="info-grid">
                <article>
                    <h3>Current Focus</h3>
                    <p>Routing, switching, Linux server hardening, and self-hosted monitoring.</p>
                </article>
                <article>
                    <h3>Tools I Use</h3>
                    <p>Linux, shell scripting, Git, and lightweight web stacks for dashboards.</p>
                </article>
                <article>
                    <h3>Next Goals</h3>
                    <p>Expand project portfolio with practical network labs and automation demos.</p>
                </article>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <p>Built for learning, documenting, and sharing technical progress.</p>
    </footer>
</body>
</html>
