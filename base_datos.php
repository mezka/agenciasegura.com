<?php

/* connecting to mysql database */
$conn=new mysqli_connect("localhost", "mezka", "fujitsu", "agenciasegura");

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $conn->host_info . "\n";

?>