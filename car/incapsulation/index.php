<?php
include 'incap.php';
include 'mitsub.php';
include 'Honda.php';

$honda = new Honda();
$honda->move(100);
$honda->setColor("red");
echo $honda->getColor(); //можем получить только с помощью функции потому что protected

echo ('<pre>');
print_r ($honda);
echo ('</pre>');
//Наследования позволяют расширить класс
