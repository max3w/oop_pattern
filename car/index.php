<?php
include 'car.php';

$car = new Carn();
$car->brand = 'BMW';
$car->color = 'red';
$car->maxSpeed = '240';
$car->move(60);


$carHonda = new Carn();
$carHonda->brand = 'Honda';
$carHonda->color = 'black';
$carHonda->maxSpeed = '220';
$carHonda->move(40);


echo ('<pre>');
print_r ($car);
echo ('</pre>');
$car->stop();
echo ('<pre>');
print_r ($car);
echo ('</pre>');

echo ('<pre>');
print_r ($carHonda);
echo ('</pre>');



