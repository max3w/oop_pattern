<?php

include 'inter.php';

class Mits extends Abstr implements IPedali, IRool
{

    //public string $sign;
    public $sign = 'M';
    public int $blockDifference;

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

    public function detDynamic($param)
    {
        echo '9.4 c до 100';
    }

    public function start()
    {
        $this->setSpeed(5);
    }

    public function setSpeed($speed)
    {
        $this->setSpeed(400);
    }

    public function blockDifference()
    {
        $this->rool = 90;
    }

    public function setCorner()
    {

    }
}