<?php
$onoroff = $_GET["state"]; // Declares the request from index.html as a variable
$textfile = "control.txt"; // Declares the name and location of the .txt file
 
$fileLocation = "$textfile";
$fh = fopen($fileLocation, 'w   ') or die("Something went wrong!"); 
$stringToWrite = "$onoroff"; 
fwrite($fh, $stringToWrite); 
fclose($fh); 
 
header("Location: index.html"); 
?>
