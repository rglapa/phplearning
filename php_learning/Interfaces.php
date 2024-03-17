<!DOCTYPE html>
<html lang="en">
<head>
    <title>Interfaces</title>
</head>
<body>
<?php

interface Animal {
    public function makeSound();
}

class Cat implements Animal {
    public function makeSound()
    {
        echo "Meow";
    }
}

class Dog implements Animal {
    public function makeSound()
    {
        // TODO: Implement makeSound() method.
        echo " Bark ";
    }
}

class Mouse implements Animal {
    public function makeSound()
    {
        // TODO: Implement makeSound() method.
        echo " Squeak ";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat,$dog,$mouse);

// For loop
foreach($animals as $animal) {
    $animal->makeSound();
}
?>

<p><button onclick="location.href='/index.php'">Link to Home</button> </p>
</body>
</html>