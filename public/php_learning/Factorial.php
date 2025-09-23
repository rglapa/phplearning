<heading />
    <title>Factorial</title>
    <link rel="stylesheet" href="/styles.css">
<endheading />
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
    <a href="/">Link to Home</a>
</div>
<footer />