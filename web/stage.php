<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stages | Tim Burgess--Poggioli</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <?php
    $brand = "tim@portfolio:~/template-b$";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="card">
            <p class="eyebrow">Blank Page</p>
            <h1>Template B</h1>
            <p>Use this as a reusable page shell for future portfolio sections.</p>
        </section>

        <section class="card template-grid">
            <article class="template-box">
                <h2>Section Placeholder</h2>
                <p>Add content, links, or visuals here.</p>
            </article>
            <article class="template-box">
                <h2>Section Placeholder</h2>
                <p>Add content, links, or visuals here.</p>
            </article>
            <article class="template-box">
                <h2>Section Placeholder</h2>
                <p>Add content, links, or visuals here.</p>
            </article>
        </section>
    </main>
    <?php include __DIR__ . "/footer.php"; ?>
</body>
</html>
