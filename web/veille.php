<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tim Burgess-Poggioli | Template A</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <?php
    $brand = "tim@portfolio:~/template-a$";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="card">
            <p class="eyebrow">Blank Page</p>
            <h1>Template A</h1>
            <p>This page is intentionally blank so you can build a custom section later.</p>
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
        </section>
    </main>
</body>
</html>
