<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class One Report</title>
    <link rel="stylesheet" href="../alien/css/alien.css">
</head>
<body>
<h1>Gabriel W. | Class One Report | May 2019</h2>

<h2>Please enter the specified information about the encounter:</h3>

<form action="../alien/phpInclude/newEntryC1.php" method="POST">

        <h3 style="text-align: left">Date of Incident:</h3>
        <input type="text" style="width: 21em;" name="inVehicle" placeholder="Were the aliens in a vehicle? (1 is Yes, 0 is No)" />
        <br><br>
        <input type="text" style="width: 12.25em;" name="typeOfVehicle" placeholder="Vehicle type (2 Characters)" />
        <br><br>
        <input type="text" name="additionalDetails" placeholder="Additional Details" />
        <br><hr><br>

        <input type="text" name="IDreport" placeholder="Report ID" />
        <br><hr><br>

        <button type="submit" name="submit">Report Encounter</button>
    </form>
    
</body>
</html>