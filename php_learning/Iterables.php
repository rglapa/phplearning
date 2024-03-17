<!DOCTYPE html>
<html lang="en">
<head>
    <title>Iterables</title>
</head>
<body>
<?php
function getIterable() {
    return ["a","b","c"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
    echo $item;
}
?>

<p><button onclick="location.href='/index.php'">Link to Home</button> </p>
</body>
</html>