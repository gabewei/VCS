<?php
$servername = "gator4268.hostgator.com";
$username = "mmcclend_alien";
$password = "alientoor";
$dbname = "mmcclend_alien";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    ("Connection to online database failed: ". $conn->connect_error);
    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "alien";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
?>