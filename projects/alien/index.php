<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alien Report</title>
    <link rel="stylesheet" href="../alien/css/alien.css">
</head>
<body>
    <h1>Gabriel W. | Alien Personal Information Report | April 29 2019</h2>
    <h2>Please enter the specified information about the encounter:</h3>
<form action="../alien/phpInclude/newEntryPI.php" method="POST">

        <h3 style="text-align: left">Name:</h3>
        <input type="text" name="fname" placeholder="First Name" />
        <br><br>
        <input type="text" name="lname" placeholder="Last Name" />
        <br><hr><br>

        <h3 style="text-align: left;">Date of Birth:</h3>
        <input type="text" name="dayBirth" placeholder="Day of Birth (dd)" />
        <br><br>
        <input type="text" name="monthBirth" placeholder="Month of Birth (mm)" />
        <br><br>
        <input type="text" name="yearBirth" placeholder="Year of Birth (yyyy)" />
        <br><hr><br>

        <h3 style="text-align: left;">Contact Information:</h3>
        <input type="text" name="email" placeholder="Email" />
        <br><br>
        <input type="text" name="phone" placeholder="Phone Number" />
        <br><hr><br>

        <h3 style="text-align: left;">Address:</h3>
        <input type="text" name="streetAddress" placeholder="Street Address" />
        <br><br>
        <input type="text" name="city" placeholder="City" />
        <br><br>
        <input type="text" name="stateAddress" placeholder="State (Abbreviated)" />
        <br><br>
        <input type="text" name="zip" placeholder="Zipcode" />
        <br><br>
        <input type="text" name="country" placeholder="Country" />
        <br><hr><br>
        

        <button type="submit" name="submit">Report Encounter</button>
    </form>
</body>
</html>