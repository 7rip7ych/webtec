<?php

$red = [
    "name" => "Red",
    "symbol" => "Love, war, fire",
    "flower" => "Rose",
    "fruit" => "Tomato"
];

$green = [
    "name" => "Green",
    "symbol" => "Nature, youth, fertility",
    "flower" => "Hellebore",
    "fruit" => "Pear"
];

$blue = [
    "name" => "Blue",
    "symbol" => "Calmness, purity, divinity",
    "flower" => "Cornflower",
    "fruit" => "Blueberry"
];

$colors = [
    "red" => $red,
    "green" => $green,
    "blue" => $blue
];

?>

<h2>Nested array</h2>

<p>'<?= $colors["blue"]["flower"] ?>' is a blue flower and '<?= $colors["red"]["flower"] ?>' is a red flower.</p>

<p>The array contains <?= count($colors) ?> colors.</p>

<p>Below is the array.</p>
<pre><?= print_r($colors) ?></pre>