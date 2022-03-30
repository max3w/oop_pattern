<?php

require_once 'TraitSpeed.php';
include 'bear.php';
include 'human.php';

$bear = new Bear();
$human = new Human();

$bear->run(15);
$human->run('10');

