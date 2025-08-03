<?php

include('../config/config.php');

$title = 'Playgrounds';

include('../view/header.php');
?>

<main class="main">
    <h1><?= $title ?></h1>

    <p>Här finns de lekplatser som används i övningar.</p>

    <ul class="link-list">
        <li><a href="css-features.php">CSS features</a></li>
        <li><a href="play.php">Play (kmom03)</a></li>
        <li><a href="play1.php">Play1 (kmom03)</a></li>
        <li><a href="datastructure.php">Datastructure (kmom04)</a></li>
    </ul>
    
</main>

<?php include('../view/footer.php') ?>