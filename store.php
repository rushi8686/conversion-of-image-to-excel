<?php

// The file path where changes were made
$filePath = 'location.txt';

// Change directory to your Git repository
chdir('rushi8686/conversion-of-image-to-excel');

// Add the modified file to the Git staging area
exec("git add $filePath 2>&1", $output, $return_var);
if ($return_var != 0) {
    echo "Error adding file to Git: " . implode("\n", $output);
    exit;
}

// Commit the changes with a message
$commitMessage = "Updated file.txt via PHP";
exec("git commit -m '$commitMessage' 2>&1", $output, $return_var);
if ($return_var != 0) {
    echo "Error committing changes: " . implode("\n", $output);
    exit;
}

// Push the changes to the remote repository
exec("git push origin master 2>&1", $output, $return_var); // Change 'main' to your current branch
if ($return_var != 0) {
    echo "Error pushing to remote repository: " . implode("\n", $output);
} else {
    echo "Changes pushed successfully!";
}

$myfile = fopen("location.txt", "w") or die("Unable to open file!");
$txt = "Latitude: " . $_GET["Latitude"] . "\nLongitude: " . $_GET["Longitude"];
fwrite($myfile, $txt);
fclose($myfile);

?>