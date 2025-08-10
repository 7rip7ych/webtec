<?php

include('../config/config.php');

$name = $_POST["name"] ?? "";
$answer = $_SESSION["name"] ?? "";

if ($name == $answer) {
    $_SESSION["flash-message"] = "Korrekt!";
} else {
    $_SESSION["flash-message"] = "Det var tyvärr inkorrekt!";
}

header("Location: guess_result.php");
exit();
