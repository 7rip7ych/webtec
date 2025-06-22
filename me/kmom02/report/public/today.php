<?php
include('../config/config.php');

$title = 'Idag';
date_default_timezone_set('Europe/Stockholm');
$today = date('Y-m-d H:i:s');
$weekday = date('N');
$weekdays = array("error", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
$veckodag = $weekdays[$weekday];
$date = new DateTime();
$week = intval($date->format('W'));
$me_class = "no";
$about_class = "no";
$report_class = "no";
$link_class = "no";
$today_class = "active";
$assign_class = "no";
$tryout_class = "no";

?>
<!doctype html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?> | Me-sidan</title>
        <meta name="referrer" content="unsafe-url">
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Honk&family=Sixtyfour+Convergence&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/today.css">
        <link rel="stylesheet" href="css/tryout.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="me.php">
                    <img src="img/7rip7ych.gif" alt="7rip7ych" class="brand">
                </a>
                <ul class="nav">
                    <li class=<?= $me_class?>><a href="me.php">Om mig</a></li>
                    <li class=<?= $report_class?>><a href="report.php">Redovisning</a></li>
                    <li class=<?= $about_class?>><a href="about.php">Om kursen</a></li>
                    <li class=<?= $link_class?>><a href="links.php">Länkar</a></li>
                    <li class=<?= $today_class?>><a href="today.php">Idag</a></li>
                    <li class=<?= $assign_class?>><a href="assignments.php">Uppgifter</a></li>
                    <li class=<?= $tryout_class?>><a href="css-features.php">CSS Tryouts</a></li>
                </ul>
            </div>
        </nav>
        <header class="header">
            <img src="img/stay-cunty.jpg" alt="Stay cunty">
            <img src="img/justiin.jpg" alt="Stay cunty">
            <img src="img/justin-beiner.jpg" alt="Stay cunty">
            <img src="img/baddies.jpg" alt="Stay cunty">
            <img src="img/delulu.jpg" alt="Stay cunty">
            <img src="img/horrors.jpg" alt="Stay cunty">
            <img src="img/support.jpg" alt="Stay cunty">
            <img src="img/dressed.jpg" alt="Stay cunty">
            <span class="title">Kursen webtec</span>
            <span class="subtitle">Min rapportsida</span>

        </header>
        <main class="today-main"  title="disgrace">
            <article class="today-article">
                <h1 class="today-header">Idag</h1>

                <p class="today-weekday">&#127872;<?= $veckodag?>&#127872;</p>
                <p class="today-week">Vecka <?= $week?></p>

                <p class="today-date"><?= $today?></p>
                <p class="today-date"><?= $today?></p>
                <p class="today-date"><?= $today?></p>
                <p class="today-date"><?= $today?></p>
                <p class="today-date"><?= $today?></p>
                <p class="today-date"><?= $today?></p>
                <p class="today-date"><?= $today?></p>
                <p class="today-date"><?= $today?></p>
                <p class="today-date"><?= $today?></p>
                <p class="today-date"><?= $today?></p>

            </article>
        </main>

<?php include('../view/footer.php') ?>