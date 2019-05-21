<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB Menu Page</title>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <h3>Made by Gabe W. | February 2019 </h3>
    <?php
    /*
     echo '<h3>Starting remote DB connection ... </h3>';

     $servername = "localhost";
     $username = "root";
     $password = "toor";
     $dbname = "a4";
 
     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
 
     // Check connection
     if ($conn->connect_error) {
         $servername = "gator4268.hostgator.com";
         $username = "mmcclend_a4root";
         $password = "a4toor";
         $dbname = "mmcclend_a4";
         $conn = new mysqli($servername, $username, $password, $dbname);
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }
     }
     echo "Connected successfully";*/
    ?>
    <form action="includes/signup.inc.php">
        <input type="text" name="first" placeholder="Firstname">
        <input type="text" name="middle" placeholder="Middlename">
        <input type="text" name="last" placeholder="Lastname">
        <input type="text" name="entrant" placeholder="Entrant">
        <br>
        <button type="submit" name="submit">Submits</button>
    </form>
</body>
</html>