<?php

//Добавляем автозагрузку классов
function __autoload($class){
    require_once $class.".php";
}

//require_once 'TraitSpeed.php';
//include 'bear.php';
//include 'human.php';

$bear = new Bear();
$human = new Human();

$bear->run(15);
$human->run('10');

