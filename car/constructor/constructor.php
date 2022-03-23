<?php
include 'carcons.php';

//Конструктор это метод, что вызывается первым в момент создания класса

$car = new Carcons();
$car->move(60);

echo ('<pre>');
print_r ($car);

$car->stop();

//Вызываем статический метод вне класса
$newCar = Carcons::random();

print_r ($newCar);


//обращаемся к селф счетчику
echo '<br>Количество машин: ' . Carcons::$_counterOfCars;

echo ('<pre>');