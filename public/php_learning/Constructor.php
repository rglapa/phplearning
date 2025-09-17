<!DOCTYPE html>
<html lang="en">
<head>
    <title>Constructor</title>
</head>
<body>
<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name() {
        return $this->name;
    }
    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name() . '<br>';
echo $apple->get_color();
?>
<p><a href="/index.html">Link to Home</a></p>
</body>
</html>