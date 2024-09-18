<?php
$servername = "$DB_SERVER";
$username = "$DB_USER";
$password = "$DB_PASS";
$dbname = "$DB_NAME";

//Create connection
$dbConn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$dbConn) {
    echo "<p>Sorry, the connection to your database failed.</p>";
    echo "<p>The error was:" .$dbConn->connect_error. "</p>";
    exit;
}
