<?php
include('../config/config.php');

$title = 'Om kurs och webbplatsen';
date_default_timezone_set('Europe/Stockholm');
$today = date('Y-m-d H:i:s');
$weekday = date('N');
$weekdays = array("error", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
$veckodag = $weekdays[$weekday];
$me_class = "";
$about_class = "active";
$report_class = "";
$link_class = "";
$today_class = "";

include('../view/header.php');
?>

<main>
    <div class="img-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/512px-HTML5_logo_and_wordmark.svg.png" alt="HTML">
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/800px-PHP-logo.svg.png" alt="PHP">
        <img src="https://static-00.iconduck.com/assets.00/sql-database-generic-icon-1521x2048-d0vdpxpg.png" alt="SQL">
    </div>
    <h1>Om kursen Webbteknologier</h1><hr>
    <p>Kursen <i>Webbteknologier</i> eller <i>webtec</i> är en av programmeringskurserna bth erbjuder.
     Kursen är en introduktion till webbprogrammering. Språken som man lär sig att använda i kursen är HTML, CSS, PHP och SQL.
      Några av de viktigaste språken for webbsidor. Javascript lärs ut i en senare separat kurs.
     När kursen är klar så ska man kunna skapa enkla, stilfulla webbsidor.
    </p>
    <p>Allt kursmaterial ligger på bth's egna hemsida dbwebb.se. Man jobbar i terminalen med att testa och lämna in uppgifter.
         För att göra det behöver man först installera verktyget dbwebb och sedan klona kursrepot.</p>
    <hr>
    <p>Länk till kursen på dbwebb: <a href="https://dbwebb.se/kurser/webtec-v2">webtec</a></p>
    <p>Länk till kursrepo på Github: <a href="https://github.com/dbwebb-se/webtec">kursrepo</a></p>
</main>

<?php include('../view/footer.php') ?>