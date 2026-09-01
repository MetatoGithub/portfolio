<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#0a0a12">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Stages - Tim Burgess--Poggioli</title>
    <link rel="icon" type="assets/favicon.png" href="assets/favicon.png">
    <link rel="stylesheet" href="styles.css?newcache01" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    $brand = "tim@portfolio:~/stag $";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="card">
            <p class="eyebrow">Tim Burgess--Poggioli</p>
            <h1>Stages</h1>
            <p>Voici les stages que j'ai effectués et prévus durant ma formation en BTS SIO.</p>
        </section>

        <section class="card">
            <div class="info-grid">
                <a class="stage-link" href="stage_1.php">
                <article class="stage">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmarine-oceans.com%2Fwp-content%2Fuploads%2F2022%2F12%2FNaval-Group-3-scaled.jpeg&f=1&nofb=1&ipt=62095f6d86d260d81be76f08cae926944ae20aceada3b92469d31dedef393791" alt="Naval Group Ollioules" class="stage-image">
                    <p class="eyebrow">1re année</p>
                    <h3>Naval Group Ollioules</h3>
                    <p>Le stage de 1re s'est deroule en Mai et Juin 2026</p>
                </article>
                </a>
                <article class="stage-wip">
                    <p class="eyebrow-wip">2e année</p>
                    <h3>À suivre...</h3>
                    <p>Le stage de 2e année sera effectué en janvier 2027</p>
                </article>
            </div>
        </section>
    </main>
    <?php include __DIR__ . "/footer.php"; ?>
</body>
</html>
