<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
<h1>My UPDATE page! Gabriel W | February 2019</h1>

<h4>Enter Entry to Update and New Values:</h4>
    <form action="../phpInclude/updateEntry.php" method="POST">
        <input type="text" name="id" placeholder="Customer ID">
        <br><br>
        <input type="text" name="first" placeholder="First Name">
        <br><br>
        <input type="text" name="middle" placeholder="Middle Name">
        <br><br>
        <input type="text" name="last" placeholder="Last Name">
        <br><br>
        <input type="text" name="entrant" placeholder="Entrant">
        <br><br>
        <button type="submit" name="submit">Update Entry</button>
    </form>
</body>
</html>