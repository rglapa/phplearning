<!DOCTYPE html>
<html lang="en">
<head>
    <title>Static Properties</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
<?php
class pi {
    public static $value = 3.14159;
}
echo pi::$value;
?>
<div class="box">
    <p><a href="/index.php">Link to Home</a></p>
</div>
</body>
</html>