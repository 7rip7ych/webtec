<?php

include('../config/config.php');

$sum = 0;
$number = 1;
$oddStr = "";

while ($sum < 42) {
    if (fmod($number, 2) == 1) {
        $sum += $number;
        $oddStr .= "Adding $number, sum is $sum.<br>";
    }
    $number++;
}

// for loop summing all even numbers under 42
$forSum = 0;
for ($i = 1; $i <= 42; $i++) {
    if ($i % 2 === 0) {
        $forSum += $i;
    }
}


// dates
$timestampToday = time();
$currentDate = date('Y-m-d');
$currentDay = date('l');
$currentWeek = date('W');
$dayNum = date('N');
$timestampWeekStart = $timestampToday - ($dayNum - 1) * 60 * 60 * 24;
$weekStr = "";

for ($i = 0; $i <= 6; $i++) {
    $timestamp = $timestampWeekStart + $i * 60 * 60 * 24;
    $dateStr = date('Y-m-d', $timestamp);
    $dayStr = date('l', $timestamp);

    $isToday = "";
    if ($currentDate === $dateStr) {
        $isToday = "  (today)";
    }

    $weekStr .= "<li>$dayStr $dateStr $isToday</li>\n";
}
?>

<h2>Loopar med for och while</h2>

<p>Calculating the sum of odd numbers, until the sum is 42 or more.</p>
<p><?= $oddStr ?></p>

<p>Today is <?= $currentDay ?> in week <?= $currentWeek ?> and the date is <?= $currentDate ?>.</p>
<ul><?= $weekStr ?></ul>