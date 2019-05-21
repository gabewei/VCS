<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incident Report</title>
    <link rel="stylesheet" href="../alien/css/alien.css">
</head>
<body>
<h1>Gabriel W. | Alien Incident Report | May 2019</h2>

<h2>Please enter the specified information about the encounter:</h3>

<!--<form action="../alien/phpInclude/searchPI.php" method="POST">
	<input type="text" name="searchPIname" placeholder="Name" />
	<input type="submit" name ="submit" value="Search" />
</form>
-->

<form action="../alien/phpInclude/newEntryIR.php" method="POST">

        <h3 style="text-align: left">Date of Incident:</h3>
        <input type="text" name="dayOccur" placeholder="Day (dd)" />
        <br><br>
        <input type="text" name="monthOccur" placeholder="Month (mm)" />
        <br><br>
        <input type="text" name="yearOccur" placeholder="Year (yyyy)" />
        <br><hr><br>

        <h3 style="text-align: left">Address of Incident:</h3>
        <input type="text" name="streetOccur" placeholder="Street" />
        <br><br>
        <input type="text" name="cityOccur" placeholder="City" />
        <br><br>
        <input type="text" name="stateOccur" placeholder="State (Abbreviated)" />
        <br><br>
        <input type="text" name="zipOccur" placeholder="Zipcode" />
        <br><br>
        <input type="text" name="countryOccur" placeholder="Country" />
        <br><hr><br>

        <h3 style="text-align: left;">Other Details:</h3>
        <input type="text" style="width: 13.5em;" name="classEncounter" placeholder="Class of Encounter (1, 2, or 3)" />
        <br><br>
        <input type="text" style="width: 18em;" name="threatEncounter" placeholder="Was the encounter threatening? (Y or N)" />
        <br><br>
        <input type="text" style="width: 22em;" name="corroborated" placeholder="Was the incident corroborated? (1 is Yes, 0 is No)" />
        <br><br>
        <input type="text" style="width: 21.75em;" name="usingPsychedelics" placeholder="Were you using Psychedelics? (1 is Yes, 0 is No)" />
        <br><hr><br>

        <input type="text" name="IDpersonal" placeholder = "Personal ID" />
        <br><hr><br>

        <button type="submit" name="submit">Report Encounter</button>
    </form>
    
</body>
</html>