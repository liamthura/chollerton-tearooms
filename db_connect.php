<?php
$servername = "localhost";
$username = "12345";
$password = "12345";
$dbname = "12345";

//Create connection
$dbConn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$dbConn) {
    echo "<p>Sorry, the connection to your database failed.</p>";
    echo "<p>The error was:" .$dbConn->connect_error. "</p>";
    exit;
}
