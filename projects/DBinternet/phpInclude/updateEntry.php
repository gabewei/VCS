<?php
require_once 'connect.php';
$formValues = ["id", "first", "middle", "last", "entrant"];
//$valueExists = [FALSE, FALSE, FALSE, FALSE, FALSE];

//for ($i = 0; $i < count($tableValues), i++) {

//}

$id = $_POST['id'];
$first = $_POST['first'];
$middle = $_POST['middle'];
$last = $_POST['last'];
$entrant = $_POST['entrant'];

$readsql = "SELECT ID_customer, fname, mname, lname, entrant FROM customer";
$result = $conn->query($readsql);

$updatesql = "UPDATE customer SET fname = '$first', mname = '$middle', lname = '$last', entrant = '$entrant' WHERE ID_customer = '$id';";

$conn->query($updatesql);
header("Location: ../index.php?update=success");
require_once '../phpInclude/close.php';