<?php
include('../config/config.php');

$title = 'Om kurs och webbplatsen';
$me_class = "no";
$about_class = "no";
$report_class = "no";
$link_class = "active";
$today_class = "no";
$assign_class = "no";
$tryout_class = "no";

include('../view/header.php');
?>

<main class="main">
    <article class="article">
        <header>
            <h1>Användbara länkar</h1>
        </header>
        
        <p>Validering: 
            <a href="http://validator.w3.org/check/referer">HTML</a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
            <a href="https://validator.w3.org/checklink">Links</a>
        </p>
        Verktyg:
        <ul>
            <li><a href="https://web.dev/measure/">Mät sidans prestanda</a></li>
            <li><a href="https://caniuse.com/">CanIUse</a></li>
            <li><a href="https://codepen.io/">CodePen</a></li>
        </ul>
        Manualer:
                <ul>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Reference">MDN: HTML</a></li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">MDN: CSS</a></li>
                    <li><a href="https://html.spec.whatwg.org/multipage/">HTML Standard</a></li>
                    <li><a href="https://www.w3.org/2009/cheatsheet/">Cheat Sheet</a></li>
                    <li><a href="https://www.php.net/manual/en/">PHP</a></li>
                </ul>
        Referens:
        <ul>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Reference">HTML</a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">CSS</a></li>
            <li><a href="https://www.php.net/manual/en/">PHP</a></li>
            <li><a href="https://docs.python.org/3/">Python</a></li>
            <li><a href="https://www.w3.org/2009/cheatsheet/">cheatsheet</a></li>
        </ul>
        CSS3
        <ul>
            <li><a href="https://www.w3schools.com/css/css_units.asp">Units</a></li>
            <li><a href="https://www.w3schools.com/css/css_pseudo_classes.asp">pseudo-classes</a></li>
            <li><a href="https://www.w3schools.com/css/css_pseudo_elements.asp">pseudo-elements</a></li>
        </ul>
    </article>
</main>

<?php include('../view/footer.php') ?>