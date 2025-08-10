<?php

require "src/database.php";

// Create a DSN for the database using its filename
$fileName = "db/db.sqlite";
$dsn = "sqlite:$fileName";
$db = connectToDatabase($dsn);

// Print out the success
echo "<p>The database at '$dsn' is now connected.<p>Dumping the database connection:<pre>";
var_dump($db);
