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
$me_class = "";
$about_class = "";
$report_class = "";
$link_class = "";
$today_class = "active";

include('../view/header.php');
?>

<main>
    <h1>Idag</h1><hr>
    <p><?= $today?></p>
    <p id="week_day" title="jag vägrar lägga in en ugly disgrace i min webbplats XX">&#127872;<?= $veckodag?>&#127872;</p>
    <p>Vecka <?= $week?></p>
    </main>

<?php include('../view/footer.php') ?>