<?php

$dayNum = date('N');
$dayStr = date('l');

// test on date certain to be a Friday
// $dateStr = '2025-06-06';
// $timestamp = strtotime($dateStr);
// $dayNum = date('N', $timestamp);
// $dayStr = date('l', $timestamp);

$message = "Today is $dayStr, it is NOT Friday yet! Carpe Diem.";
$daysLeft = 0;
if ($dayNum == 5) {
    $message = "Hurray! Today is $dayStr!! Carpe Diem.";
} else if ($dayNum < 5) {
    $daysLeft = 5 - $dayNum;
    $message = "$message It is $daysLeft days left to Friday, hang on.";
} else if ($dayNum > 5) {
    $daysLeft = 7 - $dayNum + 5;
    $message = "$message It was just Friday but it will come again in $daysLeft days.";
}
?>

<h2>Villkor med if</h2>
<p><?= $message ?></p>