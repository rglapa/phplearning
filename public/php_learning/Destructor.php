<heading />
    <title>Destructor</title>
<endheading />
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
<div class="box">
    <a href="/">Link to Home</a>
</div>
<footer />