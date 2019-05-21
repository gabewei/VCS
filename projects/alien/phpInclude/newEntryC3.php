<?php
require_once '../phpInclude/connect.php';
$inVehicle = $_POST['inVehicle'];
$typeOfVehicle = $_POST['typeOfVehicle'];
$personHarmDone = $_POST['personHarmDone'];
$environmentHarmDone = $_POST['environmentHarmDone'];
$physicalTrace = $_POST['physicalTrace'];
$descriptionOfTrace = $_POST['descriptionOfTrace'];
$colorCreature = $_POST['colorCreature'];
$numLegsStandingOn = $_POST['numLegsStandingOn'];
$closestAnimal = $_POST['closestAnimal'];
$otherAppendages = $_POST['otherAppendages'];
$alienSize = $_POST['alienSize'];
$numEyes = $_POST['numEyes'];
$abducted = $_POST['abducted'];
$toOffWorld = $_POST['toOffWorld'];
$timeGone = $_POST['timeGone'];
$howManyCreatures = $_POST['howManyCreatures'];
$additionalDetails = $_POST['additionalDetails'];
$IDreport = $_POST['IDreport'];


$sql = "INSERT INTO classThreeReport (IDclassThree, inVehicle, typeOfVehicle, personHarmDone, environmentHarmDone, physicalTrace, descriptionOfTrace, colorCreature, numLegsStandingOn, closestAnimal, otherAppendages, alienSize, numEyes, abducted, toOffWorld, timeGone, howManyCreatures, additionalDetails, IDreport)
    VALUES (NULL, b'$inVehicle', '$typeOfVehicle', b'$personHarmDone', b'$environmentHarmDone', b'$physicalTrace', '$descriptionOfTrace', '$colorCreature', '$numLegsStandingOn', '$closestAnimal', '$otherAppendages', '$alienSize', '$numEyes', b'$abducted', b'$toOffWorld', '$timeGone', '$howManyCreatures', '$additionalDetails', '$IDreport');";
$conn->query($sql);
header("Location: ../classThree.php?classThree=success");
require_once '../phpInclude/close.php';
?>