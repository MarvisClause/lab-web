<?php
$pageTitle = 'Home';
$currentPage = 'home';
?>

<!DOCTYPE html>
<html>
<?php require('../parts/head.php') ?>
<body>
<div class="header">
    <?php require('../parts/header.php') ?>
    <main class="banner">
        <div class="app-text">
            <h1 class="page_title"><span>HI,</span> I'm<br>Stanislav</h1>
            <div class="primary-btn">
                <div class="btn-group">
                    <div class="play-btn">
                        <div class="play-btn-inner">
                            <a href="resume.php"><i class="fa fa-play"></i></a>
                            <span>Watch Resume</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <<?php require('../parts/footer.php') ?>
    <div class="copy-right">
        <p>&copy; Kaminskyi 2022</p>
    </div>
</div>
</body>
</html>