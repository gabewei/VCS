<?php
$servername = "gator4268.hostgator.com";
$dBUsername = "mmclend_login";
$dBPassword = "logintoor";
$dBName = "mmcclend_phplogin";

$conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName);

if ($conn->connect_error) {
    ("Connection to online database failed: ". $conn->connect_error);
    $servername = "localhost";
    $dBUsername = "root";
    $dBPassword = "toor";
    $dBName = "loginsystemtut";

    $conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}