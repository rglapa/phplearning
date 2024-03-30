<!DOCTYPE html>
<html lang="en">
<head>
    <title>Passing Functions</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
<?php
    function square($number) {
        return $number * $number;
    }
    $arr = [1,2,3,4,5];
    $squares = array_map('square',$arr);
    var_dump($squares);
?>
<br><br>
<div class="box">
    <a href="/index.php">Link to Home</a>
</div>
</body>
</html>