<?php

    $dbHost="localhost";
    $dbUser="root";
    $dbPass="";
    $dbName="website_db";

    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

    if (!$conn) {
        die("FATAL:DATABASE CONNECTION FAILED");
    }