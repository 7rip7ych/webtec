<?php
// Get current page controller
$requestUri = $_SERVER['SCRIPT_NAME'];
$pageController = basename($requestUri);

$me_class = $about_class = $report_class = $link_class = $today_class = $assign_class = $tryout_class = $play_class = $friday_class = $month_class = "no";

switch ($pageController) {
    case 'me.php':
        $me_class = "active";
        break;
    case 'about.php':
        $about_class = "active";
        break;
    case 'report.php':
        $report_class = "active";
        break;
    case 'links.php':
        $link_class = "active";
        break;
    case 'assignments.php':
        $assign_class = "active";
        break;
    case 'css-features.php':
        $tryout_class = "active";
        break;
    case 'play.php':
        $play_class = "active";
        break;
    case 'today.php':
        $today_class = "active";
        break;
    case 'friday.php':
        $friday_class = "active";
        break;
    case 'month.php':
        $month_class = "active";
        break;
}

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
            <div class="navbar-inner">
                <a class="brand" href="me.php">
                    <img src="img/7rip7ych.gif" alt="7rip7ych" class="brand">
                </a>
                <ul class="nav">
                    <li class=<?= $me_class?>><a href="me.php">Om mig</a></li>
                    <li class=<?= $report_class?>><a href="report.php">Redovisning</a></li>
                    <li class=<?= $about_class?>><a href="about.php">Om kursen</a></li>
                    <li class=<?= $link_class?>><a href="links.php">Länkar</a></li>
                    <li class=<?= $assign_class?>><a href="assignments.php">Uppgifter</a></li>
                    <li class=<?= $tryout_class?>><a href="css-features.php">CSS Tryouts</a></li>
                    <li class=<?= $play_class?>><a href="play.php">Playground</a></li>
                    <li class=<?= $today_class?>><a href="today.php">Idag</a></li>
                    <li class=<?= $friday_class?>><a href="friday.php">Fredag</a></li>
                    <li class=<?= $month_class?>><a href="month.php">Kalender</a></li>
                </ul>
            </div>
        </nav>
        <?php if ($pageController !== 'today.php' && $pageController !== 'friday.php') : ?>
            <header class="header">
                <img src="img/stay-cunty.jpg" alt="Stay cunty">
                <span class="title">Kursen webtec</span>
                <span class="subtitle">Min rapportsida</span>
            </header>
        <?php endif; ?>