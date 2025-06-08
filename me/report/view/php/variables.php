<?php
include('../config/config.php');

$name = "Ida";
$city = "Södertälje";
$age = 20;
$birthDay = 15;
$birthMonth = 3;

$currentYear = date('Y');
$birthYear = $currentYear - $age;

$radius = 7.0;
$pi = 3.14159;

$circumference = 2 * $radius * $pi;
$area = $pi * $radius * $radius;
?>

<h2>Variabler</h2>

<p>Jag har hört talas om <?= $name ?> som bor i <?= $city ?>. Vet du vem det är?</p>
<p>Jag föddes den <?= $birthDay ?>/<?= $birthMonth ?> och jag är <?= $age ?> år gammal. Kan du räkna ut vilket år jag föddes?</p>
<p>Cirkelns radie är <?= $radius ?> enheter, dess omkrets är <?= $circumference ?> enheter och dess area är <?= $area ?> enheter i kvadrat.</p>
<p></p>
<p></p>