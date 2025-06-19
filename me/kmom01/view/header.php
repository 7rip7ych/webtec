<!doctype html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?> | Me-sidan</title>
        <meta name="referrer" content="unsafe-url">
        <link rel="shortcut icon" href="img/favicon.png"/>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="me.php">
                    <img src="img/7rip7ych.gif" width="48" height="48" alt="7rip7ych">
                </a>
                <ul class="nav">
                    <li class=<?= $me_class?>><a href="me.php">Om mig</a></li>
                    <li class=<?= $report_class?>><a href="report.php">Redovisning</a></li>
                    <li class=<?= $about_class?>><a href="about.php">Om kursen</a></li>
                    <li class=<?= $link_class?>><a href="links.php">Länkar</a></li>
                    <li class=<?= $today_class?>><a href="today.php">Idag</a></li>
                </ul>
            </div>
        </nav>
        <header>
            Dagens datum är <?= $today ?> och idag är det <?= $veckodag ?>.
        </header>