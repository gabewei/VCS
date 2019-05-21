<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
    <style>
table, th, td {
    border: 1px solid black;
}

</style>
</head>
<body>
<h1>My READ page! Gabriel W | February 2019</h1>
    <?php require '../phpInclude/connect.php';
 
 //$sql = "INSERT INTO customer"

    echo "<h3>Now trying to read and display the DB records ...</h3><br>";

    $sql = "SELECT ID_customer, fname, mname, lname, entrant FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Entrant</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID_customer"]. "</td><td>" . $row["fname"]. "</td><td>" . $row["mname"] . "</td><td>
         " . $row["lname"]. "</td><td>" . $row["entrant"]. "</td></tr>";
    }

} else {
    echo "No results";
} 
echo "</table>";
 

echo "<br><h3>Finished the read section, moving on to the close section ...</h3>";
echo "<br><hr><br>";

    ?>
    <?php require '../phpInclude/close.php' ?>

<a href="../index.php"><h4>Return to Menu</h4></a>
</body>
</html>
