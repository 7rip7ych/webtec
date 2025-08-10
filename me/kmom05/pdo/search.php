<?php

// Include functions
require "src/database.php";

// Get if the form is posted or not
$doit = $_GET['doit'] ?? null;
$query = $_GET['query'] ?? null;

// Include view
require "view/searchForm.php";

// Do the search query if the form is posted
if ($doit || $query) {
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
        namn LIKE ?
        OR datum LIKE ?
        OR namnlangd LIKE ?
        OR rowid LIKE ?
    ;
    EOD;

    // Prepare the sql statement so it can be executed
    $stmt = $db->prepare($sql);

    // Execute the SQL statement
    $args = [$query, $query, $query, $query];
    $stmt->execute($args);

    // Get resultset
    $res = $stmt->fetchAll();

    // Print out resultset
    require "view/table.php";
}
