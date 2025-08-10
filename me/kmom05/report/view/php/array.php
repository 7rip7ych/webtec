<?php

$mikael = [
    "Mikael",
    "Roos",
    1968,
    "Teacher",
    78.2
];

$length = count($mikael);

$firstKey = array_key_first($mikael);
$lastKey = array_key_last($mikael);

$key0Exists = array_key_exists(0, $mikael);
$key10Exists = array_key_exists(10, $mikael);
?>


<h2>Array som datastrukturer</h2>

<p>Låt oss testa att använda en array.</p>

<p>På position <?= $firstKey ?> finns följande värde: '<?= $mikael[$firstKey] ?>' och på position <?= $lastKey ?> finns värdet: '<?= $mikael[$lastKey] ?>'.</p>

<p>Arrayen innehåller <?= $length ?> värden.</p>

<p>På position 0 finns ett värde: <?= $key0Exists ? "TRUE" : "FALSE" ?> och på position 10 finns ett värde: <?= $key10Exists ? "TRUE" : "FALSE" ?>.</p>

<pre><?= print_r($mikael, true) ?></pre>

<pre><?= var_dump($mikael) ?></pre>