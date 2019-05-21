<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
<h1>My CREATE page! Gabriel W | February 2019</h1>
<form action="../phpInclude/newEntry.php" method="POST">
        <input type="text" name="first" placeholder="First Name">
        <br><br>
        <input type="text" name="middle" placeholder="Middle Name">
        <br><br>
        <input type="text" name="last" placeholder="Last Name">
        <br><br>
        <input type="text" name="entrant" placeholder="Entrant">
        <br><br>
        <button type="submit" name="submit">Create Entry</button>
    </form>
</body>
</html>