<?php
include 'nasl.php';
include 'mitsub.php';
include 'bmw.php';

$mitsub = new Mitsub();
$bmw = new Bmw();
$car1 = new Carnas('Test1', 'Red', '200');
$car1->move(200);

echo ('<pre>');
print_r ($car1);
print_r ($mitsub);
print_r ($bmw);
echo ('</pre>');
//Наследования позволяют расширить класс
