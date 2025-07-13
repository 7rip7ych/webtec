<?php

include('../config/config.php');

$name = $_POST["name"] ?? "";
$address = $_POST["address"] ?? "";
$checkbox = $_POST["check"] ?? false;

$success = $name && $address && $checkbox;

if ($success) {
    // Redirect if success
    $_SESSION["flash-message"] = "Everything was fine!";
    header("Location: form_result.php");
    exit();
}

// Redirect if failed
$_SESSION["flash-message"] = "The form was not successfully processed, please fill in all parts of the form.";
header("Location: datastructure.php#form");
exit();
?>

<h1>Form submission service</h1>

<p>Thank you for the submitted form! I got the following data from you.</p>

<?php if ($name) : ?>
    <p>Name:<br><?= htmlentities($name) ?></p>
<?php else : ?>
    <p>You did NOT enter your name!</p>
<?php endif; ?>

<?php if ($address) : ?>
    <p>Address:<br><?= htmlentities($address) ?></p>
<?php else : ?>
    <p>You did NOT enter your address!</p>
<?php endif; ?>

<?php if ($checkbox) : ?>
    <p>You DID check the terms. Nice, all terms apply!</p>
<?php else : ?>
    <p>You did NOT check the terms. Why is that? Try once more!</p>
<?php endif; ?>

<?php if ($success) : ?>
    <p>Success! All parts of the form are valid! You may proceed!</p>
<?php else : ?>
    <p>You failed to fill in some parts of your form, try once more!</p>
<?php endif; ?>

<h2>Debug incoming $_POST</h2>

<p>This is how you can debug the content of the incoming $_POST.</p>

<pre><?= var_dump($_POST) ?></pre>