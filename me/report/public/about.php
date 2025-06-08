<?php
include('../config/config.php');

$title = 'Om kurs och webbplatsen';
$me_class = "no";
$about_class = "active";
$report_class = "no";
$link_class = "no";
$today_class = "no";
$assign_class = "no";
$tryout_class = "no";

include('../view/header.php');
?>
<div class="two-col-layout">
    <main class="main">
        <article class="article">
            <header>
                <div class="img-container">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/512px-HTML5_logo_and_wordmark.svg.png" alt="HTML">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/800px-PHP-logo.svg.png" alt="PHP">
                    <img src="https://static-00.iconduck.com/assets.00/sql-database-generic-icon-1521x2048-d0vdpxpg.png" alt="SQL">
                </div>
                <h1>Om kursen Webbteknologier</h1>
                <p class="author">Skriven av 7rip7ych, uppdaterad <time datetime="2024-09-29">2024-09-29</time>.</p>
            </header>

            <p>Kursen <i>Webbteknologier</i> eller <i>webtec</i> är en av programmeringskurserna bth erbjuder.
            Kursen är en introduktion till webbprogrammering. Språken som man lär sig att använda i kursen är HTML, CSS, PHP och SQL.
            Några av de viktigaste språken for webbsidor. Javascript lärs ut i en senare separat kurs.
            När kursen är klar så ska man kunna skapa enkla, stilfulla webbsidor.
            </p>
            <p>Allt kursmaterial ligger på bth's egna hemsida dbwebb.se. Man jobbar i terminalen med att testa och lämna in uppgifter.
                För att göra det behöver man först installera verktyget dbwebb och sedan klona kursrepot.</p>
            <?php include('../view/byline.php') ?>
        </article>
    </main>

    <aside class="aside">
        <h4>Dbwebb</h4>
        <p>Länk till kursen på dbwebb: <a href="https://dbwebb.se/kurser/webtec-v2">webtec</a></p>
        <h4>Github</h4>
        <p>Länk till kursrepo på Github: <a href="https://github.com/dbwebb-se/webtec">kursrepo</a></p>
    </aside>
</div>

<?php include('../view/footer.php') ?>