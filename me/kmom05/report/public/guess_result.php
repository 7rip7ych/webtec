<?php

include('../config/config.php');

$title = 'Gissningsspel resultat';

$flashMessage = getFlashMessage();

include('../view/header.php');

?>

<main class="main">
    <article class="article">
        <h1><?= $title ?></h1>

        <?php if ($flashMessage) : ?>
            <div class="flash-box"><?= $flashMessage ?></div>
        <?php endif; ?>
        <p>Det rätta svaret var: <?= $_SESSION["name"] ?></p>

        <p><a href="guessname.php" title="Guess game">Spela igen</a></p>
    </article>
</main>