<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#0a0a12">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Veille - Tim Burgess--Poggioli</title>
    <link rel="icon" type="assets/favicon.png" href="assets/favicon.png">
    <link rel="stylesheet" href="styles.css?newcache01" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="page page-veille">
    <?php
    $brand = "tim@portfolio:~/veil $";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="card">
            <p class="eyebrow">Tim Burgess--Poggioli</p>
            <h1>Veille technologique</h1>
            <p>Voici une selection d'articles tires de mon systeme de veille informatique.</p>
            <p>Ce systeme est base sur une infrastructure self-hostee FreshRSS. Mon lecteur principal hormis le lecteur Web FreshRSS est l'application mobile FeedFlow.</p>
        </section>
        <section class="card article-grid">

            <a class="article-link" href="https://www.bleepingcomputer.com/news/security/us-gov-asks-anthropic-to-ban-foreign-national-access-to-fable-mythos/">
                <article class="article-card">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fceeyu-strapi.ams3.digitaloceanspaces.com%2Fbleeping_computer_logo_859ffefc77.png&f=1&nofb=1&ipt=0a3e8bb79e11a63671b9dd1fd46818c99a7de5a2f13113905049775c16f3fd59" alt="article image" class="article-image">
                    <p class="eyebrow-art">13 Juin 2026</p>
                    <h2>US Gov asks Anthropic to ban 'foreign national' access to Fable, Mythos</h2>
                    <p class="article-description">Article de: BleepingComputer</p>
                </article>
            </a>
            
            <a class="article-link" href="https://cybersecuritynews.com/linux-kernel-0-day-vulnerability-exploited/">
                <article class="article-card">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcybersecuritynews.com%2Fwp-content%2Fuploads%2F2025%2F05%2FCyber-Security-News-Logo.webp&f=1&nofb=1&ipt=11f887116a566d2440ab75e93ee1b80b3e65005a5aecc4ca53e81f6c6cdc049b" alt="article image" class="article-image">
                    <p class="eyebrow-art">4 Mai 2026</p>
                    <h2>CISA Warns of Linux “Copy Fail” 0-Day Vulnerability Exploited to Root Systems</h2>
                    <p class="article-description">Article de: CSN</p>
                </article>
            </a>

            <a class="article-link" href="https://www.it-connect.fr/securix-et-bureautix-le-linux-de-etat-pour-remplacer-windows/">
                <article class="article-card">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.it-connect.fr%2Fwp-content-itc%2Fuploads%2F2020%2F05%2FIT-Connect_Cover_Facebook_Flat_062017.png&f=1&nofb=1&ipt=0a81c2116f2ffb53baeb4090b41547465a98a725bb12c91655eb10b65117449f" alt="article image" class="article-image">
                    <p class="eyebrow-art">13 Avril 2026</p>
                    <h2>Sécurix et Bureautix : le Linux de l’État pour remplacer Windows</h2>
                    <p class="article-description">Article de: IT-CONNECT</p>
                </article>
            </a>

            <a class="article-link" href="https://www.it-connect.fr/le-patron-du-fbi-sest-fait-hacker-sa-boite-mail-personnelle-par-le-groupe-handala/">
                <article class="article-card">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.it-connect.fr%2Fwp-content-itc%2Fuploads%2F2020%2F05%2FIT-Connect_Cover_Facebook_Flat_062017.png&f=1&nofb=1&ipt=0a81c2116f2ffb53baeb4090b41547465a98a725bb12c91655eb10b65117449f" alt="article image" class="article-image">
                    <p class="eyebrow-art">30 Mars 2026</p>
                    <h2>Le patron du FBI s’est fait hacker sa boîte mail personnelle par le groupe Handala </h2>
                    <p class="article-description">Article de: IT-CONNECT</p>
                </article>
            </a>
        </section>
    </main>
    <?php include __DIR__ . "/footer.php"; ?>
</body>
</html>
