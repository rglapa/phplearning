<!DOCTYPE html>
<html lang="en">
<head>
    <title>Destructor</title>
</head>
<body>
<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name,$color) {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct() {
        echo "The fruit is {$this->name}.";
    }
}

$apple = new Fruit("Apple","red");
?>
<p><a href="/index.html">Link to Home</a></p>
</body>
</html>