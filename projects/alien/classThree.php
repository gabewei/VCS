<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Three Report</title>
    <link rel="stylesheet" href="../alien/css/alien.css">
</head>
<body>
<h1>Gabriel W. | Class Three Report | May 2019</h2>

<h2>Please enter the specified information about the encounter:</h3>

<form action="../alien/phpInclude/newEntryC3.php" method="POST">

        <h3 style="text-align: left">Date of Incident:</h3>
        <input type="text" style="width: 21em;" name="inVehicle" placeholder="Were the aliens in a vehicle? (1 is Yes, 0 is No)" />
        <br><br>
        <input type="text" style="width: 12.25em;" name="typeOfVehicle" placeholder="Vehicle type (2 Characters)" />
        <br><br>
        <input type="text" style="width: 24.4em;" name="personHarmDone" placeholder="Was a human harmed by the aliens? (1 is Yes, 0 is No)" />
        <br><br>
        <input type="text" style="width: 27.7em;" name="environmentHarmDone" placeholder="Was the environment harmed by the aliens? (1 is Yes, 0 is No)" />
        <br><br>
        <input type="text" style="width: 20.75em;" name="physicalTrace" placeholder="Did the aliens leave a trace? (1 is Yes, 0 is No)" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="descriptionOfTrace" placeholder="Describe the trace left if there was any" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="colorCreature" placeholder="What color were the aliens?" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="numLegsStandingOn" placeholder="How many legs did the aliens have?" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="closestAnimal" placeholder="What animal are the aliens most similar to?" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="otherAppendages" placeholder="What other limbs did the aliens have?" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="alienSize" placeholder="How big were the aliens?" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="numEyes" placeholder="How many eyes did the aliens have?" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="abducted" placeholder="Did the aliens abduct you? (1 is Yes, 0 is No)" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="toOffWorld" placeholder="Did the aliens take you off of Earth? (1 is Yes, 0 is No)" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="timeGone" placeholder="How long were you abducted for?" />
        <br><br>
        <input type="text" style="width: 17.2em;" name="howManyCreatures" placeholder="How many aliens were there?" />
        <br><br>
        <input type="text" name="additionalDetails" placeholder="Additional Details" />
        <br><hr><br>
        <input type="text" name="IDreport" placeholder="Report ID" />
        <br><hr><br>

        <button type="submit" name="submit">Report Encounter</button>
    </form>
    
</body>
</html>