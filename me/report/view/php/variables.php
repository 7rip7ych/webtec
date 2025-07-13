<?php

$name = "Ida";
$city = "Södertälje";
$age = 20;
$birthDay = 15;
$birthMonth = 3;

$currentYear = date('Y');
$birthYear = intval($currentYear) - $age;


$radius = 7.0;
$pi = pi();

$circumference = 2 * $radius * $pi;
$area = $pi * $radius * $radius;

$formattedRadius = number_format($radius, 1);
$formattedCircumference = number_format($circumference, 2);
$formattedArea = number_format($area, 2);


$messageAsRot13 = "Xhqbf! Qh svknqr rkgenhcctvsgra!";
$decryptedMessage = str_rot13($messageAsRot13);
?>

<h2>Variabler</h2>

<p>Jag har hört talas om <?= $name ?> som bor i <?= $city ?>. Vet du vem det är?</p>
<p>Jag föddes den <?= $birthDay ?>/<?= $birthMonth ?> och jag är <?= $age ?> år gammal. Kan du räkna ut vilket år jag föddes?</p>
<p>I år är det <?= $currentYear ?> och om du är <?= $age ?> i år så föddes du år <?= $birthYear ?>.</p>
<br>
<p>Cirkelns radie är <?= $radius ?> enheter, dess omkrets är <?= $circumference ?> enheter och dess area är <?= $area ?> enheter i kvadrat.</p>
<p>Cirkelns radie är <?= $formattedRadius ?> enheter, dess omkrets är <?= $formattedCircumference ?> enheter och dess area är <?= $formattedArea ?> enheter i kvadrat (formatterad utskrift).</p>
<br>
<p>Det krypterade meddelandet är: <?= $messageAsRot13 ?></p>
<p>Det dekrypterade meddelandet: <?= $decryptedMessage ?></p>