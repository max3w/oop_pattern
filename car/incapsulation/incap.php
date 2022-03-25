<?php

class Carinc
{
    protected $brand; //не будет видно отовсюду $honda->brand; уже не сможем изменить
    protected $color; // будет доступен даже при наследовании
    private $maxSpeed;
    protected int $currentSpeed = 0;

    public function __construct($brand="Brand",$color="blue",$maxSpeed="140"){
        $this->brand=$brand;
        $this->color=$color;
        $this->maxSpeed=$maxSpeed;
    }

    public function move($current){
        $this->currentSpeed = $current;
    }
    public function stop(){
        $this->currentSpeed = 0;
    }
}