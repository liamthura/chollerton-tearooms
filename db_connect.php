<?php
$servername = "$_ENV[DB_SERVER]";
$username = "$_ENV[DB_USER]";
$password = "$_ENV[DB_PASS]";
$dbname = "$_ENV[DB_NAME]";

//Create connection
$dbConn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$dbConn) {
    echo "<p>Sorry, the connection to your database failed.</p>";
    echo "<p>The error was:" .$dbConn->connect_error. "</p>";
    exit;
}
