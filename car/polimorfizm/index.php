<?php

include 'polim.php';
include 'mit.php';

$mit = new Mit();
echo $mit->getColor();

$car1 = new Polim('Test1', 'Red', '200');
$car1->move(200);
//Получим цвет через функцию
echo $car1->getColor();
//Получим название класса
echo '<br />Класс: ' . $mit->bar();
echo '<br />Класс: ' . $car1->bar();

echo ('<pre>');
print_r ($car1);
print_r ($mit);
echo ('</pre>');