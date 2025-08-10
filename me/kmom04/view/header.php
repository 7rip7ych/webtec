<?php
// Get current page controller
$requestUri = $_SERVER['SCRIPT_NAME'];
$pageController = basename($requestUri);

?>

<!doctype html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?> | Me-sidan</title>
        <meta name="referrer" content="unsafe-url">
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/figure.css">
        <link rel="stylesheet" href="css/byline.css">
        <link rel="stylesheet" href="css/two-col-layout.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/crazy.css">
        <link rel="stylesheet" href="css/tables.css">
        <link rel="stylesheet" href="css/fonts.css">
    </head>
    <body>
        <nav class="navbar">
            
                <a class="brand" href="me.php">
                    <img src="img/7rip7ych.gif" alt="7rip7ych" class="brand">
                </a>
                <ul class="nav">
                    <li <?= checkController("me.php", $pageController)?>><a href="me.php">Om mig</a></li>
                    <li <?= checkController("about.php", $pageController)?>><a href="about.php">Om kursen</a></li>
                    <li <?= checkController("links.php", $pageController)?>><a href="links.php">Länkar</a></li>
                    <li <?= checkController("report.php", $pageController)?>><a href="report.php">Redovisning</a></li>

                    <li <?= checkController("assignments.php", $pageController)?>>
                        <div class="menu-dropdown">
                            <a href="assignments.php">Uppgifter</a>
                            <div class="dropdown-content">
                                <a href="today.php" <?= checkController("today.php", $pageController)?>>Idag</a>
                                <a href="friday.php" <?= checkController("friday.php", $pageController)?>>Fredag</a>
                                <a href="month.php" <?= checkController("month.php", $pageController)?>>Kalender</a>
                            </div>
                        </div>
                    </li>

                    <li <?= checkController("playgrounds.php", $pageController)?>><a href="playgrounds.php">Playgrounds</a></li>
                    <li <?= checkController("session.php", $pageController)?>><a href="session.php">Sessionen</a></li>
                    <li <?= checkController("photocal.php", $pageController)?>><a href="photocal.php">Almanacka</a></li>
                    <li <?= checkController("guessname.php", $pageController)?>><a href="guessname.php">Gissningsspel</a></li>
                </ul>
            
        </nav>
        <?php if ($pageController !== 'today.php' && $pageController !== 'friday.php') : ?>
            <header class="header">
                <img src="img/stay-cunty.jpg" alt="Stay cunty">
                <span class="title">Kursen webtec</span>
                <span class="subtitle">Min rapportsida</span>
            </header>
        <?php endif; ?>