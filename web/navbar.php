<?php
$currentPage = basename($_SERVER["PHP_SELF"] ?? "index.php");
$brand = isset($brand) ? $brand : "tim@portfolio:~$";

$navItems = array(
    "Page d'accueil" => $dirIndex . 'index.php',
    "Projets/AP" => $dirPages . 'projects.php',
    "Stage" => $dirPages . 'stage.php',
    "Veille informatique" => $dirPages . 'veille.php',
    "Patrimoine" => $dirPages . 'patrimoine.php'
);
?>

<header class="site-header">
    <div class="brand"><?php echo htmlspecialchars($brand, ENT_QUOTES, "UTF-8"); ?></div>
    <nav class="site-nav" aria-label="Main navigation">
        <?php 
        foreach ($navItems as $pageName => $pageUrl) {
            echo "\n", '<a href="', $pageUrl, '">', $pageName, '</a>';
        }
        ?>
    </nav>
</header>