<?php

require "src/database.php";

// Get id
$id = $_GET['id'] ?? null;
$name = $_GET['name'] ?? null;

// Escape if id is missing
if (!$id && !$name) {
    die("You have accessed this page without entering an id through the query string.");
}

// Connect to database
$dsn = getDSN("db/db.sqlite");
$db = connectToDatabase($dsn);

// Create sql statement
$sql = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    rowid = ?
    OR namn = ?
;
EOD;

// Prepare SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute SQL statement towards the database
$stmt->execute([$id, $name]);



// Get the resultset and print it out
$res = $stmt->fetch();

// If empty resultset
if (!$res) {
    die("The query did not find a match in the database table, empty resultset.");
}

require "view/single.php";
