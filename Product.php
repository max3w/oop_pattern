<?php

//Создаем класс

/**
 *
 */
class Product
{
//Наполняем значениями по умолчанию
public $title = "Title";
public $desk = "Desk";
public $price = 100;

//Функция вывода
function getAll(){
    return $this->title . $this->desk . $this->price . '<hr>';
}
//Добавляем конструктор и передаем в него все параметры
function __construct($title,$desk,$price)
{
    //присваиваем переменные
    $this->title=$title;
    $this->desk=$desk;
    $this->price=$price;
    echo $this->getAll();
}
//Добавляем деструктор
function __destruct()
{
    echo $this->title . "Добавлен в бд</br>";
}
}
//Создаем обьект 1
$tovar1 = new Product('Товар1 ', 'Описание1 ', '150');
//Создаем обьект 2
$tovar2 = new Product('Товар2 ', 'Описание2 ', '200');