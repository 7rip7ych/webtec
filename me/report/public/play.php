<?php

include('../config/config.php');

$title = 'Träna på PHP';
$me_class = "no";
$about_class = "no";
$report_class = "no";
$link_class = "no";
$today_class = "no";
$assign_class = "no";
$tryout_class = "no";

include('../view/header.php');
?>

<main class="main">
    <h1><?= $title ?></h1>

    <p>Här kommer skit</p>

    <?php include('../view/php/hello.php') ?>
    <?php include('../view/php/variables.php') ?>
</main>

<?php include('../view/footer.php') ?>