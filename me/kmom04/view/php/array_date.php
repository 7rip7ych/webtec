<?php

$weekday = [
    "Måndag",
    "Tisdag",
    "Onsdag",
    "Torsdag",
    "Fredag",
    "Lördag",
    "Söndag"
];

$dayNrToday = date('N');

$dayToday = $weekday[$dayNrToday - 1];

$monthName = [];
$monthName[1] = "Januari";
$monthName[] = "Februari";
$monthName[] = "Mars";
$monthName[] = "April";
$monthName[] = "Maj";
$monthName[] = "Juni";
$monthName[] = "Juli";
$monthName[] = "Augusti";
$monthName[] = "September";
$monthName[] = "Oktober";
$monthName[] = "November";
$monthName[] = "December";

$monthString = implode(", ", $monthName);

$monthNumber = date('n');

$monthToday = $monthName[$monthNumber];
?>

<h2>Array med datum</h2>

<p>Här är en array med veckodagar på position 0 till 6.</p>

<pre><?= print_r($weekday) ?></pre>

<p>Idag är det veckodag: '<?= $dayToday ?>' (veckodag nummer <?= $dayNrToday ?>).</p>

<p>Vi har en array med månadernas namn, vi kan använda "implode()" på den för att skriva ut den som en sträng.</p>

<p><?= $monthString ?></p>

<p>Idag är det månad: '<?= $monthToday ?>' (månad nummer <?= $monthNumber ?>)</p>