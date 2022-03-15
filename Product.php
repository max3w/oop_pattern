<?php

//Создаем класс
class Product
{
//Наполняем значениями по умолчанию
public $title = "Title";
public $desk = "Desk";
public $price = 100;
}
//Создаем обьект 1
$tovar1 = new Product();
$tovar1->title = "Товар 1 ";
$tovar1->desk = "Описание 1 ";
$tovar1->price = 150;

//Создаем обьект 2
$tovar2 = new Product();
$tovar2->title = "Товар 2 ";
$tovar2->desk = "Описание 2 ";
$tovar2->price = 200;

//Вывод
echo $tovar1->title . $tovar1->desk . $tovar1->price;
echo '<hr>';
echo $tovar2->title . $tovar2->desk . $tovar2->price;



