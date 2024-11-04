<?php
#create connection credentials
$db_host = "localhost";
$username = "root";
$password = "";
$DB_Name = "terbiyah_cbt";

#create mySQLi object
$conn = new mysqli($db_host, $username, $password, $DB_Name);

#error handler
    if ($conn->connect_error)
    {
        printf("ERROR: Connection to Database failed ! %s\n", $conn->connect_error);
        exit();
    }
