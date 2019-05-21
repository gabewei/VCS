<?php
require_once 'connect.php';
$first = $_POST['first'];
$middle = $_POST['middle'];
$last = $_POST['last'];
$entrant = $_POST['entrant'];

$sql = "INSERT INTO customer (ID_customer, fname, mname, lname, entrant)
    VALUES (NULL, '$first', '$middle', '$last', '$entrant');";

$conn->query($sql);
header("Location: ../index.php?signup=success");
require_once '../phpInclude/close.php';