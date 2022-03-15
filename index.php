<?php echo ('<h2>Тестируем ООП</h2>');

class Person{
    //Свойства
    public $name;
    public $age;
    public $job;

    //метод

    /**
     * @return mixed
     */
    public function greeting()
    {
        return "Hello " . $this->name;
    }
}
    //Создаем обьект из класса
    $eric = new Person(); //все свойства пока пусты
    //Заполняем их
    $eric->name = "Ерик";
    $eric->age = "25";
    $eric->job = "web";

    //Вызываем наш метод гретинг
    echo $eric->greeting();