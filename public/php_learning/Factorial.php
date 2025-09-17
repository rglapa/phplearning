<!DOCTYPE html>
<html lang="en">
<head>
    <title>Factorial</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
<?php
    function factorial ($n) {
        if ($n == 1) {
            echo $n . PHP_EOL;
            return 1;
        } else {
            echo "$n * ";
            return $n*factorial($n-1);
        }
    }
    echo "<br>Factorial of 5 = " . factorial(5);
?>
<br><br>
<div class="box">
    <a href="/index.html">Link to Home</a>
</div>
</body>
</html>