<?php
require_once '../phpInclude/connect.php';
$dayOccur = $_POST['dayOccur'];
$monthOccur = $_POST['monthOccur'];
$yearOccur = $_POST['yearOccur'];
$streetOccur = $_POST['streetOccur'];
$cityOccur = $_POST['cityOccur'];
$stateOccur = $_POST['stateOccur'];
$zipOccur = $_POST['zipOccur'];
$countryOccur = $_POST['countryOccur'];
$classEncounter = $_POST['classEncounter'];
$threatEncounter = $_POST['threatEncounter'];
$corroborated = $_POST['corroborated'];
$usingPsychedelics = $_POST['usingPsychedelics'];
$IDpersonal = $_POST['IDpersonal'];


$sql = "INSERT INTO incidentReport (IDreport, dayOccur, monthOccur, yearOccur, streetOccur, cityOccur, stateOccur, zipOccur, countryOccur, classEncounter, threatEncounter, corroborated, usingPsychedelics, IDpersonal)
    VALUES (NULL, '$dayOccur', '$monthOccur', '$yearOccur', '$streetOccur', '$cityOccur', '$stateOccur', '$zipOccur', '$countryOccur', '$classEncounter', '$threatEncounter', b'$corroborated', b'$usingPsychedelics', '$IDpersonal');";
$conn->query($sql);
header("Location: ../classMenu.html?incidentReport=success");
require_once '../phpInclude/close.php';
?>