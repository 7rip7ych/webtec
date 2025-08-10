<?php

include('../config/config.php');

$title = 'Sök namn';

include('../view/header.php');

// Include functions
require "../src/database.php";

// Get if the form is posted or not
$doit = $_GET['doit'] ?? null;
$query = $_GET['query'] ?? null;

// Include view
require "../view/search.php";

// Do the search query if the form is posted
if ($doit || $query) {
    // Connect to database
    $dsn = getDSN("../db/db.sqlite");
    $db = connectToDatabase($dsn);

    // Create sql statement
    $sql = <<<EOD
    SELECT
        namn,
        (SELECT betydelse FROM namnbetydelse
        WHERE namn = n.namn) AS 'betydelse',
        (SELECT antal FROM efternamn_antal
        WHERE namn = n.namn) AS 'efternamn_antal',
        (SELECT antal FROM fornamn_k_antal
        WHERE namn = n.namn) + (SELECT antal FROM fornamn_m_antal
        WHERE namn = n.namn) AS 'fornamn_antal',
        GROUP_CONCAT(tabell, ', ') AS 'tabeller'
    FROM (
        SELECT
            namn,
            'namnlista' AS tabell
        FROM namnlista
        UNION ALL
        SELECT
            namn,
            'namnbetydelse' AS tabell
        FROM namnbetydelse
        UNION ALL
        SELECT
            namn,
            'efternamn_antal' AS tabell
        FROM efternamn_antal
        UNION ALL
        SELECT
            namn,
            'fornamn_k_antal' AS tabell
        FROM fornamn_k_antal
        UNION ALL
        SELECT
            namn,
            'fornamn_m_antal' AS tabell
        FROM fornamn_m_antal
    ) AS n
    WHERE
        namn LIKE ?
    GROUP BY namn
    ORDER BY LENGTH(namn) ASC, COUNT(tabell) DESC, fornamn_antal DESC, efternamn_antal DESC
    ;
    EOD;
    // Searches 5 tables, sorts matches by length>> number of tables>> firstname count>> surname count

    // Prepare the sql statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement
    $arg = "%" . $query . "%";
    $stmt->execute([$arg]);

    // Get resultset
    $res = $stmt->fetchAll();

    // Print out resultset
    include('../view/searchResult.php');
}

echo "</article></main>";

include('../view/footer.php');
