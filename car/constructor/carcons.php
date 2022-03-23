<?php

class Carcons
{
    const random = 0;
    public $brand;
    public $color;
    public $maxSpeed;
    public $currentSpeed = 0;

    //Добавим статическую переменную одна на весь класс
    public static int $_counterOfCars=0;
    //Статические методы исп. когда надо добавить что то не связаное с
    // методами а как надстройку
    public static function random(): Carcons
    {
        return new Carcons('Mycar', 'red', rand(200, 300));
}
    public function __construct($brand="VAR",$color="blue",$maxSpeed="140"){
        $this->brand=$brand;
        $this->color=$color;
        $this->maxSpeed=$maxSpeed;
        //добавим счетчик машин через статическое свойство
       self::$_counterOfCars++;
    }
    public function __destruct(){
        //Выполняется когда скрипт выполнился из памяти
        $this->stop();
        //print_r ($this->currentSpeed);
    }

    public function move($current){
        $this->currentSpeed = $current;
    }
    public function stop(){
        $this->currentSpeed = 0;
    }
}