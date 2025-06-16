<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$isHome = ($currentPage === 'index.php');
?>

<header>
    <div class="menu-toggle" id="menuToggle" aria-label="Apri menu" aria-expanded="false" aria-controls="main-navigation">
        <span></span>
        <span></span>
        <span></span>
    </div>

   <nav class="navigation" id="main-navigation">
    <ul>
        <li><a href="<?php echo $isHome ? '#home' : 'index.php#home'; ?>">Home</a></li>
        <li><a href="<?php echo $isHome ? '#servizi' : 'index.php#corsi'; ?>">Corsi</a></li>
        <li><a href="<?php echo $isHome ? '#contatti' : 'index.php#contatti'; ?>">Contatti</a></li>
    </ul>
</nav>
</header>

<style>
    .logo img {
        height: 75px !important;
        transition: transform 0.4s ease !important;
    }
</style>
