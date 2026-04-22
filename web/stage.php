<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stages | Tim Burgess--Poggioli</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    $brand = "tim@portfolio:~/stage $";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="card">
            <p class="eyebrow">Tim Burgess--Poggioli</p>
            <h1>Stages</h1>
            <p>Voici les stages que j'ai effectues et prevus durant ma formation en BTS SIO.</p>
        </section>

        <section class="card">
            <div class="info-grid">
                <article class="stage">
                    <p class="eyebrow">1ere annee</p>
                    <h3>Naval Group Ollioules</h3>
                    <p>Le stage de 1ere annee sera effectue en Mai 2026</p>
                </article>
                <article class="stage-wip">
                    <p class="eyebrow-wip">2eme annee</p>
                    <h3>A suivre...</h3>
                    <p>Le stage de 2eme annee sera effectue en Janvier 2027</p>
                </article>
            </div>
        </section>
    </main>
    <?php include __DIR__ . "/footer.php"; ?>
</body>
</html>
