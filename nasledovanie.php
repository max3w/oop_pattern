<?php
class Tovars
{
//Наполняем значениями по умолчанию
    public string $title;
    public int $price;

    function __construct($title, $price)
    {
        //присваиваем переменные
        $this->title = $title;
        $this->price = $price;
        echo 'Товар:' . $title . ' Цена:' . $price  . 'грн' . '<hr>';
    }
    //Любая функция
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getAll()
    {
        return $this->title . $this->price;
    }
}
$pr1 = new Tovars(1,2);
//Вызываем эту функцию в обьекте
echo 'Сама цена:' . $pr1->getPrice()  . ' грн';

//Создаем дочерний класс от класса Tovars

class Podtovar extends Tovars { //сюда переносятся все публичные переменные и методы родителя
    //Добавим два свойства
    public int $type;
    public int $size;
    function __construct($title,$price,$type,$size) {
        parent::__construct($title,$price); //Получаем из родительского
        //Добавляем новые
        $this->type = $type;
        $this->size = $size;
    }

    //Перезапишем метод getAll();
    public function getAll(){
      $result = parent::getAll();
      $result .= '<br>Тип ' . $this->type .'<br>Размер '. $this->size;
      return $result;
    }
}
$all = new Tovars(3,4);
echo $all->getAll() . '<br>';
$pod = new Podtovar('title',200,3,4,);
echo $pod->getAll() . '<br>';
