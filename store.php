<?php
$myfile = fopen("location.txt", "w") or die("Unable to open file!");
$txt = "Latitude: " . $_GET["Latitude"] . "\nLongitude: " . $_GET["Longitude"];
fwrite($myfile, $txt);
fclose($myfile);
?>