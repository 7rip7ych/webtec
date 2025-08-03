<?php
include('../config/config.php');

$title = 'Kalender';

$date = getDateAndTime();
$month = getMonthDetails($date["timestamp"]);
$year = date('Y', $date["timestamp"]);

$tableContent = '';


for ($i = 0; $i < $month["monthLength"]; $i++) {
    $currentTime = $month["monthStart"] + $i * 60 * 60 * 24;
    $tempDate = getDateDetails($currentTime);

    $dayOfMonth = $tempDate["day"];
    $dayOfYear = $tempDate["dayOfYear"];
    $dayStr = $tempDate["dayName"];

    $weekContent = "";
    $rowClass = "";
    if ($tempDate["day"] == 1 || $tempDate["dayOfWeek"] == 1) {
        $weekContent = $tempDate["week"];
    }
    if ($tempDate["dayOfWeek"] == 7) {
        $rowClass = 'class="red-date"';
    }
    $tableContent .= "<tr $rowClass><td>$dayOfMonth</td><td>$dayStr</td><td>$dayOfYear</td><td></td><td>$weekContent</td></tr>";
}


include('../view/header.php');
?>

<main class="main">
    <article class="article">
        <p>Efterliknar: <a href="https://tigerstads.se/wp-content/uploads/2022/06/91171025.jpg">kalender</a></p>
        <form method="get">
            <p>
                Välj ett datum:
                <input type="date" value="<?= $date["date"] ?>" name="date">
            </p>

            <p>
                <input type="submit" value="Skicka" name="doit">
                <input type="reset" value="Rensa">
            </p>
        </form>
        <div class="calender-container">
            <h2><?= $month["name"] ?> <?= $year ?></h2>
            <table class="table calender-table">
                <?= $tableContent ?>
            </table>
            <p>
                <a href="?date=<?= date('Y-m-d', $month["prevMonth"]) ?>">&lt; <?= date('F', $month["prevMonth"]) ?></a>
                <a href="?date=<?= date('Y-m-d', $month["nextMonth"]) ?>"><?= date('F', $month["nextMonth"]) ?> &gt;</a>
            </p>
        </div>
    </article>
</main>



<?php include('../view/footer.php') ?>