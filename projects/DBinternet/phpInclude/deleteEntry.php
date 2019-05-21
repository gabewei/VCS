<?php
require_once 'connect.php';
$id = $_POST['customerID'];


$sql = "DELETE FROM customer WHERE ID_customer = $id;";

$conn->query($sql);
header("Location: ../index.php?deletion=success");
require_once '../phpInclude/close.php';