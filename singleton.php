<?php

class Singleton {
    public int $data;

    private function __construct(){
        $this->data = rand();
    }
    //Так он остается статическим
    private static $instance = null;
    public static function getInstance()
    {
        if (is_null(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }
    //и делаем пустые функции чтобы невозможно было их вызвать
    private function __clone(){}
    private function __wakeup(){}
}
/*$singleton1 = new Singleton();
$singleton2 = new Singleton();
//Так результат меняется каждый раз
echo $singleton1->data .'<br>';
echo $singleton2->data . '<br>';*/

//При таком вызове статический
$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();
echo $s1->data;
echo '<br>';
echo $s2->data;
