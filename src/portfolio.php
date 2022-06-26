<?php
$pageTitle = 'Portfolio';
$currentPage = 'portfolio';
?>
<!DOCTYPE html>
<html>
<?php require('../parts/head.php') ?>
<body>
<div class="header">
    <div class="navbar">
        <div class="logo">
            <a href="index.php">Kaminskyi 🇺🇦</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a class="current" href="portfolio.php">Portfolio</a></li>
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
    </div>

    <div class="info">
        <div class="app-text">
            <h3>What have I already done?</h3>
            <ul>
                <li>
                    <h4>1.PBike</h4>
                    <img src="img/pbike.png" alt="pbike_app">
                    <p>Other projects can be found on my<span> <a href="https://github.com/MarvisClause">GitHub...</a></span> </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/marviskaminskyi" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.behance.net/marvisclause" target="_blank"><i class="fa fa-behance"></i></a></li>
            <li><a href="https://www.linkedin.com/in/stanislav-kaminskyi-b20b031a3/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://www.instagram.com/marvisclause/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://t.me/StanislavKaminskyi" target="_blank"><i class="fa fa-telegram"></i></a></li>
            <li><a href="https://github.com/MarvisClause" target="_blank"><i class="fa fa-github"></i></a></li>
        </ul>
    </div>
    <div class="copy-right">
        <p>&copy; Kaminskyi 2022</p>
    </div>
</div>
</body>
</html>