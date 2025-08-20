<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>XML DOM</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

print $xmlDoc->saveXML();
?>
<br><br>
<div class="box">
    <a href="/index.html">Link to Home</a>
</div>
</body>
</html>