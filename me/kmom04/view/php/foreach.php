<?php

$textVariable = "Mumintrollet bor i det blå huset.";

$textArray = explode(" ", $textVariable);

$textList = "";

foreach ($textArray as $position => $word) {
    $word = trim($word, ".,:;-_?!()[]{}/"); // Remove punctuation
    $wordLength = mb_strlen($word); // Count every character once
    $textList .= "<li>'$word' med $wordLength bokstäver på position $position.</li>";
}


?>

<h2>Foreach</h2>

<p>Här kommer texten uppdelad i dess beståndsdelar.</p>

<p><?= $textVariable ?></p>

<ul>
    <?= $textList ?>
</ul>