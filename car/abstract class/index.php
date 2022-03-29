<?php

include 'abstract.php';
include 'amit.php';

$amit = new Mits();
echo $amit->getColor();
$amit->blockDifference = 90;
  
//Получим название класса
echo '<br />Класс: ' . $amit->bar();

echo ('<pre>');
print_r ($amit);
echo ('</pre>');