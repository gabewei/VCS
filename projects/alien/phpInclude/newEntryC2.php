<?php
require_once '../phpInclude/connect.php';
$inVehicle = $_POST['inVehicle'];
$typeOfVehicle = $_POST['typeOfVehicle'];
$personHarmDone = $_POST['personHarmDone'];
$environmentHarmDone = $_POST['environmentHarmDone'];
$physicalTrace = $_POST['physicalTrace'];
$descriptionOfTrace = $_POST['descriptionOfTrace'];
$additionalDetails = $_POST['additionalDetails'];
$IDreport = $_POST['IDreport'];


$sql = "INSERT INTO classTwoReport (IDclassTwo, inVehicle, typeOfVehicle, personHarmDone, environmentHarmDone, physicalTrace, descriptionOfTrace, additionalDetails, IDreport)
    VALUES (NULL, b'$inVehicle', '$typeOfVehicle', b'$personHarmDone', b'$environmentHarmDone', b'$physicalTrace', '$descriptionOfTrace', '$additionalDetails', '$IDreport');";
$conn->query($sql);
header("Location: ../classTwo.php?classTwo=success");
require_once '../phpInclude/close.php';
?>