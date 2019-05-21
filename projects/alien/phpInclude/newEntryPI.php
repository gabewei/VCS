<?php
require_once '../phpInclude/connect.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dayBirth = $_POST['dayBirth'];
$monthBirth = $_POST['monthBirth'];
$yearBirth = $_POST['yearBirth'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$streetAddress = $_POST['streetAddress'];
$city = $_POST['city'];
$stateAddress = $_POST['stateAddress'];
$zip = $_POST['zip'];
$country = $_POST['country'];

$sql = "INSERT INTO personalInformation (IDpersonal, fname, lname, dayBirth, monthBirth, yearBirth, email, phone, streetAddress, city, stateAddress, zip, country)
    VALUES (NULL, '$fname', '$lname', '$dayBirth', '$monthBirth', '$yearBirth', '$email', '$phone', '$streetAddress', '$city', '$stateAddress', '$zip', '$country');";
$conn->query($sql);
header("Location: ../incidentReport.php?PersonalInformation=success");
require_once '../phpInclude/close.php';
?>