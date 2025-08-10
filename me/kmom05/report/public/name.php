<?php

include('../config/config.php');

$title = 'Namn';

include('../view/header.php');
echo "<main class='main'>";

require "../src/database.php";

// Check querystring for query
$query = $_GET['query'] ?? null;

// Escape if no query found
if (!$query) {
    echo "<p>Du måste fylla i querysträngen för att få info om ett namn.
        <br>Syntaxen är <code>../name.php?query=[name]</code></p>";
    echo "</main>";
    include('../view/footer.php');
    die();
}

// Connect to database
$dsn = getDSN("../db/db.sqlite");
$db = connectToDatabase($dsn);



// Create SQL statement
/*
First sql function; commented out since its obsolete.

SELECT
    *,
    (SELECT betydelse FROM namnbetydelse
    WHERE namn = n.namn) AS 'betydelse',
    (SELECT antal FROM efternamn_antal
    WHERE namn = n.namn) AS 'efternamn_antal',
    (SELECT antal FROM fornamn_k_antal
    WHERE namn = n.namn) AS 'fornamn_k_antal',
    (SELECT antal FROM fornamn_m_antal
    WHERE namn = n.namn) AS 'fornamn_m_antal',
    (SELECT antal FROM tilltal_k_antal
    WHERE namn = n.namn) AS 'tilltal_k_antal',
    (SELECT antal FROM tilltal_m_antal
    WHERE namn = n.namn) AS 'tilltal_m_antal'
FROM namnlista AS n,
WHERE
    namn = ?
;
*/

$sql = <<<EOD
SELECT DISTINCT
    n.namn,
    nb.betydelse,
    ea.antal AS 'efternamn_antal',
    fk.antal AS 'fornamn_k_antal',
    fm.antal AS 'fornamn_m_antal',
    (SELECT antal FROM tilltal_k_antal
    WHERE namn = n.namn) AS 'tilltal_k_antal',
    (SELECT antal FROM tilltal_m_antal
    WHERE namn = n.namn) AS 'tilltal_m_antal'
FROM (SELECT ? AS namn) AS n
    LEFT OUTER JOIN namnlista AS nl
        ON n.namn = nl.namn
    LEFT OUTER JOIN namnbetydelse AS nb
        ON n.namn = nb.namn
    LEFT OUTER JOIN efternamn_antal AS ea
        ON n.namn = ea.namn
    LEFT OUTER JOIN fornamn_k_antal AS fk
        ON n.namn = fk.namn
    LEFT OUTER JOIN fornamn_m_antal AS fm
        ON n.namn = fm.namn
;
EOD;  // searches in namnlista, namnbetydelse, fornamn k and m tables

// Prepare SQL statement
$stmt = $db->prepare($sql);

// Execute SQL statement
$stmt->execute([$query]);

// Get resultset
$res = $stmt->fetch();


// Print message if result is null
array_shift($res);
if (checkArrayIsEmpty($res)) {
    echo "<p>Ingen information om namnet '$query' kunde hittas.</p>";
    echo "</main>";
    include('../view/footer.php');
    die();
}

include('../view/name.php');

echo "</main>";

include('../view/footer.php');
