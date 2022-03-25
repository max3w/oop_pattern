<?php

class Honda extends Carinc
{
    public function setColor($color){ //функция cеттера задает цвет
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
}