<?php echo (<<<'EOF'
<h2>Тестируем ООП</h2>
EOF
);

//echo phpinfo();

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

class Plus{
    //свойства
    private $a = '1'; //значение по умолчанию
    private $b = '2';
    //метод

    /**
     * @return string
     */
    public function pluss()
    {
        $a = $this->a;
        $b = $this->b;
        $c = $a + $b;
        $e = 'Числа:'.$a.'+'.$b.'='.$c;
        return $e;

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

    //Создаем второй обьект с значениями по умолчанию
    $sum = new Plus;
    echo '<hr>';
    echo $sum->pluss();
