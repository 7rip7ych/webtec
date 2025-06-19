<?php
include('../config/config.php');

$title = 'Redovisning';
date_default_timezone_set('Europe/Stockholm');
$today = date('Y-m-d H:i:s');
$weekday = date('N');
$weekdays = array("error", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
$veckodag = $weekdays[$weekday];
$me_class = "";
$about_class = "";
$report_class = "active";
$link_class = "";
$today_class = "";

include('../view/header.php');
?>

<main>
    <h1>Redovisning</h1><hr>
    <ul>
        <li><a href="#kmom01">kmom01</a></li>
        <li><a href="#kmom02">kmom02</a></li>
        <li><a href="#kmom03">kmom03</a></li>
        <li><a href="#kmom04">kmom04</a></li>
        <li><a href="#kmom05">kmom05</a></li>
        <li><a href="#kmom06">kmom06</a></li>
        <li><a href="#kmom10">kmom10</a></li>
    </ul>

    <h2 id="kmom01">kmom01</h2>
    <hr>
    <p>
        <b>Vilken utvecklingsmiljö använder du (operativsystem, texteditor, terminal, mm)?</b>
        <br>Windows 11, VS Code, WSL Linux Ubuntu terminal, Opera gx/Firefox webbläsare
    </p>
    <p>
        <b>Gick det bra att installera labbmiljön eller var det något som krånglade?</b>
        <br>Allt gick bra.
    </p>
    <p>
        <b>Är du bekant med terminalen och Unix-kommandon sedan tidigare?</b>
        <br>Bara sedan python-kursen jag läser nu. Men inte bekant sedan innan bth.
    </p>
    <p>
        <b>Är du bekant med HTML, CSS och PHP sedan tidigare eller har du jobbat med liknande tekniker?</b>
        <br>Jag har jobbat med HTML och CSS en del men för PHP är det första gången. 
    </p>
    <p>
        <b>Gick det bra att komma i gång med kursmomentet rent allmänt eller var det något som var lurigt,
             svårt eller utmanande?</b>
        <br>
    </p>
    <p>
        <b>Vilken är din TIL för detta kmom?</b>
        <br>Det jag har lärt mig är begränsat till php. Jag var lite förvirrad i början för vi skapade php filer
         men skrev bara html i dem!? Men det verkar vara väldigt användbart och lättare än javascript.
          Jag gillar speciellt att man kan återanvända delar av sidor och att det är lätt att infoga php element i html.
           Jag är inte så förtjust i syntaxen men jag lär väl vänja mig med den. Jag har ännu inte förstått exakt varför
           just php används men det förväntar jag mig förstå i framtiden och jag nöjer mig idag med att veta mer om php än 
           jag gjorde igår.
    </p>
    <br>
    <h2 id="kmom02">kmom02</h2>
    <hr>
    <p>Här kommer redovisningstexten för detta kursmoment.</p>
    <br>
    <h2 id="kmom03">kmom03</h2>
    <hr>
    <p>Här kommer redovisningstexten för detta kursmoment.</p>
    <br>
    <h2 id="kmom04">kmom04</h2>
    <hr>
    <p>Här kommer redovisningstexten för detta kursmoment.</p>
    <br>
    <h2 id="kmom05">kmom05</h2>
    <hr>
    <p>Här kommer redovisningstexten för detta kursmoment.</p>
    <br>
    <h2 id="kmom06">kmom06</h2>
    <hr>
    <p>Här kommer redovisningstexten för detta kursmoment.</p>
    <br>
    <h2 id="kmom10">kmom10</h2>
    <hr>
    <p>Här kommer redovisningstexten för detta kursmoment.</p>

</main>

<?php include('../view/footer.php') ?>