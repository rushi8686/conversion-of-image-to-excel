<?php

$myfile = fopen("location.txt", "w");
$txt = "Latitude: " . $_GET["Latitude"] . "\nLongitude: " . $_GET["Longitude"];
fwrite($myfile, $txt);
fclose($myfile);

?>
