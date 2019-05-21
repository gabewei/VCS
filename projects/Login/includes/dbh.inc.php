<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "toor";
$dBName = "loginsystemtut";

//$servername = "gator4268.hostgator.com";
//$dBUsername = "mmclend_login";
//$dBPassword = "logintoor";
//$dBName = "mmcclend_phplogin";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!conn) {
    die("Connection failed: ".mysqli_connect_error());
}