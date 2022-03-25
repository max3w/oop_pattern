<?php
include 'incap.php';
include 'mitsub.php';
include 'bmw.php';

$car = new Carnas();
$bmw = new Bmw();

echo ('<pre>');
print_r ($car);
print_r ($bmw);
echo ('</pre>');

