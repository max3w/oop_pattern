<?php
//методы описные в интерфейсе можно пристыковать
//инерфейсы как и класы можно расширять
//интерфейс можно пристыковать к любому классу
//у интерфейса все классы абстрактные

interface IPedali{
    public function start();
    public function setSpeed($speed);
    public function stop();
}
interface IRool{
    public function blockDifference(); //руль прямо
    public function setCorner(); //угол поворота
}
