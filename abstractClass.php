<?php

abstract class Car{
//количество шин
public $shin;

public function startEngine(): string
{
    return 'Двигатель завелся<br>';
}
//abstract function stopEngine();
}

//$car = new Car;
//echo $car->startEngine();

class MegaCar extends Car{
    public function stopEngine(): string
    {
        $result = parent::startEngine();
        $result .= 'Двигатель остановился<br>';
        return $result;
    }
}
$run = new MegaCar;
echo $run->stopEngine();