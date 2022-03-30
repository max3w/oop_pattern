<?php

trait TraitSpeed
{
    function run($speed){
        $this->speed = $speed;
        echo 'Скорость ' . $speed . '<br />';
    }
}