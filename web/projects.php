<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tim Burgess-Poggioli | Projects</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body class="page page-projects">
    <?php
    $brand = "tim@portfolio:~/projects$";
    include __DIR__ . "/navbar.php";
    ?>

    <main class="content-wrap">
        <section class="card">
            <p class="eyebrow">Projects</p>
            <h1>Work In Progress</h1>
            <p>Add your completed and in-progress projects below as your portfolio grows.</p>
        </section>

        <section class="card project-grid">
            <article class="project-card">
                <h2>Home Lab Network Map</h2>
                <p>Document VLANs, addressing, firewall rules, and physical topology.</p>
                <div class="chips">
                    <span>Networking</span>
                    <span>Documentation</span>
                </div>
            </article>

            <article class="project-card">
                <h2>Linux Server Build</h2>
                <p>Hardened self-hosted VM with SSH best practices and monitoring tools.</p>
                <div class="chips">
                    <span>Linux</span>
                    <span>Self Hosting</span>
                </div>
            </article>

            <article class="project-card">
                <h2>Automation Scripts</h2>
                <p>Shell scripts for backups, updates, and service health checks.</p>
                <div class="chips">
                    <span>Coding</span>
                    <span>Bash</span>
                </div>
            </article>
        </section>
    </main>

    <footer class="site-footer">
        <p>Tip: replace each card with real project links, screenshots, and outcomes.</p>
    </footer>
</body>
</html>
