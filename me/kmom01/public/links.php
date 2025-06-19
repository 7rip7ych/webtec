<?php
include('../config/config.php');

$title = 'Om kurs och webbplatsen';
date_default_timezone_set('Europe/Stockholm');
$today = date('Y-m-d H:i:s');
$weekday = date('N');
$weekdays = array("error", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
$veckodag = $weekdays[$weekday];
$me_class = "";
$about_class = "";
$report_class = "";
$link_class = "active";
$today_class = "";

include('../view/header.php');
?>

<main>
    <h1>Användbara länkar</h1><hr>
    <p>Validering: 
        <a href="http://validator.w3.org/check/referer">HTML</a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
        <a href="https://validator.w3.org/checklink">Links</a>
    </p>
    <p>Verktyg:</p>
    <ul>
        <li><a href="https://web.dev/measure/">Mät sidans prestanda</a></li>
        <li><a href="https://caniuse.com/">CanIUse</a></li>
        <li><a href="https://codepen.io/">CodePen</a></li>
    </ul>
    <p>Manualer:</p>
            <ul>
                <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Reference">MDN: HTML</a></li>
                <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">MDN: CSS</a></li>
                <li><a href="https://html.spec.whatwg.org/multipage/">HTML Standard</a></li>
                <li><a href="https://www.w3.org/2009/cheatsheet/">Cheat Sheet</a></li>
                <li><a href="https://www.php.net/manual/en/">PHP</a></li>
            </ul>
</main>

<?php include('../view/footer.php') ?>