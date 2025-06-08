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
        <link rel="stylesheet" href="css/figure.css">
        <link rel="stylesheet" href="css/byline.css">
        <link rel="stylesheet" href="css/two-col-layout.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
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
            <span class="title">Kursen webtec</span>
            <span class="subtitle">Min rapportsida</span>
        </header>