<?php

class Mitsub extends Carinc
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
}