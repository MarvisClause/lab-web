<?php
/** @var string $currentPage*/
$siteTitleTag = "home" === $currentPage ? 'h1' : 'h2';
?>
<header class="navbar">
    <div class="logo">
        <a href="index.php">Kaminskyi 🇺🇦</a>
    </div>
    <div class="menu">
        <ul>
            <li><a class="current" href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="contact-info">
        <ul>
            <li><a href="#" class="phone-no">+380 66-324-3219 </a></li>
            <li><a href="#" class="sep"> / </a></li>
            <li><a href="#" class="email"> kaminskyi@gmail.com </a></li>
        </ul>

    </div>
</header>

