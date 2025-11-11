<?php
$sayHello = "Hello, World!";
$sayWelcome = "Welcome to PHP programming.";

echo $sayHello . " " . $sayWelcome;

class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("Red", "Honda");


var_dump($myCar);
echo $myCar->message();

?>