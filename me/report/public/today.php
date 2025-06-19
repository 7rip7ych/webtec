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

include('../view/header.php');
?>

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