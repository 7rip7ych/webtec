<?php

include('../config/config.php');

$date = $_GET['date'] ?? null;

$dateStr = "";
if ($date) {
    $dateStr = htmlentities($date);
}

?>

<h2>HTML formulär med GET</h2>

<form method="get">
    <p>
        Datum:
        <input type="date" value="<?= $dateStr ?>" name="date">
    </p>

    <p>
        <input type="submit" value="Skicka" name="doit">
        <input type="reset" value="Rensa">
    </p>

    <output>
        <?php if ($dateStr) : ?>
            <p>You have submitted the date: <code><?= $dateStr ?></code>.</p>
        <?php endif; ?>
    </output>
</form>

<p>This is how you can debug the content of the incoming <code>$_GET</code> variable.</p>
<?= var_dump($_GET) ?>