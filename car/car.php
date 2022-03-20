<?php

class Carn
{
    public $brand;
    public $color;
    public $maxSpeed;
    public $currentSpeed = 0;

    public function move($current){
       $this->currentSpeed = $current;
    }
    public function stop(){
        $this->currentSpeed = 0;
    }
}