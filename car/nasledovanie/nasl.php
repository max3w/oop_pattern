<?php

class Carnas
{
    public $brand;
    public $color;
    public $maxSpeed;
    public int $currentSpeed = 0;

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