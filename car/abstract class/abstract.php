<?php

abstract class Abstr //это только очертания обьекта макет класса
// у абстрактного мы не можем создать обьект напрямую
{
    protected $brand; //не будет видно отовсюду $honda->brand; уже не сможем изменить
    protected $color; // будет доступен даже при наследовании
    private int $maxSpeed;
    protected int $currentSpeed = 0;
    protected $rool = 0;

    public function __construct($brand='Brand', $color='blue', $maxSpeed='140'){
        $this->brand=$brand;
        $this->color=$color;
        $this->maxSpeed=$maxSpeed;
    }
    //абстрактная функция может содеражть только перечень переменных без самого тела функции
    abstract public function detDynamic($param); //имеют только название и параметры
    //и он должен быть обязательно определен в классе потомка

    public function move($current){
        $this->currentSpeed = $current;
    }
    public function stop(){
        $this->currentSpeed = 0;
    }
}