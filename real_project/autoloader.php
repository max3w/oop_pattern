<?php

function autoloader($class){
    $class = str_replace('\\','/',$class).'.php';
    if (file_exists($class)) {
        require_once $class;
    }
}
//подключаем специальной функцией регистрирует автолоадер

spl_autoload_register('autoloader');
