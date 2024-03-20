<?php
$myFile = fopen("newFile.txt","a") or die("Unable to open File");
$txt = "Donald Duck\n";
fwrite($myFile, $txt);
$txt = "Goofy Goof\n";
fwrite($myFile, $txt);
fclose($myFile);
