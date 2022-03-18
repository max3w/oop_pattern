<?php

//Создаем класс

class Production
{
//Наполняем значениями по умолчанию
    public string $title = "Title";
    private int $price = 100;

    function __construct($title, $price)
    {
        //присваиваем переменные
        $this->title=$title;
        $this->price=$price;
        echo $title . $price . '<hr>';
    }

    //Добавим метод что вернет цену только для чтения
    public function getPrice(): int
    {
        return $this->price;
    }
    //Получим заголовок
    public function getTitle()
    {
        return $this->title;
    }
}

class Seller {
//Наш метод берет класс Production как обьект $product и размер скидки $sale
    function sale(Production $product, $sale): int
    {
    return $product->getPrice() - $sale;
    }
}

$product = new Production('Часы', 100);
$seller = new Seller();
echo $product->getTitle() . $seller->sale($product, '10');
echo $product->getTitle() . $seller->sale($product, '0');
