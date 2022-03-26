<?php

class Mit extends Polim
{
    //public string $sign;
    public $sign = 'M';

    public function __construct()
    {
        //Добавим новое значение значек
        //$sign = 'M';
        //$this->sign=$sign;
        parent::__construct('Mitsub', 'white', '500');
    }
    //полиморфизм это перезапись метода в дочернем
    public function getColor(){
        return 'Это цвет: ' . $this->color;
    }
    public function bar(){
        return __CLASS__;
    }
}