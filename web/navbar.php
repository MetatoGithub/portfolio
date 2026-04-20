<?php
$currentPage = basename($_SERVER["PHP_SELF"] ?? "index.php");
$brand = isset($brand) ? $brand : "tim@portfolio:~$";

$navItems = [
    ["href" => "index.php", "label" => "Page d'accueil"],
    ["href" => "projects.php", "label" => "Projets"],
    ["href" => "template-a.php", "label" => "Veille informatique"],
    ["href" => "template-b.php", "label" => "Stage"],
    ["href" => "template-c.php", "label" => "Patrimoine"]
];
?>
<header class="site-header">
    <div class="brand"><?php echo htmlspecialchars($brand, ENT_QUOTES, "UTF-8"); ?></div>
    <nav class="site-nav" aria-label="Main navigation">
        <?php foreach ($navItems as $item): ?>
            <a
                href="<?php echo htmlspecialchars($item["href"], ENT_QUOTES, "UTF-8"); ?>"
                class="<?php echo $item["href"] === $currentPage ? "active" : ""; ?>"
            >
                <?php echo htmlspecialchars($item["label"], ENT_QUOTES, "UTF-8"); ?>
            </a>
        <?php endforeach; ?>
    </nav>
</header>
