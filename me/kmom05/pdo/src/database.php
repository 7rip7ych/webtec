<?php

/**
 * Exception handler to print out a HTML message with details on the exception,
 * useful to deal with uncaught exceptions.
 *
 * @return object as the database connection object.
 */
function connectToDatabase(string $dsn): object
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>'$dsn'<br>";
        throw $e;
    }

    return $db;
}

/**
 * Gets the dsn.
 */
function getDSN(string $fileName): string
{
    if ($_SERVER["SERVER_NAME"] !== "www.student.bth.se") {
        $name = str_replace("/", "\\", $fileName);
        $fileName = "C:\\$name";
    }
    return "sqlite:$fileName";
}
