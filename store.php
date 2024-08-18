<?php

$txt = "Latitude: " . $_GET["Latitude"] . "\nLongitude: " . $_GET["Longitude"];
fwrite("location.txt", $txt);

?>
