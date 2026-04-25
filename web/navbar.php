<?php
$currentPage = basename($_SERVER["PHP_SELF"] ?? "index.php");
$brand = isset($brand) ? $brand : "tim@portfolio:~$";

$navItems = array(
    "Page d'accueil" => $dirIndex . 'index.php',
    "Projets/AP" => $dirPages . 'projects.php',
    "Stage" => $dirPages . 'stage.php',
    "Veille informatique" => $dirPages . 'pagewip.php',
    "Patrimoine" => $dirPages . 'pagewip.php'
);
?>

<header class="site-header">
    <div class="brand"><?php echo htmlspecialchars($brand, ENT_QUOTES, "UTF-8"); ?></div>
    <button class="menu-toggle" aria-label="Toggle menu">☰</button>
    <nav class="site-nav" aria-label="Main navigation">
        <?php 
        foreach ($navItems as $pageName => $pageUrl) {
            echo "\n", '<a href="', $pageUrl, '">', $pageName, '</a>';
        }
        ?>
    </nav>
    <script>
        const header = document.querySelector(".site-header");
        const toggle = document.querySelector(".menu-toggle");
        const navMenu = document.querySelector(".site-nav");

        window.addEventListener("scroll", () => {
          if (window.scrollY > 50) {
            header.classList.add("scrolled");
          } else {
            header.classList.remove("scrolled");
          }
        });

        toggle.addEventListener("click", () => {
          navMenu.classList.toggle("open");
        
          if (window.scrollY <= 50) {
            header.classList.toggle("scrolled");
          }
        });
</script>
</header>