<?php
require_once '../phpInclude/connect.php';
$inVehicle = $_POST['inVehicle'];
$typeOfVehicle = $_POST['typeOfVehicle'];
$additionalDetails = $_POST['additionalDetails'];
$IDreport = $_POST['IDreport'];


$sql = "INSERT INTO classOneReport (IDclassOne, inVehicle, typeOfVehicle, additionalDetails, IDreport)
    VALUES (NULL, b'$inVehicle', '$typeOfVehicle', '$additionalDetails', '$IDreport');";
$conn->query($sql);
header("Location: ../classOne.php?classOne=success");
require_once '../phpInclude/close.php';
?>