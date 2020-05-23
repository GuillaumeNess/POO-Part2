<?php
require_once "Bicycle.php";
require_once "Car.php";
require_once "Truck.php";


$bicycle = new Bicycle('blue', 1);
    echo $bicycle->forward() . "<br />";
    var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward() . "<br />";
var_dump($car);

$truck = new Truck('black', 2, 'fuel', 2500, 1888);
echo $truck->forward() . "<br>";
echo $truck->brake() . "<br>";
echo $truck->getIsFull() . "<br>";


var_dump(Car::ALLOWED_ENERGIES);

?>