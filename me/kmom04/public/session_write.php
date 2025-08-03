<?php

include('../config/config.php');

// Add random number to session
$_SESSION["magic"] = rand(1, 100);

// Increment session every time it's accessed
$increment = $_SESSION["increment"] ?? 0;
$increment += 1;
$_SESSION["increment"] = $increment;

// Redirect
header("Location: session.php");
exit();
