<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
<h1>My DELETE page! Gabriel W | February 2019</h1>
<form action="../phpInclude/deleteEntry.php" method="POST">
        <input type="int" name="customerID" placeholder="Customer ID">
        <br><br>
        <button type="submit" name="submit">Delete Entry</button>
    </form>
<a href="../index.php"><h4>Back to Menu</h4></a>
</body>
</html>