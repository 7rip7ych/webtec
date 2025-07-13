<?php
include('../config/config.php');

$title = 'Fredag';

$weekdaySwe = ['error', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag', 'Söndag'];
$date = $_GET['date'] ?? date('Y-m-d');
$timestamp = strtotime($date);

$dayNum = date('N', $timestamp);
$day = $weekdaySwe[$dayNum];
$message = "";

$class = "not-friday";

if ($dayNum == 5) {
    $message = '<p class="barbie">Woohoo, fredag!</p>';
    $class = "friday";
} else if ($dayNum == 4) {
    $message = '<p class="coming-soon">Fredag kommer snart</p>';
} else if ($dayNum < 5) {
    $daysLeft = 5 - $dayNum;
    $message = "<p>Idag är $day. Det är $daysLeft dagar kvar till fredag, men kom ihåg</p>";
} else if ($dayNum > 5) {
    $daysLeft = 7 - $dayNum + 5;
    $message = "<p>Det är $day. Det var precis fredag så nästa fredag är om $daysLeft dagar.</p>";
}

include('../view/header.php');
?>

<header class="header friday-header">
    <img src="img/stay-cunty.jpg" alt="Stay cunty">
    <span class="title fascinate-inline">Är det fredag än?</span>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
    <div class="bubble"><div></div></div>
</header>

<main class="main friday-main <?= $class ?>">
    <?php if ($class === "friday") : ?>
        <img src="img/friday/camera.png" alt="camera">
        <img src="img/friday/gameboy.png" alt="gameboy">
        <img src="img/friday/heart.png" alt="heart">
        <img src="img/friday/milk.png" alt="strawberry milk">
        <img src="img/friday/planet.png" alt="planet">
        <img src="img/friday/phone.png" alt="phone">
        <img src="img/friday/moon.png" alt="moon">

        
        <img src="img/friday/transparent-fairy.png" alt="fairy">
        <img src="img/friday/oia-uia.gif" alt="spinning cat">
        <img src="img/friday/pyuta.png" alt="computer">
        <img src="img/friday/skeleton.gif" alt="skeleton">
        <img src="img/friday/sparkles.gif" alt="sparkles">
        <img src="img/friday/sparkles.gif" alt="sparkles">
        <img src="img/friday/sparkles.gif" alt="sparkles">
        <img src="img/friday/sparkles.gif" alt="sparkles">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/Az-sDSiPd6s?si=xTQtPNC6bqKUGCGd?autoplay=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
        <img src="img/friday/borboletas-butterflies.gif" alt="butterflies">
        
        <img src="img/friday/pink-tv.png" alt="pink tv">
        <img src="img/friday/bow.png" alt="bow">
        <p class="impact">Det ÄR fredag.</p>
        
    <?php elseif ($dayNum == 4) : ?>
        <img src="img/friday/skeleton-attack.jpg" alt="skeleton attack">
    <?php elseif ($dayNum > 5) : ?>
        <img src="img/friday/wizard.jpg" alt="cat wizard">
    <?php else : ?>
        <img src="img/friday/toughest-battles.jpg"  alt="Justiiin Bieber" style="border-top: 55px solid #6f6da8;">
    <?php endif; ?>
    <div class="friday-message"><?= $message ?></div>
</main>
<?php include('../view/footer.php') ?>