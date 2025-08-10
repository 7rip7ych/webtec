<?php

if (!$res) {
    echo "<p>Ingen information om namnet kunde hittas.</p>";
    echo "</article></main>";

    include('footer.php');

    die();
}

// print_r($res);

?>

<p>Sökningen gav <?= count($res) ?> resultat</p>

<?php foreach ($res as $row) : ?>
    <div class="search-match">
        <p class="match-source">
            <?= $row['tabeller'] ?>
        </p>
        <a class="match-link" href="name.php?query=<?= $row['namn'] ?>">
            <?= $row['namn'] ?>
        </a>
        <p class="match-desc">
            Antal med förnamnet: <?= $row['fornamn_antal'] ?><br>
            Antal med efternamnet: <?= $row['efternamn_antal'] ?><br>
            Betydelse: <?= $row['betydelse'] ?> ...
        </p>
    </div>
<?php endforeach ?>

