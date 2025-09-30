<heading />
<head>
    <title>Abstract Classes</title>
</head>
<body>
    <div class="text-amber-400">
        Test text
        </div>
<?php
// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro();
}
// Child classes
class Audi extends Car {
    public function intro()
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car {
    public function intro()
    {
        return "Proud to be Swedish! I'm a $this->name";
    }
}

class Citrogen extends Car {
    public function intro()
    {
        return "French extravagance! I'm a $this->name";
    }
}

$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citrogen = new citrogen("Citrogen");
echo $citrogen->intro()
?>
<p><button onclick="location.href='/'">Link to Home</button></p>
<footer />