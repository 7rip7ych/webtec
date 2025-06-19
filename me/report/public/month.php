<?php
include('../config/config.php');

$title = 'Kalender';

$date = $_GET['date'] ?? date('Y-m-d');
$dateStr = htmlentities($date);
$timestamp = strtotime($date);
$month = date('F', $timestamp);
$year = date('Y', $timestamp);
// $yearLength = intval(date('L', $timestamp)) + 365;
$monthLength = date('t', $timestamp);
$monthLength = intval($monthLength);
$tableContent = '';

$monthStart = $timestamp - (date('j', $timestamp) - 1) * 60 * 60 * 24;

for ($i = 0; $i < $monthLength; $i++) {
    $currentTime = $monthStart + $i * 60 * 60 * 24;
    $dayOfMonth = date('j', $currentTime);
    $dayOfYear = date('z', $currentTime) + 1;
    $dayOfWeek = date('N', $currentTime);
    $dayStr = date('l', $currentTime);
    $week = date('W', $currentTime);
    $weekContent = "";
    $rowClass = "";
    if ($dayOfMonth == 1 || $dayOfWeek == 1) {
        $weekContent = $week;
    }
    if ($dayOfWeek == 7) {
        $rowClass = 'class="red-date"';
    }
    $tableContent .= "<tr $rowClass><td>$dayOfMonth</td><td>$dayStr</td><td>$dayOfYear</td><td></td><td>$weekContent</td></tr>";
}

$prevMonth = $timestamp - $monthLength * 60 * 60 * 24;
$nextMonth = $timestamp + $monthLength * 60 * 60 * 24;

include('../view/header.php');
?>

<main class="main">
    <article class="article">
        <p>Efterliknar: <a href="https://tigerstads.se/wp-content/uploads/2022/06/91171025.jpg">kalender</a></p>
        <form method="get">
            <p>
                Välj ett datum:
                <input type="date" value="<?= $dateStr ?>" name="date">
            </p>

            <p>
                <input type="submit" value="Skicka" name="doit">
                <input type="reset" value="Rensa">
            </p>
        </form>
        <div class="calender-container">
            <h2><?= $month ?> <?= $year ?></h2>
            <table class="table calender-table">
                <?= $tableContent ?>
            </table>
            <p>
                <a href="?date=<?= date('Y-m-d', $prevMonth) ?>">&lt; <?= date('F', $prevMonth) ?></a>
                <a href="?date=<?= date('Y-m-d', $nextMonth) ?>"><?= date('F', $nextMonth) ?> &gt;</a>
            </p>
        </div>
    </article>
</main>



<?php include('../view/footer.php') ?>